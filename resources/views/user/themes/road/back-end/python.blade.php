@extends('user.layouts.home')

@section('content')
    <div class="container">
        <h1 class="title">Lộ Trình Tự Học Ngôn Ngữ Lập Trình Python</h1>

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
                        <li>1.1 Cài đặt Python và môi trường phát triển</li>
                        <li>1.2 Cú pháp cơ bản và kiểu dữ liệu</li>
                        <li>1.3 Biến và toán tử</li>
                        <li>1.4 Cấu trúc điều khiển (if, for, while)</li>
                        <li>1.5 Xử lý ngoại lệ (try, except)</li>
                    </ul>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="step-container">
                <input type="checkbox" id="step2" class="step-toggle">
                <label for="step2" class="step">
                    <div class="step-icon" style="--step-color: #6366f1;">
                        <i class="fas fa-cubes"></i>
                    </div>
                    <div class="step-content">
                        <h2>Bước 2: Cấu trúc dữ liệu và hàm</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>2.1 Lists, Tuples và Dictionaries</li>
                        <li>2.2 Sets và Collections</li>
                        <li>2.3 Hàm và tham số</li>
                        <li>2.4 Lambda và hàm ẩn danh</li>
                        <li>2.5 List comprehensions</li>
                        <li>2.6 Generators và Iterators</li>
                    </ul>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="step-container">
                <input type="checkbox" id="step3" class="step-toggle">
                <label for="step3" class="step">
                    <div class="step-icon" style="--step-color: #2563eb;">
                        <i class="fas fa-layer-group"></i>
                    </div>
                    <div class="step-content">
                        <h2>Bước 3: Lập trình hướng đối tượng trong Python</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>3.1 Lớp và đối tượng</li>
                        <li>3.2 Kế thừa và đa kế thừa</li>
                        <li>3.3 Phương thức đặc biệt (magic methods)</li>
                        <li>3.4 Thuộc tính và phương thức</li>
                        <li>3.5 Encapsulation và abstraction</li>
                        <li>3.6 Decorators và metaclasses</li>
                    </ul>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="step-container">
                <input type="checkbox" id="step4" class="step-toggle">
                <label for="step4" class="step">
                    <div class="step-icon" style="--step-color: #0891b2;">
                        <i class="fas fa-box-open"></i>
                    </div>
                    <div class="step-content">
                        <h2>Bước 4: Thư viện chuẩn và modules</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>4.1 Modules và packages</li>
                        <li>4.2 Làm việc với file và thư mục (os, pathlib)</li>
                        <li>4.3 Xử lý chuỗi và regular expressions</li>
                        <li>4.4 Datetime và time</li>
                        <li>4.5 JSON, CSV và XML</li>
                        <li>4.6 Multithreading và multiprocessing</li>
                    </ul>
                </div>
            </div>

            <!-- Step 5 -->
            <div class="step-container">
                <input type="checkbox" id="step5" class="step-toggle">
                <label for="step5" class="step">
                    <div class="step-icon" style="--step-color: #0d9488;">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <div class="step-content">
                        <h2>Bước 5: Phát triển ứng dụng</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>5.1 Web development (Django, Flask)</li>
                        <li>5.2 GUI applications (Tkinter, PyQt)</li>
                        <li>5.3 Testing và debugging</li>
                        <li>5.4 Làm việc với cơ sở dữ liệu (SQLite, PostgreSQL)</li>
                        <li>5.5 RESTful APIs và web services</li>
                        <li>5.6 Automation và scripting</li>
                    </ul>
                </div>
            </div>

            <!-- Step 6 -->
            <div class="step-container">
                <input type="checkbox" id="step6" class="step-toggle">
                <label for="step6" class="step">
                    <div class="step-icon" style="--step-color: #8b5cf6;">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="step-content">
                        <h2>Bước 6: Data Science và Machine Learning</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>6.1 NumPy và Pandas</li>
                        <li>6.2 Data visualization (Matplotlib, Seaborn)</li>
                        <li>6.3 Phân tích dữ liệu và thống kê</li>
                        <li>6.4 Machine Learning cơ bản (Scikit-learn)</li>
                        <li>6.5 Deep Learning (TensorFlow, PyTorch)</li>
                        <li>6.6 Natural Language Processing</li>
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
                        <h2>Bước 7: Nâng cao và chuyên môn hóa</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>7.1 Tối ưu hóa hiệu suất Python</li>
                        <li>7.2 Mở rộng Python với C/C++ (Cython)</li>
                        <li>7.3 Microservices và containerization (Docker)</li>
                        <li>7.4 Cloud computing (AWS, Google Cloud)</li>
                        <li>7.5 Big Data (Spark, Hadoop)</li>
                        <li>7.6 Blockchain và Cryptocurrency</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
