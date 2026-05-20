<?php
namespace App\Http\Controllers\Admin;

use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        $perPage = (int) $request->input('per_page', 10);
        $perPage = ($perPage > 0 && $perPage <= 100) ? $perPage : 10;

        $courses = Course::with('category')
            ->orderBy('id', 'asc')
            ->paginate($perPage)
            ->appends($request->query());  // giữ query string

        return view('admin.themes.courses.tableCourse', compact('courses'));
    }

    public function show($id)
    {
        $course = Course::with('category')->findOrFail($id);
        return view('admin.themes.courses.courseDetail', compact('course'));
    }

    public function create()
    {
        $categories = Category::all();
        $courses = Course::select('id', 'title', 'list_chapter')->get();

        foreach ($courses as $course) {
            $course->chapters = json_decode($course->list_chapter, true) ?? [];
        }

        return view('admin.themes.courses.createCourse', compact('categories', 'courses'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => [
                'required',
                'string',
                'max:255',
                'regex:/^[a-zA-Z0-9\s\p{L}]+$/u'
            ],
            'level' => [
                'required',
                'string',
                'max:50',
                'regex:/^[a-zA-Z0-9\s\p{L}]+$/u'
            ],
            'lesson' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'category_id' => 'required|exists:tbl_categories,id',
            'total_time_finish' => [
                'required',
                'string',
                'regex:/^[0-9:h]+$/' // Cho phép số, dấu hai chấm và chữ h
            ],
            'finish_time' => [
                'required',
                'string',
                'regex:/^[0-9:h]+$/' // Cho phép số, dấu hai chấm và chữ h
            ],
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'expiration_date' => 'required|integer|min:1|max:6',
            'status' => 'required|in:Complete,Uncomplete',
            'is_free' => 'required|boolean',
            'is_popular' => 'required|boolean',
            'list_chapter' => 'required|array',
            'list_chapter.*.chapter_number' => 'required|integer|min:1',
            'list_chapter.*.chapter_title' => 'required|string|max:255',
        ], [
            'title.regex' => 'Tên khoá học không được chứa ký tự đặc biệt',
            'level.regex' => 'Tên khoá học không được chứa ký tự đặc biệt'
        ]);

        $data = $request->except('thumbnail', 'list_chapter');

        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $request->file('thumbnail')->store('thumbnails', 'public');
        }

        $data['list_chapter'] = json_encode(array_values($request->list_chapter));

        $course = Course::create($data);

        return redirect()->route('admin.courses.index')->with('success', 'Khóa học đã được thêm thành công');
    }

    public function edit($id)
    {
        $course = Course::findOrFail($id);
        $categories = Category::all();
        return view('admin.themes.courses.editCourse', compact('course', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'level' => 'required|string|max:50',
            'lesson' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'category_id' => 'required|exists:tbl_categories,id',
            'total_time_finish' => [
                'required',
                'string',
                'regex:/^[0-9:h]+$/' // Cho phép số, dấu hai chấm và chữ h
            ],
            'finish_time' => [
                'required',
                'string',
                'regex:/^[0-9:h]+$/' // Cho phép số, dấu hai chấm và chữ h
            ],
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'expiration_date' => 'required|integer|min:1|max:6',
            'status' => 'required|in:Complete,Uncomplete',
            'is_free' => 'required|boolean',
            'is_popular' => 'required|boolean',
            'list_chapter' => 'required|array',
            'list_chapter.*.chapter_number' => 'required|integer|min:1',
            'list_chapter.*.chapter_title' => 'required|string|max:255',
        ]);

        $course = Course::findOrFail($id);
        $data = $request->except(['thumbnail', 'list_chapter']);

        // Nếu form có gửi list_chapter thì mới cập nhật
        if ($request->has('list_chapter')) {
            $data['list_chapter'] = json_encode(array_values($request->list_chapter));
        }

        if ($request->hasFile('thumbnail')) {
            if ($course->thumbnail) {
                Storage::disk('public')->delete($course->thumbnail);
            }
            $data['thumbnail'] = $request->file('thumbnail')->store('thumbnails', 'public');
        }

        $course->update($data);

        return redirect()->route('admin.courses.index')->with('success', 'Thông tin khóa học đã được cập nhật');
    }

    public function destroy($id)
    {
        $course = Course::findOrFail($id);

        if ($course->thumbnail) {
            Storage::disk('public')->delete($course->thumbnail);
        }

        $course->delete();
        return redirect()->route('admin.courses.index')->with('success', 'Khoá học này đã được xoá');
    }
}
