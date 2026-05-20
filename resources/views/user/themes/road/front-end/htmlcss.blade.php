@extends('user.layouts.home')

@section('content')
    <div class="container">
        <h1 class="title">Lộ Trình Tự Học HTML/CSS</h1>

        <div class="roadmap">
            <!-- Vertical line -->
            <div class="timeline-line"></div>

            <!-- Step 1 -->
            <div class="step-container">
                <input type="checkbox" id="step1" class="step-toggle">
                <label for="step1" class="step">
                    <div class="step-icon" style="--step-color: #9333ea;">
                        <i class="fas fa-code"></i>
                    </div>
                    <div class="step-content">
                        <h2>Bước 1: Nắm vững HTML cơ bản</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>1.1 Cấu trúc cơ bản của trang HTML</li>
                        <li>1.2 Thẻ HTML và thuộc tính</li>
                        <li>1.3 Heading, paragraph và text formatting</li>
                        <li>1.4 Links và images</li>
                        <li>1.5 Lists và tables</li>
                        <li>1.6 Forms và input elements</li>
                        <li>1.7 Semantic HTML5 elements</li>
                    </ul>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="step-container">
                <input type="checkbox" id="step2" class="step-toggle">
                <label for="step2" class="step">
                    <div class="step-icon" style="--step-color: #6366f1;">
                        <i class="fas fa-palette"></i>
                    </div>
                    <div class="step-content">
                        <h2>Bước 2: CSS cơ bản</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>2.1 Cách thêm CSS vào HTML (inline, internal, external)</li>
                        <li>2.2 Selectors và specificity</li>
                        <li>2.3 Colors, backgrounds và borders</li>
                        <li>2.4 Box model (margin, padding, border)</li>
                        <li>2.5 Typography và text styling</li>
                        <li>2.6 Styling links và buttons</li>
                        <li>2.7 CSS units (px, em, rem, %, vw/vh)</li>
                    </ul>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="step-container">
                <input type="checkbox" id="step3" class="step-toggle">
                <label for="step3" class="step">
                    <div class="step-icon" style="--step-color: #2563eb;">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <div class="step-content">
                        <h2>Bước 3: Layout và Responsive Design</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>3.1 Display property (block, inline, inline-block)</li>
                        <li>3.2 Position (static, relative, absolute, fixed, sticky)</li>
                        <li>3.3 Float và clear</li>
                        <li>3.4 Flexbox</li>
                        <li>3.5 CSS Grid</li>
                        <li>3.6 Media queries</li>
                        <li>3.7 Mobile-first design</li>
                        <li>3.8 Responsive images và typography</li>
                    </ul>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="step-container">
                <input type="checkbox" id="step4" class="step-toggle">
                <label for="step4" class="step">
                    <div class="step-icon" style="--step-color: #0891b2;">
                        <i class="fas fa-magic"></i>
                    </div>
                    <div class="step-content">
                        <h2>Bước 4: CSS nâng cao</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>4.1 Pseudo-classes và pseudo-elements</li>
                        <li>4.2 Transitions và animations</li>
                        <li>4.3 Transforms (2D và 3D)</li>
                        <li>4.4 Gradients và shadows</li>
                        <li>4.5 CSS variables (custom properties)</li>
                        <li>4.6 CSS functions (calc, min, max, clamp)</li>
                        <li>4.7 Filter effects</li>
                        <li>4.8 Advanced selectors</li>
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
                        <h2>Bước 5: Công cụ và quy trình làm việc</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>5.1 Browser developer tools</li>
                        <li>5.2 CSS preprocessors (Sass, Less)</li>
                        <li>5.3 CSS methodologies (BEM, OOCSS, SMACSS)</li>
                        <li>5.4 CSS reset và normalize</li>
                        <li>5.5 Version control (Git) cho dự án web</li>
                        <li>5.6 Build tools (npm, Webpack, Vite)</li>
                        <li>5.7 Code linting và formatting</li>
                    </ul>
                </div>
            </div>

            <!-- Step 6 -->
            <div class="step-container">
                <input type="checkbox" id="step6" class="step-toggle">
                <label for="step6" class="step">
                    <div class="step-icon" style="--step-color: #8b5cf6;">
                        <i class="fas fa-th-large"></i>
                    </div>
                    <div class="step-content">
                        <h2>Bước 6: Frameworks và thư viện</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>6.1 CSS frameworks (Bootstrap, Tailwind CSS, Bulma)</li>
                        <li>6.2 CSS-in-JS (Styled Components, Emotion)</li>
                        <li>6.3 Animation libraries (Animate.css, GSAP)</li>
                        <li>6.4 Icon libraries (Font Awesome, Material Icons)</li>
                        <li>6.5 UI component libraries</li>
                        <li>6.6 CSS frameworks trong React/Vue/Angular</li>
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
                        <h2>Bước 7: Nâng cao và chuyên môn hóa</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>7.1 Web accessibility (WCAG)</li>
                        <li>7.2 Performance optimization</li>
                        <li>7.3 Cross-browser compatibility</li>
                        <li>7.4 SVG và icon systems</li>
                        <li>7.5 CSS architecture cho dự án lớn</li>
                        <li>7.6 CSS Houdini</li>
                        <li>7.7 Modern CSS features (container queries, cascade layers)</li>
                        <li>7.8 Design systems</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
