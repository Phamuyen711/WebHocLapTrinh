@extends('user.layouts.home')

@section('content')
    <div class="container">
        <h1 class="title">Lộ Trình Tự Học Lập Trình Web</h1>

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
                        <li>1.1 Cách thức hoạt động của Internet và Web</li>
                        <li>1.2 HTML cơ bản (cấu trúc, thẻ, semantic elements)</li>
                        <li>1.3 CSS cơ bản (selectors, box model, typography)</li>
                        <li>1.4 Responsive design (media queries, flexbox, grid)</li>
                        <li>1.5 JavaScript cơ bản (syntax, variables, data types)</li>
                        <li>1.6 Git và GitHub cơ bản</li>
                        <li>1.7 Command line basics</li>
                    </ul>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="step-container">
                <input type="checkbox" id="step2" class="step-toggle">
                <label for="step2" class="step">
                    <div class="step-icon" style="--step-color: #6366f1;">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <div class="step-content">
                        <h2>Bước 2: Frontend Development</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>2.1 HTML nâng cao (forms, multimedia, accessibility)</li>
                        <li>2.2 CSS nâng cao (animations, transitions, preprocessors)</li>
                        <li>2.3 CSS frameworks (Bootstrap, Tailwind CSS)</li>
                        <li>2.4 JavaScript DOM manipulation</li>
                        <li>2.5 JavaScript events và event handling</li>
                        <li>2.6 Fetch API và AJAX</li>
                        <li>2.7 ES6+ features (arrow functions, destructuring, modules)</li>
                        <li>2.8 Responsive và mobile-first design</li>
                    </ul>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="step-container">
                <input type="checkbox" id="step3" class="step-toggle">
                <label for="step3" class="step">
                    <div class="step-icon" style="--step-color: #2563eb;">
                        <i class="fab fa-js-square"></i>
                    </div>
                    <div class="step-content">
                        <h2>Bước 3: JavaScript nâng cao</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>3.1 Asynchronous JavaScript (Promises, async/await)</li>
                        <li>3.2 Error handling</li>
                        <li>3.3 Closures và scope</li>
                        <li>3.4 Object-oriented JavaScript</li>
                        <li>3.5 Functional programming concepts</li>
                        <li>3.6 Design patterns</li>
                        <li>3.7 TypeScript basics</li>
                        <li>3.8 Testing JavaScript (Jest, Mocha)</li>
                    </ul>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="step-container">
                <input type="checkbox" id="step4" class="step-toggle">
                <label for="step4" class="step">
                    <div class="step-icon" style="--step-color: #0891b2;">
                        <i class="fas fa-puzzle-piece"></i>
                    </div>
                    <div class="step-content">
                        <h2>Bước 4: Frontend Frameworks</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>4.1 React.js (components, props, state, hooks)</li>
                        <li>4.2 State management (Redux, Context API)</li>
                        <li>4.3 Routing (React Router)</li>
                        <li>4.4 Next.js (SSR, SSG, ISR)</li>
                        <li>4.5 Vue.js hoặc Angular (tùy chọn)</li>
                        <li>4.6 Build tools (Webpack, Vite)</li>
                        <li>4.7 Testing frontend applications</li>
                        <li>4.8 Performance optimization</li>
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
                        <h2>Bước 5: Backend Development</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>5.1 Node.js basics</li>
                        <li>5.2 Express.js framework</li>
                        <li>5.3 RESTful API design</li>
                        <li>5.4 Authentication và authorization (JWT, OAuth)</li>
                        <li>5.5 Middleware</li>
                        <li>5.6 Error handling và logging</li>
                        <li>5.7 API testing</li>
                        <li>5.8 GraphQL (tùy chọn)</li>
                        <li>5.9 Các ngôn ngữ backend khác (Python/Django, PHP/Laravel, Ruby/Rails) (tùy chọn)</li>
                    </ul>
                </div>
            </div>

            <!-- Step 6 -->
            <div class="step-container">
                <input type="checkbox" id="step6" class="step-toggle">
                <label for="step6" class="step">
                    <div class="step-icon" style="--step-color: #8b5cf6;">
                        <i class="fas fa-database"></i>
                    </div>
                    <div class="step-content">
                        <h2>Bước 6: Cơ sở dữ liệu</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>6.1 SQL cơ bản</li>
                        <li>6.2 Relational databases (MySQL, PostgreSQL)</li>
                        <li>6.3 NoSQL databases (MongoDB, Firebase)</li>
                        <li>6.4 ORM/ODM (Sequelize, Mongoose)</li>
                        <li>6.5 Database design và normalization</li>
                        <li>6.6 Caching (Redis)</li>
                        <li>6.7 Database migrations</li>
                        <li>6.8 Data modeling và schema design</li>
                    </ul>
                </div>
            </div>

            <!-- Step 7 -->
            <div class="step-container">
                <input type="checkbox" id="step7" class="step-toggle">
                <label for="step7" class="step">
                    <div class="step-icon" style="--step-color: #d946ef;">
                        <i class="fas fa-cloud-upload-alt"></i>
                    </div>
                    <div class="step-content">
                        <h2>Bước 7: DevOps và Deployment</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>7.1 Web hosting và domain setup</li>
                        <li>7.2 Deployment platforms (Vercel, Netlify, Heroku)</li>
                        <li>7.3 CI/CD pipelines</li>
                        <li>7.4 Containerization (Docker)</li>
                        <li>7.5 Cloud services (AWS, Google Cloud, Azure)</li>
                        <li>7.6 Serverless functions</li>
                        <li>7.7 Monitoring và logging</li>
                        <li>7.8 Security best practices</li>
                    </ul>
                </div>
            </div>

            <!-- Step 8 -->
            <div class="step-container">
                <input type="checkbox" id="step8" class="step-toggle">
                <label for="step8" class="step">
                    <div class="step-icon" style="--step-color: #ec4899;">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <div class="step-content">
                        <h2>Bước 8: Nâng cao và chuyên môn hóa</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>8.1 Progressive Web Apps (PWA)</li>
                        <li>8.2 Web accessibility (WCAG)</li>
                        <li>8.3 Internationalization và localization</li>
                        <li>8.4 Microservices architecture</li>
                        <li>8.5 WebSockets và real-time applications</li>
                        <li>8.6 Web3 và blockchain development</li>
                        <li>8.7 Mobile app development (React Native, Flutter)</li>
                        <li>8.8 Performance optimization và web vitals</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
