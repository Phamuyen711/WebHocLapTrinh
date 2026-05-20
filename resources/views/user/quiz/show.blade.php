@extends('user.layouts.video') {{-- Thay bằng layout chính của bạn nếu cần --}}

@section('content')
<div class="quiz-page-container">
    <div class="container py-5">
        
        {{-- Phần hiển thị thông báo Đậu/Rớt sau khi nộp bài --}}
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
                <strong><i class="fas fa-check-circle me-2"></i>Tuyệt vời!</strong> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show shadow-sm" role="alert">
                <strong><i class="fas fa-times-circle me-2"></i>Rất tiếc!</strong> {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="row">
            {{-- Cột bên trái: Danh sách câu hỏi --}}
            <div class="col-lg-9">
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-header bg-white border-bottom-0 pt-4 pb-0">
                        <h2 class="text-primary fw-bold">{{ $quiz->title }}</h2>
                        <p class="text-muted mb-0">Chương {{ $quiz->chapter }} • Điểm qua môn: {{ $quiz->passing_score }}/100</p>
                    </div>
                    
                    <div class="card-body p-4">
                        <form id="quizForm" action="{{ route('user.quiz.submit', $quiz->id) }}" method="POST">
                            @csrf
                            
                            @foreach($quiz->questions as $index => $question)
                                <div class="question-block mb-5 p-3 rounded" style="background-color: #f8f9fa;">
                                    <h5 class="question-text fw-bold mb-3">
                                        <span class="badge bg-primary me-2">Câu {{ $index + 1 }}</span> 
                                        {{ $question->content }}
                                        <span class="text-muted fs-6 fw-normal float-end">({{ $question->points }} điểm)</span>
                                    </h5>
                                    
                                    <div class="answers-list ps-3">
                                        @foreach($question->answers as $answer)
                                            <div class="form-check mb-2">
                                                {{-- Name của input rất quan trọng: answers[id_cau_hoi] = id_dap_an --}}
                                                <input class="form-check-input answer-radio" 
                                                       type="radio" 
                                                       name="answers[{{ $question->id }}]" 
                                                       id="answer_{{ $answer->id }}" 
                                                       value="{{ $answer->id }}">
                                                <label class="form-check-label w-100" style="cursor: pointer;" for="answer_{{ $answer->id }}">
                                                    {{ $answer->content }}
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach

                            <div class="text-center mt-4">
                                <button type="button" class="btn btn-primary btn-lg px-5 py-2 fw-bold" onclick="confirmSubmit()">
                                    <i class="fas fa-paper-plane me-2"></i>Nộp bài ngay
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            {{-- Cột bên phải: Đồng hồ đếm ngược (Sticky) --}}
            <div class="col-lg-3">
                <div class="card shadow-sm border-0 sticky-top" style="top: 80px;">
                    <div class="card-body text-center p-4">
                        <h6 class="text-muted text-uppercase fw-bold mb-3">Thời gian còn lại</h6>
                        <div class="timer-display display-4 fw-bold text-danger mb-3" id="timer">
                            --:--
                        </div>
                        
                        <div class="progress mb-3" style="height: 10px;">
                            <div id="timerProgress" class="progress-bar bg-danger progress-bar-striped progress-bar-animated" role="progressbar" style="width: 100%;"></div>
                        </div>

                        <p class="small text-muted mb-0">Hệ thống sẽ tự động thu bài khi hết giờ.</p>
                        
                        <hr class="my-3">
                        <a href="{{ route('user.course-detail', $quiz->id_course) }}" class="btn btn-outline-secondary w-100">
                            <i class="fas fa-arrow-left me-2"></i>Thoát (Không lưu)
                        </a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

<style>
    .quiz-page-container {
        background-color: #f0f2f5;
        min-height: 100vh;
    }
    .question-block {
        border-left: 4px solid var(--bs-primary);
        transition: all 0.3s ease;
    }
    .question-block:hover {
        background-color: #e9ecef !important;
    }
    .answer-radio {
        transform: scale(1.2);
        margin-right: 10px;
    }
    .form-check-label {
        font-size: 16px;
        padding: 5px 10px;
        border-radius: 5px;
        transition: background 0.2s;
    }
    .form-check-input:checked + .form-check-label {
        background-color: #e7f1ff;
        color: #0d6efd;
        font-weight: 500;
    }
</style>

<script>
    // Lấy thời gian từ PHP truyền sang (tính bằng phút)
    let timeLimitMinutes = {{ $quiz->time_limit }};
    let timeInSeconds = timeLimitMinutes * 60;
    let totalSeconds = timeInSeconds;
    
    let timerElement = document.getElementById('timer');
    let progressBar = document.getElementById('timerProgress');
    let quizForm = document.getElementById('quizForm');

    // Hàm đếm ngược
    let countdown = setInterval(function() {
        if (timeInSeconds <= 0) {
            clearInterval(countdown);
            timerElement.innerText = "00:00";
            progressBar.style.width = "0%";
            
            // Hết giờ tự động nộp
            alert("Đã hết thời gian làm bài! Hệ thống đang tự động thu bài của bạn.");
            quizForm.submit();
            return;
        }

        // Tính phút và giây
        let minutes = Math.floor(timeInSeconds / 60);
        let seconds = timeInSeconds % 60;

        // Định dạng thêm số 0 đằng trước nếu nhỏ hơn 10 (VD: 09:05)
        let displayMinutes = minutes < 10 ? "0" + minutes : minutes;
        let displaySeconds = seconds < 10 ? "0" + seconds : seconds;

        timerElement.innerText = displayMinutes + ":" + displaySeconds;

        // Cập nhật thanh tiến trình
        let percentage = (timeInSeconds / totalSeconds) * 100;
        progressBar.style.width = percentage + "%";

        // Đổi màu cảnh báo khi còn dưới 1 phút
        if (timeInSeconds <= 60) {
            timerElement.classList.add('animate__animated', 'animate__flash', 'animate__infinite');
        }

        timeInSeconds--;
    }, 1000); // Chạy mỗi 1 giây (1000ms)

    // Xác nhận trước khi nộp thủ công
    function confirmSubmit() {
        if(confirm("Bạn có chắc chắn muốn nộp bài ngay bây giờ không? Bạn không thể thay đổi đáp án sau khi nộp.")) {
            // Dừng đồng hồ để tránh lỗi submit đúp
            clearInterval(countdown); 
            quizForm.submit();
        }
    }
</script>
@endsection