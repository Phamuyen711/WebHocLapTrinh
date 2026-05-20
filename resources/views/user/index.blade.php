@extends('user.layouts.home')

@section('content')
    <style>
        /* ===== REMOVE ALL LIST DOTS AND BULLETS ===== */

        /* Main container */
        .course-grid-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f8f9fa;
        }

        /* Header section */
        .course-grid-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .course-grid-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 25px;
            text-transform: uppercase;
        }

        /* ===== FILTER SECTION - NO DOTS ===== */
        .course-filter-wrapper {
            display: flex;
            justify-content: center;
            margin-bottom: 35px;
            overflow-x: auto;
            padding: 0 10px;
        }

        .course-filter-list {
            display: flex;
            flex-wrap: nowrap;
            gap: 8px;
            list-style: none !important;
            /* Force remove list style */
            list-style-type: none !important;
            /* Force remove bullets */
            justify-content: center;
            padding: 0 !important;
            /* Force remove padding */
            margin: 0 !important;
            /* Force remove margin */
            min-width: max-content;
        }

        /* Remove any possible list styling */
        .course-filter-list::before,
        .course-filter-list::after {
            display: none !important;
        }

        .course-filter-item {
            margin: 0 !important;
            /* Force remove margin */
            padding: 0 !important;
            /* Force remove padding */
            flex-shrink: 0;
            list-style: none !important;
            /* Force remove list style */
            list-style-type: none !important;
            /* Force remove bullets */
            position: relative;
        }

        /* Remove any pseudo-elements that might create dots */
        .course-filter-item::before,
        .course-filter-item::after {
            display: none !important;
            content: none !important;
        }

        .course-filter-btn {
            display: inline-block;
            padding: 8px 16px;
            background: white;
            border: 2px solid #e9ecef;
            border-radius: 20px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 500;
            color: #6c757d;
            text-decoration: none;
            font-size: 13px;
            white-space: nowrap;
            min-width: fit-content;
            position: relative;
        }

        /* Ensure no pseudo-elements on buttons */
        .course-filter-btn::before,
        .course-filter-btn::after {
            display: none !important;
            content: none !important;
        }

        .course-filter-btn:hover {
            border-color: #007bff;
            color: #007bff;
            transform: translateY(-1px);
            box-shadow: 0 2px 8px rgba(0, 123, 255, 0.15);
        }

        .course-filter-btn.active {
            background: #007bff;
            color: white;
            border-color: #007bff;
            box-shadow: 0 2px 8px rgba(0, 123, 255, 0.25);
        }

        /* Override any global list styles */
        ul.course-filter-list {
            list-style: none !important;
            list-style-type: none !important;
            list-style-image: none !important;
            list-style-position: outside !important;
        }

        ul.course-filter-list li {
            list-style: none !important;
            list-style-type: none !important;
            list-style-image: none !important;
            list-style-position: outside !important;
            margin: 0 !important;
            padding: 0 !important;
        }

        /* Section titles */
        .course-section-title {
            font-size: 1.8rem;
            font-weight: 600;
            color: #2c3e50;
            margin: 40px 0 30px 0;
            padding-left: 20px;
            border-left: 4px solid #007bff;
            position: relative;
        }

        .course-section-title::after {
            content: '';
            position: absolute;
            left: -4px;
            top: 0;
            width: 4px;
            height: 100%;
            background: linear-gradient(to bottom, #007bff, #0056b3);
        }

        /* ===== MAIN GRID LAYOUT ===== */
        .course-cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 28px;
            margin-bottom: 50px;
            padding: 16px;
        }

        /* ===== INDIVIDUAL COURSE CARD ===== */
        .course-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
            margin: 6px;
            position: relative;
            border: 1px solid rgba(0, 0, 0, 0.05);
        }

        .course-card-inner {
            position: relative;
            background: white;
            border-radius: 20px;
            overflow: hidden;
            transition: all 0.4s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        /* Image section */
        .course-image-container {
            display: block;
            position: relative;
            overflow: hidden;
            height: 220px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            text-decoration: none;
            flex-shrink: 0;
        }

        .course-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.4s ease;
        }

        /* Overlay effects */
        .course-image-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.85) 0%, rgba(118, 75, 162, 0.85) 100%);
            z-index: 1;
            transition: all 0.4s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .course-image-text {
            color: white;
            font-size: 18px;
            font-weight: 700;
            text-align: center;
            z-index: 2;
            white-space: pre-line;
            transition: all 0.4s ease;
            opacity: 1;
            padding: 20px;
        }

        /* Card content section */
        .course-card-content {
            padding: 28px;
            background: white;
            transition: all 0.4s ease;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .course-title-link {
            text-decoration: none;
            color: inherit;
        }

        .course-title {
            font-size: 18px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 18px;
            line-height: 1.4;
            min-height: 50px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            transition: all 0.4s ease;
        }

        /* Meta information */
        .course-meta-info {
            display: flex;
            gap: 18px;
            margin-bottom: 18px;
            opacity: 0;
            transform: translateY(15px);
            transition: all 0.4s ease;
        }

        .course-meta-item {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 13px;
            color: #6c757d;
            font-weight: 500;
        }

        .course-meta-icon {
            width: 16px;
            height: 16px;
            opacity: 0.7;
        }

        /* Divider */
        .course-divider {
            display: block;
            height: 1px;
            background: linear-gradient(to right, transparent, #e9ecef, transparent);
            margin: 18px 0;
        }

        /* Bottom section */
        .course-bottom-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: auto;
        }

        .course-rating-section {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .course-rating-stars {
            position: relative;
            display: inline-block;
            width: 90px;
            height: 18px;
            background: #f0f0f0;
            border-radius: 9px;
            overflow: hidden;
        }

        .course-rating-filled {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            background: linear-gradient(to right, #ffc107, #ff8f00);
            border-radius: 9px;
            width: 80%;
            transition: width 0.3s ease;
        }

        .course-rating-number {
            font-size: 13px;
            color: #6c757d;
            font-weight: 600;
        }

        .course-price-section {
            text-align: right;
        }

        .course-price {
            font-size: 20px;
            font-weight: 700;
            color: #e74c3c;
            margin: 0;
        }

        /* ===== HOVER EFFECTS ===== */
        .course-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
            border-color: rgba(0, 123, 255, 0.2);
        }

        .course-card:hover .course-image-overlay {
            opacity: 0;
        }

        .course-card:hover .course-image-text {
            opacity: 0;
        }

        .course-card:hover .course-image {
            opacity: 1;
            transform: scale(1.05);
        }

        .course-card:hover .course-meta-info {
            opacity: 1;
            transform: translateY(0);
            transition-delay: 0.15s;
        }

        .course-card:hover .course-card-content {
            padding: 32px;
        }

        .course-card:hover .course-image-container {
            height: 200px;
        }

        .course-card:hover .course-title {
            color: #007bff;
        }

        /* Loading and message states */
        .course-loading-state,
        .course-no-results,
        .course-error-state {
            grid-column: 1 / -1;
            text-align: center;
            padding: 80px 20px;
            background: white;
            border-radius: 20px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
            margin: 6px;
            border: 1px solid rgba(0, 0, 0, 0.05);
        }

        .course-loading-state {
            color: #007bff;
            font-weight: 600;
        }

        .course-no-results {
            color: #6c757d;
        }

        .course-error-state {
            color: #dc3545;
        }

        /* Loading animation */
        .course-loading-spinner {
            display: inline-block;
            width: 24px;
            height: 24px;
            border: 3px solid #007bff;
            border-radius: 50%;
            border-top-color: transparent;
            animation: course-spin 1s ease-in-out infinite;
            margin-left: 12px;
        }

        @keyframes course-spin {
            to {
                transform: rotate(360deg);
            }
        }

        /* Badge for suggested courses */
        .suggested-course-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: linear-gradient(135deg, #28a745, #20c997);
            color: white;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            z-index: 3;
            box-shadow: 0 2px 8px rgba(40, 167, 69, 0.3);
        }

        /* ===== RESPONSIVE DESIGN ===== */
        @media (max-width: 1200px) {
            .course-filter-btn {
                padding: 7px 14px;
                font-size: 12px;
            }

            .course-cards-grid {
                grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
                gap: 24px;
                padding: 14px;
            }
        }

        @media (max-width: 768px) {
            .course-grid-container {
                padding: 15px;
            }

            .course-filter-wrapper {
                margin-bottom: 30px;
                padding: 0 5px;
            }

            .course-filter-list {
                gap: 6px;
            }

            .course-filter-btn {
                padding: 6px 12px;
                font-size: 11px;
                border-radius: 15px;
            }

            .course-cards-grid {
                grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
                gap: 20px;
                padding: 12px;
            }

            .course-card {
                margin: 4px;
            }

            .course-grid-title {
                font-size: 2rem;
                margin-bottom: 20px;
            }

            .course-card:hover {
                transform: translateY(-6px);
            }

            .course-image-text {
                font-size: 16px;
            }

            .course-section-title {
                font-size: 1.5rem;
                padding-left: 15px;
            }
        }

        @media (max-width: 480px) {
            .course-filter-wrapper {
                justify-content: flex-start;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
                scrollbar-width: none;
                -ms-overflow-style: none;
            }

            .course-filter-wrapper::-webkit-scrollbar {
                display: none;
            }

            .course-filter-list {
                gap: 5px;
                padding: 0 10px;
            }

            .course-filter-btn {
                padding: 5px 10px;
                font-size: 10px;
                border-radius: 12px;
            }

            .course-cards-grid {
                grid-template-columns: 1fr;
                gap: 16px;
                padding: 8px;
            }

            .course-card {
                margin: 2px;
            }

            .course-grid-title {
                font-size: 1.8rem;
            }
        }

        /* ===== GLOBAL OVERRIDE FOR LIST STYLES ===== */
        /* This will override any global CSS that might be adding dots */
        * ul,
        * ol,
        * li {
            list-style: none !important;
            list-style-type: none !important;
            list-style-image: none !important;
        }

        /* Specific override for this component */
        .course-filter-wrapper ul,
        .course-filter-wrapper ol,
        .course-filter-wrapper li {
            list-style: none !important;
            list-style-type: none !important;
            list-style-image: none !important;
            list-style-position: outside !important;
            margin: 0 !important;
            padding: 0 !important;
        }

        /* ===== ACCESSIBILITY IMPROVEMENTS ===== */
        .course-filter-btn:focus {
            outline: 2px solid #007bff;
            outline-offset: 2px;
        }

        .course-image-container:focus {
            outline: 2px solid #007bff;
            outline-offset: 2px;
        }

        .course-title-link:focus {
            outline: 2px solid #007bff;
            outline-offset: 2px;
            border-radius: 4px;
        }

        /* Smooth transitions for non-hover states */
        .course-card:not(:hover) .course-meta-info {
            transition-delay: 0s;
        }

        /* Additional visual enhancements */
        .course-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(to right, #007bff, #0056b3);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .course-card:hover::before {
            opacity: 1;
        }
    </style>

    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Thành công!',
                text: '{{ session('success') }}',
                confirmButtonText: 'OK'
            });
        </script>
    @endif

    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'info',
                title: 'Thông báo',
                text: '{{ session('error') }}',
                confirmButtonText: 'OK'
            });
        </script>
    @endif

    <div id="wrapper" class="wrapper">
        <div class="container">
            <div class="pages-template">
                <section class="page-content">
                    <div class="entry-content">
                        <div class="course-grid-container">

                            <!-- Header Section -->
                            <div class="course-grid-header">
                                <h2 class="course-grid-title">Chọn lộ trình của bạn &amp; cùng học nhé!</h2>

                                <!-- Clean Category Filter - No Dots -->
                                <div id="course-categories-new" class="course-filter-wrapper">
                                    <ul class="course-filter-list">
                                        <li class="course-filter-item">
                                            <span data-id="all" class="course-filter-btn active">All</span>
                                        </li>
                                        <li class="course-filter-item">
                                            <span data-id="1" class="course-filter-btn">Mới học lập trình</span>
                                        </li>
                                        <li class="course-filter-item">
                                            <span data-id="2" class="course-filter-btn">Cơ sở dữ liệu</span>
                                        </li>
                                        <li class="course-filter-item">
                                            <span data-id="3" class="course-filter-btn">Lập trình Web</span>
                                        </li>
                                        <li class="course-filter-item">
                                            <span data-id="4" class="course-filter-btn">Java Backend</span>
                                        </li>
                                        <li class="course-filter-item">
                                            <span data-id="5" class="course-filter-btn">Java Fullstack</span>
                                        </li>
                                        <li class="course-filter-item">
                                            <span data-id="6" class="course-filter-btn">Data Science</span>
                                        </li>
                                        <li class="course-filter-item">
                                            <span data-id="7" class="course-filter-btn">Kiến thức nền tảng</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Suggested Courses Section -->
                            @if (isset($suggestedCourses) && $suggestedCourses->count() > 0)
                                <h3 class="course-section-title">Gợi ý cho bạn</h3>
                                <div class="course-cards-grid suggested-courses-grid">
                                    @foreach ($suggestedCourses->take(3) as $course)
                                        <div class="course-card">
                                            <div class="suggested-course-badge">Gợi ý</div>
                                            <div class="course-card-inner">
                                                <a href="{{ route('user.course-detail', ['id' => $course->id]) }}"
                                                    class="course-image-container">
                                                    <img src="{{ asset('storage/' . $course->thumbnail) }}"
                                                        class="course-image" alt="{{ $course->title }}">
                                                    <div class="course-image-overlay">
                                                        <div class="course-image-text">{{ $course->title }}
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="course-card-content">
                                                    <a href="{{ route('user.course-detail', ['id' => $course->id]) }}"
                                                        class="course-title-link">
                                                        <h3 class="course-title">{{ $course->title }}</h3>
                                                    </a>
                                                    <div class="course-meta-info">
                                                        <div class="course-meta-item">
                                                            <span class="course-meta-icon">👥</span>
                                                            <span>{{ $course->student_enrolled }}</span>
                                                        </div>
                                                        <div class="course-meta-item">
                                                            <span class="course-meta-icon">👁</span>
                                                            <span>15,634</span>
                                                        </div>
                                                    </div>
                                                    <div class="course-divider"></div>
                                                    <div class="course-bottom-section">
                                                        <div class="course-rating-section">
                                                            <div class="course-rating-stars">
                                                                <div class="course-rating-filled"
                                                                    style="width: {{ $course->rate * 20 }}%;"></div>
                                                            </div>
                                                            <span
                                                                class="course-rating-number">{{ number_format($course->rate, 1) }}</span>
                                                        </div>
                                                        <div class="course-price-section">
                                                            <div class="course-price" style="color: black;">
                                                                {{ $course->price > 0 ? number_format($course->price, 0, ',', '.') . ' đ' : 'Miễn phí' }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif

                            <!-- Main Courses Section -->
                            <h3 class="course-section-title">
                                {{ Auth::check() ? 'Khóa học khác' : 'Khóa học mới nhất' }}
                            </h3>
                            <div class="course-cards-grid main-courses-grid" id="main-courses-container">
                                @foreach ($randomCourses->take(9) as $course)
                                    <div class="course-card">
                                        <div class="suggested-course-badge">{{ $course->category->category_name }}</div>
                                        <div class="course-card-inner">
                                            <a href="{{ route('user.course-detail', ['id' => $course->id]) }}"
                                                class="course-image-container">
                                                <img src="{{ asset('storage/' . $course->thumbnail) }}"
                                                    class="course-image" alt="{{ $course->title }}">
                                                <div class="course-image-overlay">
                                                    <div class="course-image-text">{{ $course->title }}</div>
                                                </div>
                                            </a>
                                            <div class="course-card-content">
                                                <a href="{{ route('user.course-detail', ['id' => $course->id]) }}"
                                                    class="course-title-link">
                                                    <h3 class="course-title">{{ $course->title }}</h3>
                                                </a>
                                                <div class="course-meta-info">
                                                    <div class="course-meta-item">
                                                        <span class="course-meta-icon">👥</span>
                                                        <span>{{ $course->student_enrolled }}</span>
                                                    </div>
                                                    <div class="course-meta-item">
                                                        <span class="course-meta-icon">👁</span>
                                                        <span>15,634</span>
                                                    </div>
                                                </div>
                                                <div class="course-divider"></div>
                                                <div class="course-bottom-section">
                                                    <div class="course-rating-section">
                                                        <div class="course-rating-stars">
                                                            <div class="course-rating-filled"
                                                                style="width: {{ $course->rate * 20 }}%;"></div>
                                                        </div>
                                                        <span
                                                            class="course-rating-number">{{ number_format($course->rate, 1) }}</span>
                                                    </div>
                                                    <div class="course-price-section">
                                                        <div class="course-price" style="color: black;">
                                                            {{ $course->price > 0 ? number_format($course->price, 0, ',', '.') . ' đ' : 'Miễn phí' }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <script>
            document.getElementById('course-categories-new').addEventListener('click', function(e) {
                if (e.target && e.target.matches('.course-filter-btn')) {
                    // Update active button
                    const buttons = document.querySelectorAll('.course-filter-btn');
                    buttons.forEach(btn => btn.classList.remove('active'));
                    e.target.classList.add('active');

                    const categoryId = e.target.getAttribute('data-id');
                    const categoryName = e.target.textContent.trim(); // Lấy tên category từ button text
                    console.log('Đã chọn danh mục:', categoryId, 'Tên:', categoryName);

                    // Show loading state
                    const courseContainer = document.getElementById('main-courses-container');
                    if (courseContainer) {
                        courseContainer.innerHTML =
                            '<div class="course-loading-state"><p>Đang tải khóa học<span class="course-loading-spinner"></span></p></div>';
                    }

                    // Make AJAX request
                    fetch(`/filter/${categoryId}`, {
                            method: 'GET',
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest',
                                'Accept': 'application/json'
                            }
                        })
                        .then(response => {
                            console.log('Phản hồi server:', response.status, response.statusText);
                            return response.json();
                        })
                        .then(data => {
                            console.log('Dữ liệu nhận được từ server:', data);

                            if (!data.success && data.message) {
                                throw new Error(data.message);
                            }

                            const courses = data.courses || [];
                            console.log('Số lượng khóa học:', courses.length);

                            if (!courseContainer) {
                                console.error('Không tìm thấy container khóa học.');
                                return;
                            }

                            courseContainer.innerHTML = '';

                            if (courses.length > 0) {
                                courses.forEach((course, index) => {
                                    const priceDisplay = course.price > 0 ?
                                        `${Number(course.price).toLocaleString('vi-VN')} đ` :
                                        'Miễn phí';

                                    const ratingWidth = parseFloat(course.rate || 0) * 20;

                                    // Hiển thị category name, ẩn khi là "All"
                                    const categoryBadge = categoryName !== 'All' ?
                                        `<div class="suggested-course-badge">${categoryName}</div>` :
                                        `<div class="suggested-course-badge">${course.category.category_name}</div>`;

                                    courseContainer.innerHTML += `
                        <div class="course-card">
                            ${categoryBadge}
                            <div class="course-card-inner">
                                <a href="/user/course-detail/${course.id}" class="course-image-container">
                                    <img src="/storage/${course.thumbnail}"
                                         class="course-image"
                                         alt="${course.title}">
                                    <div class="course-image-overlay">
                                        <div class="course-image-text">${course.title}</div>
                                    </div>
                                </a>
                                <div class="course-card-content">
                                    <a href="/user/course-detail/${course.id}" class="course-title-link">
                                        <h3 class="course-title">${course.title}</h3>
                                    </a>
                                    <div class="course-meta-info">
                                        <div class="course-meta-item">
                                            <span class="course-meta-icon">👥</span>
                                            <span>${course.student_enrolled || 0}</span>
                                        </div>
                                        <div class="course-meta-item">
                                            <span class="course-meta-icon">👁</span>
                                            <span>15,634</span>
                                        </div>
                                    </div>
                                    <div class="course-divider"></div>
                                    <div class="course-bottom-section">
                                        <div class="course-rating-section">
                                            <div class="course-rating-stars">
                                                <div class="course-rating-filled" style="width: ${ratingWidth}%;"></div>
                                            </div>
                                            <span class="course-rating-number">${parseFloat(course.rate || 0).toFixed(1)}</span>
                                        </div>
                                        <div class="course-price-section">
                                            <div class="course-price" style="color: black;">${priceDisplay}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>`;
                                });
                            } else {
                                courseContainer.innerHTML =
                                    '<div class="course-no-results"><p>Không tìm thấy khóa học nào trong danh mục này.</p></div>';
                            }
                        })
                        .catch(error => {
                            console.error('Lỗi khi tải khóa học:', error);
                            if (courseContainer) {
                                courseContainer.innerHTML =
                                    `<div class="course-error-state"><p>Đã xảy ra lỗi khi tải khóa học: ${error.message}</p></div>`;
                            }
                        });
                }
            });

            console.log('Clean filter course grid loaded successfully.');
        </script>
    </div>

@endsection
@include('user.chatbot_box')
