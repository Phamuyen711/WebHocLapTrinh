@extends('user.layouts.home')

@section('content')
    <div class="container">
        <h1 class="title">Lộ Trình Tự Học Cho Tân Sinh Viên CNTT</h1>

        <div class="roadmap">
            <!-- Vertical line -->
            <div class="timeline-line"></div>

            <!-- Step 1 -->
            <div class="step-container">
                <input type="checkbox" id="step1" class="step-toggle">
                <label for="step1" class="step">
                    <div class="step-icon" style="--step-color: #9333ea;">
                        <i class="fas fa-laptop"></i>
                    </div>
                    <div class="step-content">
                        <h2>Bước 1: Làm quen với máy tính và công cụ cơ bản</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>1.1 Hiểu biết cơ bản về phần cứng và phần mềm</li>
                        <li>1.2 Hệ điều hành (Windows/macOS/Linux) và thao tác cơ bản</li>
                        <li>1.3 Sử dụng hiệu quả trình duyệt web và công cụ tìm kiếm</li>
                        <li>1.4 Làm quen với terminal/command line</li>
                        <li>1.5 Quản lý file và thư mục</li>
                        <li>1.6 Cài đặt và sử dụng phần mềm</li>
                        <li>1.7 Sử dụng công cụ văn phòng (Word, Excel, PowerPoint)</li>
                        <li>1.8 Tạo tài khoản GitHub và học Git cơ bản</li>
                    </ul>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="step-container">
                <input type="checkbox" id="step2" class="step-toggle">
                <label for="step2" class="step">
                    <div class="step-icon" style="--step-color: #6366f1;">
                        <i class="fas fa-code"></i>
                    </div>
                    <div class="step-content">
                        <h2>Bước 2: Nền tảng lập trình</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>2.1 Tư duy lập trình và giải quyết vấn đề</li>
                        <li>2.2 Thuật toán cơ bản và lưu đồ</li>
                        <li>2.3 Học ngôn ngữ lập trình đầu tiên (Python hoặc JavaScript)</li>
                        <li>2.4 Biến, kiểu dữ liệu và toán tử</li>
                        <li>2.5 Cấu trúc điều khiển (if, else, loops)</li>
                        <li>2.6 Hàm và tham số</li>
                        <li>2.7 Cấu trúc dữ liệu cơ bản (arrays, lists, dictionaries)</li>
                        <li>2.8 Xử lý lỗi và debugging</li>
                        <li>2.9 Lập trình hướng đối tượng cơ bản</li>
                    </ul>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="step-container">
                <input type="checkbox" id="step3" class="step-toggle">
                <label for="step3" class="step">
                    <div class="step-icon" style="--step-color: #2563eb;">
                        <i class="fas fa-globe"></i>
                    </div>
                    <div class="step-content">
                        <h2>Bước 3: Phát triển Web cơ bản</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>3.1 HTML cơ bản (cấu trúc, thẻ, form)</li>
                        <li>3.2 CSS cơ bản (selectors, box model, layout)</li>
                        <li>3.3 JavaScript cơ bản (DOM manipulation, events)</li>
                        <li>3.4 Responsive design</li>
                        <li>3.5 CSS frameworks (Bootstrap hoặc Tailwind)</li>
                        <li>3.6 Công cụ phát triển trong trình duyệt (DevTools)</li>
                        <li>3.7 Tạo trang web tĩnh đơn giản</li>
                        <li>3.8 Hosting trang web (GitHub Pages, Netlify)</li>
                    </ul>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="step-container">
                <input type="checkbox" id="step4" class="step-toggle">
                <label for="step4" class="step">
                    <div class="step-icon" style="--step-color: #0891b2;">
                        <i class="fas fa-database"></i>
                    </div>
                    <div class="step-content">
                        <h2>Bước 4: Cơ sở dữ liệu cơ bản</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>4.1 Khái niệm cơ bản về cơ sở dữ liệu</li>
                        <li>4.2 SQL cơ bản (SELECT, INSERT, UPDATE, DELETE)</li>
                        <li>4.3 Thiết kế cơ sở dữ liệu đơn giản</li>
                        <li>4.4 Cài đặt và sử dụng MySQL/PostgreSQL</li>
                        <li>4.5 Kết nối cơ sở dữ liệu với ứng dụng</li>
                        <li>4.6 NoSQL cơ bản (MongoDB)</li>
                        <li>4.7 CRUD operations</li>
                        <li>4.8 Bảo mật cơ sở dữ liệu cơ bản</li>
                    </ul>
                </div>
            </div>

            <!-- Step 5 -->
            <div class="step-container">
                <input type="checkbox" id="step5" class="step-toggle">
                <label for="step5" class="step">
                    <div class="step-icon" style="--step-color: #0d9488;">
                        <i class="fas fa-server"></i>
                    </div>
                    <div class="step-content">
                        <h2>Bước 5: Backend Development cơ bản</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>5.1 Khái niệm client-server</li>
                        <li>5.2 HTTP và RESTful API</li>
                        <li>5.3 Node.js và Express.js cơ bản</li>
                        <li>5.4 Hoặc PHP cơ bản</li>
                        <li>5.5 Routing và controllers</li>
                        <li>5.6 Middleware</li>
                        <li>5.7 Authentication cơ bản</li>
                        <li>5.8 API endpoints</li>
                        <li>5.9 Error handling</li>
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
                        <h2>Bước 6: Phát triển dự án đầu tiên</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>6.1 Chọn ý tưởng dự án phù hợp (blog, todo app, quản lý sinh viên)</li>
                        <li>6.2 Lập kế hoạch và thiết kế dự án</li>
                        <li>6.3 Thiết kế cơ sở dữ liệu cho dự án</li>
                        <li>6.4 Xây dựng backend API</li>
                        <li>6.5 Xây dựng frontend</li>
                        <li>6.6 Kết nối frontend và backend</li>
                        <li>6.7 Testing cơ bản</li>
                        <li>6.8 Debugging và sửa lỗi</li>
                    </ul>
                </div>
            </div>

            <!-- Step 7 -->
            <div class="step-container">
                <input type="checkbox" id="step7" class="step-toggle">
                <label for="step7" class="step">
                    <div class="step-icon" style="--step-color: #d946ef;">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <div class="step-content">
                        <h2>Bước 7: Hoàn thiện và triển khai dự án</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>7.1 Hoàn thiện tính năng dự án</li>
                        <li>7.2 Tối ưu hóa code</li>
                        <li>7.3 Responsive design cho mọi thiết bị</li>
                        <li>7.4 Triển khai dự án (Heroku, Vercel, Netlify)</li>
                        <li>7.5 Cấu hình domain (tùy chọn)</li>
                        <li>7.6 Viết documentation</li>
                        <li>7.7 Tạo portfolio cá nhân</li>
                        <li>7.8 Chia sẻ dự án trên GitHub</li>
                    </ul>
                </div>
            </div>

            <!-- Step 8 -->
            <div class="step-container">
                <input type="checkbox" id="step8" class="step-toggle">
                <label for="step8" class="step">
                    <div class="step-icon" style="--step-color: #ec4899;">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="step-content">
                        <h2>Bước 8: Phát triển kỹ năng mềm và nghề nghiệp</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>8.1 Kỹ năng làm việc nhóm</li>
                        <li>8.2 Kỹ năng giao tiếp</li>
                        <li>8.3 Kỹ năng thuyết trình</li>
                        <li>8.4 Kỹ năng quản lý thời gian</li>
                        <li>8.5 Tạo CV và LinkedIn profile</li>
                        <li>8.6 Tham gia cộng đồng IT (Discord, Reddit, Stack Overflow)</li>
                        <li>8.7 Tham gia hackathons và coding challenges</li>
                        <li>8.8 Lập kế hoạch học tập tiếp theo</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
