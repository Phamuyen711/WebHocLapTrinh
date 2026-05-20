@extends('user.layouts.home')

@section('content')
    <div class="container">
        <h1 class="title">Lộ Trình Tự Học Lập Trình PHP</h1>

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
                        <h2>Bước 1: Nền tảng cơ bản</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>1.1 HTML, CSS cơ bản</li>
                        <li>1.2 JavaScript cơ bản</li>
                        <li>1.3 Cách thức hoạt động của Web (HTTP, request/response)</li>
                        <li>1.4 Command line basics</li>
                        <li>1.5 Git cơ bản</li>
                        <li>1.6 Cài đặt môi trường phát triển (XAMPP, WAMP, MAMP)</li>
                        <li>1.7 Cấu trúc dữ liệu và thuật toán cơ bản</li>
                    </ul>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="step-container">
                <input type="checkbox" id="step2" class="step-toggle">
                <label for="step2" class="step">
                    <div class="step-icon" style="--step-color: #6366f1;">
                        <i class="fab fa-php"></i>
                    </div>
                    <div class="step-content">
                        <h2>Bước 2: PHP cơ bản</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>2.1 Cú pháp PHP cơ bản</li>
                        <li>2.2 Biến và kiểu dữ liệu</li>
                        <li>2.3 Toán tử và biểu thức</li>
                        <li>2.4 Cấu trúc điều khiển (if, switch, loops)</li>
                        <li>2.5 Hàm và tham số</li>
                        <li>2.6 Arrays và array functions</li>
                        <li>2.7 String manipulation</li>
                        <li>2.8 Form handling và validation</li>
                        <li>2.9 Sessions và cookies</li>
                        <li>2.10 File handling và uploads</li>
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
                        <h2>Bước 3: PHP nâng cao</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>3.1 Error handling và exceptions</li>
                        <li>3.2 Regular expressions</li>
                        <li>3.3 Date và time functions</li>
                        <li>3.4 JSON và XML processing</li>
                        <li>3.5 Callback functions</li>
                        <li>3.6 Anonymous functions và closures</li>
                        <li>3.7 Namespaces</li>
                        <li>3.8 Type hinting và return types</li>
                        <li>3.9 Generators và iterators</li>
                        <li>3.10 PHP 7/8 features</li>
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
                        <h2>Bước 4: Cơ sở dữ liệu và PHP</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>4.1 SQL cơ bản</li>
                        <li>4.2 MySQL/MariaDB với PHP</li>
                        <li>4.3 PDO (PHP Data Objects)</li>
                        <li>4.4 CRUD operations</li>
                        <li>4.5 Prepared statements</li>
                        <li>4.6 Transactions</li>
                        <li>4.7 Database design và normalization</li>
                        <li>4.8 NoSQL databases (MongoDB) với PHP</li>
                        <li>4.9 Query optimization</li>
                        <li>4.10 Migrations và seeding</li>
                    </ul>
                </div>
            </div>

            <!-- Step 5 -->
            <div class="step-container">
                <input type="checkbox" id="step5" class="step-toggle">
                <label for="step5" class="step">
                    <div class="step-icon" style="--step-color: #0d9488;">
                        <i class="fas fa-cubes"></i>
                    </div>
                    <div class="step-content">
                        <h2>Bước 5: Object-Oriented Programming trong PHP</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>5.1 Classes và objects</li>
                        <li>5.2 Properties và methods</li>
                        <li>5.3 Constructors và destructors</li>
                        <li>5.4 Inheritance</li>
                        <li>5.5 Encapsulation (public, private, protected)</li>
                        <li>5.6 Abstraction (abstract classes, interfaces)</li>
                        <li>5.7 Polymorphism</li>
                        <li>5.8 Static methods và properties</li>
                        <li>5.9 Traits</li>
                        <li>5.10 Magic methods</li>
                        <li>5.11 Design patterns trong PHP</li>
                    </ul>
                </div>
            </div>

            <!-- Step 6 -->
            <div class="step-container">
                <input type="checkbox" id="step6" class="step-toggle">
                <label for="step6" class="step">
                    <div class="step-icon" style="--step-color: #8b5cf6;">
                        <i class="fas fa-puzzle-piece"></i>
                    </div>
                    <div class="step-content">
                        <h2>Bước 6: PHP Frameworks</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>6.1 MVC architecture</li>
                        <li>6.2 Laravel basics</li>
                        <li>6.3 Routing và controllers</li>
                        <li>6.4 Blade templating</li>
                        <li>6.5 Eloquent ORM</li>
                        <li>6.6 Authentication và authorization</li>
                        <li>6.7 Middleware</li>
                        <li>6.8 Laravel ecosystem (Jetstream, Livewire, Inertia)</li>
                        <li>6.9 Các framework khác (Symfony, CodeIgniter, CakePHP)</li>
                        <li>6.10 Microframeworks (Slim, Lumen)</li>
                    </ul>
                </div>
            </div>

            <!-- Step 7 -->
            <div class="step-container">
                <input type="checkbox" id="step7" class="step-toggle">
                <label for="step7" class="step">
                    <div class="step-icon" style="--step-color: #d946ef;">
                        <i class="fas fa-server"></i>
                    </div>
                    <div class="step-content">
                        <h2>Bước 7: API Development với PHP</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>7.1 RESTful API concepts</li>
                        <li>7.2 API authentication (JWT, OAuth)</li>
                        <li>7.3 API versioning</li>
                        <li>7.4 Rate limiting</li>
                        <li>7.5 API documentation (Swagger/OpenAPI)</li>
                        <li>7.6 API testing</li>
                        <li>7.7 GraphQL với PHP</li>
                        <li>7.8 Webhooks</li>
                        <li>7.9 API security best practices</li>
                    </ul>
                </div>
            </div>

            <!-- Step 8 -->
            <div class="step-container">
                <input type="checkbox" id="step8" class="step-toggle">
                <label for="step8" class="step">
                    <div class="step-icon" style="--step-color: #ec4899;">
                        <i class="fas fa-vial"></i>
                    </div>
                    <div class="step-content">
                        <h2>Bước 8: Testing và Debugging</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>8.1 Debugging techniques</li>
                        <li>8.2 Xdebug</li>
                        <li>8.3 Logging</li>
                        <li>8.4 Unit testing với PHPUnit</li>
                        <li>8.5 Integration testing</li>
                        <li>8.6 Feature testing</li>
                        <li>8.7 Test-driven development (TDD)</li>
                        <li>8.8 Mocking</li>
                        <li>8.9 Code coverage</li>
                        <li>8.10 Continuous integration</li>
                    </ul>
                </div>
            </div>

            <!-- Step 9 -->
            <div class="step-container">
                <input type="checkbox" id="step9" class="step-toggle">
                <label for="step9" class="step">
                    <div class="step-icon" style="--step-color: #f43f5e;">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <div class="step-content">
                        <h2>Bước 9: Security và Best Practices</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>9.1 SQL injection prevention</li>
                        <li>9.2 Cross-site scripting (XSS) prevention</li>
                        <li>9.3 Cross-site request forgery (CSRF) protection</li>
                        <li>9.4 Password hashing và security</li>
                        <li>9.5 Input validation và sanitization</li>
                        <li>9.6 File upload security</li>
                        <li>9.7 Session security</li>
                        <li>9.8 HTTPS và SSL</li>
                        <li>9.9 Security headers</li>
                        <li>9.10 Code quality tools (PHP_CodeSniffer, PHPStan)</li>
                        <li>9.11 OWASP Top 10</li>
                    </ul>
                </div>
            </div>

            <!-- Step 10 -->
            <div class="step-container">
                <input type="checkbox" id="step10" class="step-toggle">
                <label for="step10" class="step">
                    <div class="step-icon" style="--step-color: #ef4444;">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <div class="step-content">
                        <h2>Bước 10: Deployment và DevOps</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>10.1 Web servers (Apache, Nginx)</li>
                        <li>10.2 Server configuration</li>
                        <li>10.3 Deployment strategies</li>
                        <li>10.4 Composer và dependency management</li>
                        <li>10.5 Environment configuration</li>
                        <li>10.6 Caching strategies</li>
                        <li>10.7 Docker với PHP</li>
                        <li>10.8 CI/CD pipelines</li>
                        <li>10.9 Monitoring và logging</li>
                        <li>10.10 Performance optimization</li>
                        <li>10.11 Scaling PHP applications</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
