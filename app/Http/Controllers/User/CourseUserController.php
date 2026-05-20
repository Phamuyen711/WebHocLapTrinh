<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\CourseEnrolled;
use App\Models\Review;
use Illuminate\Support\Facades\DB;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Support\Facades\Auth;

// THÊM 2 MODEL NÀY VÀO ĐỂ LẤY DỮ LIỆU BÀI KIỂM TRA
use App\Models\Quiz;
use App\Models\QuizResult;

class CourseUserController extends Controller
{
    public function showVideo($id, $lessonId)
    {
        if (!Auth::check()) {
            return redirect()->route('user.login')->with('error', 'Bạn cần đăng nhập để xem video.');
        }

        $user = Auth::user();
        $isEnrolled = DB::table('tbl_course_enrolled')
            ->where('id_user', $user->id)
            ->where('id_course', $id)
            ->exists();

        // Tìm bài học và khóa học
        $lesson = Lesson::findOrFail($lessonId);
        $course = Course::findOrFail($id);

        // ========================================================
        // [BẮT ĐẦU] LOGIC KIỂM TRA & CHẶN BÀI HỌC DỰA TRÊN QUIIZ
        // ========================================================
        
        // 1. Lấy tất cả bài quiz của khóa học này
        $quizzes = Quiz::where('id_course', $id)->get();
        
        // 2. Lấy danh sách ID các bài quiz mà user ĐÃ THI ĐẬU
        $passedQuizzes = QuizResult::where('id_user', $user->id)
            ->where('is_passed', true)
            ->pluck('id_quiz')
            ->toArray();

        // 3. Logic khóa chương: Kiểm tra xem chương trước đó có bài test không?
        // (Giả sử cột 'chapter' của bạn đang lưu là số: 1, 2, 3...)
        $currentChapter = (int) $lesson->chapter; 
        
        if ($currentChapter > 1) {
            $prevChapter = (string) ($currentChapter - 1);
            
            // Tìm xem chương trước đó có bài quiz nào không
            $prevQuiz = $quizzes->where('chapter', $prevChapter)->first();
            
            // Nếu chương trước CÓ bài quiz, MÀ user CHƯA ĐẬU (không nằm trong mảng passed) -> CHẶN
            if ($prevQuiz && !in_array($prevQuiz->id, $passedQuizzes)) {
                return redirect()->route('user.course-detail', $id)
                    ->with('error', 'Bạn cần thi đậu bài kiểm tra của Chương ' . $prevChapter . ' trước khi học tiếp!');
            }
        }
        // ========================================================
        // [KẾT THÚC] LOGIC KIỂM TRA
        // ========================================================

        // Lấy tất cả bài học của khóa học
        $lessons = Lesson::where('id_course', $id)->get();

        // Tìm bài học trước và sau
        $currentLessonIndex = null;
        foreach ($lessons as $index => $item) {
            if ($item->id == $lessonId) {
                $currentLessonIndex = $index;
                break;
            }
        }

        $prevLesson = null;
        $nextLesson = null;

        if ($currentLessonIndex !== null) {
            if ($currentLessonIndex > 0) {
                $prevLesson = $lessons[$currentLessonIndex - 1];
            }

            if ($currentLessonIndex < count($lessons) - 1) {
                $nextLesson = $lessons[$currentLessonIndex + 1];
            }
        }

        $reviews = Review::where('id_course', $id)
            ->where('status', 'exist')
            ->orderByDesc('created_at')
            ->get();

        if ($lesson->is_preview || $isEnrolled) {
            // Nhớ truyền thêm $quizzes và $passedQuizzes ra View để hiển thị nút "Làm bài kiểm tra"
            return view('user.video', compact('user', 'lesson', 'course', 'lessons', 'reviews', 'prevLesson', 'nextLesson', 'quizzes', 'passedQuizzes'))
                ->with('courseId', $id);
        } else {
            return redirect()->route('user.course-detail', $id)
                ->with('error', 'Bạn cần đăng ký khóa học để xem video này.');
        }
    }

    public function course_detail($id)
    {
        $user = Auth::user();
        $course = Course::with(['lessons', 'category'])->findOrFail($id);
        $chapters = json_decode($course->list_chapter, true);
        
        $isEnrolled = false;
        $passedQuizzes = []; // Mảng chứa ID các quiz đã pass

        if ($user) {
            $isEnrolled = CourseEnrolled::where('id_user', $user->id)
                ->where('id_course', $course->id)
                ->exists();

            // Lấy danh sách quiz user đã PASS để hiển thị dấu tích xanh ngoài giao diện
            $passedQuizzes = QuizResult::where('id_user', $user->id)
                ->where('is_passed', true)
                ->pluck('id_quiz')
                ->toArray();
        }

        $popularCourses = Course::where('is_popular', 1)->limit(5)->get();

        // Lấy toàn bộ bài quiz của khóa học này để in ra đề cương (Syllabus)
        $quizzes = Quiz::where('id_course', $id)->get();

        // Ghi nhận lượt xem vào course_views
        if ($user) {
            $existing = DB::table('course_views')
                ->where('user_id', $user->id)
                ->where('category_id', $course->category_id)
                ->first();

            if ($existing) {
                DB::table('course_views')
                    ->where('user_id', $user->id)
                    ->where('category_id', $course->category_id)
                    ->update([
                        'view_count' => $existing->view_count + 1,
                        'last_viewed_at' => now()
                    ]);
            } else {
                DB::table('course_views')->insert([
                    'user_id' => $user->id,
                    'category_id' => $course->category_id,
                    'view_count' => 1,
                    'last_viewed_at' => now()
                ]);
            }

            $viewedCategoryIds = DB::table('course_views')
                ->where('user_id', $user->id)
                ->orderByDesc('view_count')
                ->orderByDesc('last_viewed_at')
                ->pluck('category_id');

            $recommendedCourses = Course::whereIn('category_id', $viewedCategoryIds)
                ->where('id', '!=', $course->id)
                ->inRandomOrder()
                ->limit(8)
                ->get();
        } else {
            $recommendedCourses = Course::where('category_id', $course->category_id)
                ->where('id', '!=', $course->id)
                ->inRandomOrder()
                ->limit(8)
                ->get();
        }

        // Truyền $quizzes và $passedQuizzes ra View
        return view('user.themes.course.course-detail', compact('user', 'course', 'chapters', 'isEnrolled', 'popularCourses', 'recommendedCourses', 'quizzes', 'passedQuizzes'));
    }
}