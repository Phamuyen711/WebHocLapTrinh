@extends('user.layouts.home')

@section('content')
    <div class="container">
        <h1 class="title">Lộ Trình Tự Học Ngôn Ngữ Lập Trình C++</h1>

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
                        <li>1.1 Cú pháp C++ cơ bản</li>
                        <li>1.2 Kiểu dữ liệu và biến</li>
                        <li>1.3 Toán tử và biểu thức</li>
                        <li>1.4 Cấu trúc điều khiển (if, switch, loops)</li>
                        <li>1.5 Hàm và tham số</li>
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
                        <h2>Bước 2: Học OOP trong C++</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>2.1 Lớp và đối tượng</li>
                        <li>2.2 Tính đóng gói và access modifiers</li>
                        <li>2.3 Kế thừa và đa kế thừa</li>
                        <li>2.4 Đa hình và hàm ảo</li>
                        <li>2.5 Templates và generic programming</li>
                    </ul>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="step-container">
                <input type="checkbox" id="step3" class="step-toggle">
                <label for="step3" class="step">
                    <div class="step-icon" style="--step-color: #2563eb;">
                        <i class="fas fa-sitemap"></i>
                    </div>
                    <div class="step-content">
                        <h2>Bước 3: Cấu trúc dữ liệu và giải thuật</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>3.1 Mảng, vector và chuỗi</li>
                        <li>3.2 Danh sách liên kết, stack và queue</li>
                        <li>3.3 Cây nhị phân và cây tìm kiếm</li>
                        <li>3.4 Bảng băm và map</li>
                        <li>3.5 Thuật toán sắp xếp và tìm kiếm</li>
                    </ul>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="step-container">
                <input type="checkbox" id="step4" class="step-toggle">
                <label for="step4" class="step">
                    <div class="step-icon" style="--step-color: #0891b2;">
                        <i class="fas fa-code"></i>
                    </div>
                    <div class="step-content">
                        <h2>Bước 4: Lập trình nâng cao</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>4.1 Con trỏ và tham chiếu</li>
                        <li>4.2 Quản lý bộ nhớ (new, delete)</li>
                        <li>4.3 STL (Standard Template Library)</li>
                        <li>4.4 Xử lý ngoại lệ</li>
                        <li>4.5 Lập trình đa luồng</li>
                        <li>4.6 Smart pointers và RAII</li>
                    </ul>
                </div>
            </div>

            <!-- Step 5 -->
            <div class="step-container">
                <input type="checkbox" id="step5" class="step-toggle">
                <label for="step5" class="step">
                    <div class="step-icon" style="--step-color: #0d9488;">
                        <i class="fas fa-tools"></i>
                    </div>
                    <div class="step-content">
                        <h2>Bước 5: Công cụ phát triển</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>5.1 IDE (Visual Studio, CLion, Code::Blocks)</li>
                        <li>5.2 Build systems (CMake, Make)</li>
                        <li>5.3 Debugging và profiling</li>
                        <li>5.4 Version control (Git)</li>
                        <li>5.5 Unit testing (Google Test, Catch2)</li>
                    </ul>
                </div>
            </div>

            <!-- Step 6 -->
            <div class="step-container">
                <input type="checkbox" id="step6" class="step-toggle">
                <label for="step6" class="step">
                    <div class="step-icon" style="--step-color: #8b5cf6;">
                        <i class="fas fa-project-diagram"></i>
                    </div>
                    <div class="step-content">
                        <h2>Bước 6: Thực hành và dự án</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>6.1 Game programming cơ bản</li>
                        <li>6.2 Phát triển ứng dụng desktop (Qt, wxWidgets)</li>
                        <li>6.3 Lập trình hệ thống và nhúng</li>
                        <li>6.4 Tham gia dự án mã nguồn mở</li>
                        <li>6.5 Xây dựng portfolio cá nhân</li>
                    </ul>
                </div>
            </div>

            <!-- Step 7 -->
            <div class="step-container">
                <input type="checkbox" id="step7" class="step-toggle">
                <label for="step7" class="step">
                    <div class="step-icon" style="--step-color: #d946ef;">
                        <i class="fas fa-brain"></i>
                    </div>
                    <div class="step-content">
                        <h2>Bước 7: Chuyên sâu và ứng dụng</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>7.1 C++ hiện đại (C++11/14/17/20)</li>
                        <li>7.2 Lập trình đồ họa (OpenGL, Vulkan)</li>
                        <li>7.3 Phát triển game engine</li>
                        <li>7.4 Lập trình AI và Machine Learning</li>
                        <li>7.5 Tối ưu hóa hiệu suất</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
