<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;
use App\Models\QuizResult;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
    // Hiển thị giao diện làm bài
    public function show($id)
    {
        // Lấy bài test kèm theo câu hỏi và đáp án (Lưu ý: Không lấy cột is_correct ra view để chống gian lận)
        $quiz = Quiz::with(['questions.answers' => function($query) {
            $query->select('id', 'id_question', 'content'); 
        }])->findOrFail($id);

        return view('user.quiz.show', compact('quiz'));
    }

    // Xử lý nộp bài và chấm điểm
    public function submit(Request $request, $id)
    {
        $quiz = Quiz::findOrFail($id);
        $user = Auth::user();
        
        // $request->answers sẽ có dạng mảng: [question_id => answer_id]
        $userAnswers = $request->input('answers', []);
        
        $totalScore = 0;
        $maxScore = 0;

        // Chấm điểm
        foreach ($quiz->questions as $question) {
            $maxScore += $question->points;

            if (isset($userAnswers[$question->id])) {
                $selectedAnswerId = $userAnswers[$question->id];
                
                // Kiểm tra xem đáp án user chọn có đúng không
                $isCorrect = Answer::where('id', $selectedAnswerId)
                                   ->where('id_question', $question->id)
                                   ->value('is_correct');

                if ($isCorrect) {
                    $totalScore += $question->points;
                }
            }
        }

        // Quy đổi ra thang điểm 100 nếu cần, hoặc giữ nguyên. Giả sử lưu theo %
        $scorePercentage = ($maxScore > 0) ? round(($totalScore / $maxScore) * 100) : 0;
        $isPassed = $scorePercentage >= $quiz->passing_score;

        // Lưu kết quả vào DB
        QuizResult::create([
            'id_user' => $user->id,
            'id_quiz' => $quiz->id,
            'score' => $scorePercentage,
            'is_passed' => $isPassed
        ]);

        if ($isPassed) {
            return redirect()->back()->with('success', "Chúc mừng! Bạn đạt {$scorePercentage}%. Bạn đã đủ điều kiện học chương tiếp theo.");
        } else {
            return redirect()->back()->with('error', "Bạn chỉ đạt {$scorePercentage}%. Rất tiếc, bạn cần đạt tối thiểu {$quiz->passing_score}% để qua môn.");
        }
    }
}
