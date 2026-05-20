@extends('user.layouts.home')

@section('content')
    <div class="container">
        <h1 class="title">Lộ Trình Tự Học Ngôn Ngữ Lập Trình Java</h1>

        <div class="roadmap">
            <!-- Vertical line -->
            <div class="timeline-line"></div>

            <!-- Step 1 -->
            <div class="step-container">
                <input type="checkbox" id="step1" class="step-toggle">
                <label for="step1" class="step">
                    <div class="step-icon" style="--step-color: #9333ea;">
                        <i class="fas fa-book"></i>
                    </div>
                    <div class="step-content">
                        <h2>Bước 1: Nắm vững kiến thức cơ bản</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>1.1 Cú pháp Java</li>
                        <li>1.2 Kiểu dữ liệu</li>
                        <li>1.3 Biến và hằng số</li>
                        <li>1.4 Toán tử</li>
                    </ul>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="step-container">
                <input type="checkbox" id="step2" class="step-toggle">
                <label for="step2" class="step">
                    <div class="step-icon" style="--step-color: #6366f1;">
                        <i class="fas fa-layer-group"></i>
                    </div>
                    <div class="step-content">
                        <h2>Bước 2: Học OOP (Lập trình hướng đối tượng)</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>2.1 Khái niệm OOP</li>
                        <li>2.2 Lớp và đối tượng</li>
                        <li>2.3 Kế thừa</li>
                        <li>2.4 Đóng gói</li>
                        <li>2.5 Đa hình</li>
                    </ul>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="step-container">
                <input type="checkbox" id="step3" class="step-toggle">
                <label for="step3" class="step">
                    <div class="step-icon" style="--step-color: #2563eb;">
                        <i class="fas fa-code"></i>
                    </div>
                    <div class="step-content">
                        <h2>Bước 3: Nâng cao kỹ năng lập trình</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>3.1 Xử lý ngoại lệ</li>
                        <li>3.2 Thao tác với mảng</li>
                        <li>3.3 Collection Framework</li>
                        <li>3.4 Đọc/ghi file</li>
                    </ul>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="step-container">
                <input type="checkbox" id="step4" class="step-toggle">
                <label for="step4" class="step">
                    <div class="step-icon" style="--step-color: #0891b2;">
                        <i class="fas fa-tools"></i>
                    </div>
                    <div class="step-content">
                        <h2>Bước 4: Làm quen với các công cụ phát triển</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>4.1 IDE (Eclipse, IntelliJ)</li>
                        <li>4.2 Build tools (Maven, Gradle)</li>
                        <li>4.3 Hệ thống kiểm soát phiên bản (Git)</li>
                    </ul>
                </div>
            </div>

            <!-- Step 5 -->
            <div class="step-container">
                <input type="checkbox" id="step5" class="step-toggle">
                <label for="step5" class="step">
                    <div class="step-icon" style="--step-color: #0d9488;">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <div class="step-content">
                        <h2>Bước 5: Thực hành và dự án</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>5.1 Thực hành bài tập</li>
                        <li>5.2 Tham gia dự án mã nguồn mở</li>
                        <li>5.3 Xây dựng ứng dụng nhỏ</li>
                    </ul>
                </div>
            </div>

            <!-- Step 6 -->
            <div class="step-container">
                <input type="checkbox" id="step6" class="step-toggle">
                <label for="step6" class="step">
                    <div class="step-icon" style="--step-color: #8b5cf6;">
                        <i class="fas fa-brain"></i>
                    </div>
                    <div class="step-content">
                        <h2>Bước 6: Nâng cao và mở rộng kiến thức</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>6.1 Frameworks (Spring, Hibernate)</li>
                        <li>6.2 Công nghệ web (Servlet, JSP)</li>
                        <li>6.3 Kiến thức cơ sở dữ liệu (SQL, NoSQL)</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
