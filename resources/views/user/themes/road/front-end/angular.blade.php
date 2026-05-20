@extends('user.layouts.home')

@section('content')
    <div class="container">
        <h1 class="title">Lộ Trình Tự Học Lập Trình Angular</h1>

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
                        <li>1.2 JavaScript hiện đại (ES6+)</li>
                        <li>1.3 TypeScript cơ bản</li>
                        <li>1.4 Object-oriented programming (OOP)</li>
                        <li>1.5 Reactive programming và RxJS cơ bản</li>
                        <li>1.6 NPM và Node.js cơ bản</li>
                        <li>1.7 Git cơ bản</li>
                        <li>1.8 Design patterns</li>
                    </ul>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="step-container">
                <input type="checkbox" id="step2" class="step-toggle">
                <label for="step2" class="step">
                    <div class="step-icon" style="--step-color: #6366f1;">
                        <i class="fab fa-angular"></i>
                    </div>
                    <div class="step-content">
                        <h2>Bước 2: Angular cơ bản</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>2.1 Cài đặt Angular CLI</li>
                        <li>2.2 Tạo project đầu tiên</li>
                        <li>2.3 Cấu trúc project Angular</li>
                        <li>2.4 Modules</li>
                        <li>2.5 Components cơ bản</li>
                        <li>2.6 Data binding (interpolation, property, event, two-way)</li>
                        <li>2.7 Directives (ngIf, ngFor, ngSwitch)</li>
                        <li>2.8 Pipes</li>
                        <li>2.9 Lifecycle hooks</li>
                    </ul>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="step-container">
                <input type="checkbox" id="step3" class="step-toggle">
                <label for="step3" class="step">
                    <div class="step-icon" style="--step-color: #2563eb;">
                        <i class="fas fa-puzzle-piece"></i>
                    </div>
                    <div class="step-content">
                        <h2>Bước 3: Components và Templates</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>3.1 Component communication (Input/Output)</li>
                        <li>3.2 Content projection (ng-content)</li>
                        <li>3.3 ViewChild và ViewChildren</li>
                        <li>3.4 Template reference variables</li>
                        <li>3.5 Custom directives</li>
                        <li>3.6 Custom pipes</li>
                        <li>3.7 Dynamic components</li>
                        <li>3.8 Component styling (ViewEncapsulation)</li>
                        <li>3.9 Change detection</li>
                    </ul>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="step-container">
                <input type="checkbox" id="step4" class="step-toggle">
                <label for="step4" class="step">
                    <div class="step-icon" style="--step-color: #0891b2;">
                        <i class="fas fa-route"></i>
                    </div>
                    <div class="step-content">
                        <h2>Bước 4: Routing và Navigation</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>4.1 Configuring routes</li>
                        <li>4.2 Router outlet</li>
                        <li>4.3 RouterLink và RouterLinkActive</li>
                        <li>4.4 Route parameters</li>
                        <li>4.5 Child routes</li>
                        <li>4.6 Lazy loading modules</li>
                        <li>4.7 Route guards (CanActivate, CanDeactivate, Resolve)</li>
                        <li>4.8 Navigation programmatically</li>
                        <li>4.9 Route events và resolvers</li>
                    </ul>
                </div>
            </div>

            <!-- Step 5 -->
            <div class="step-container">
                <input type="checkbox" id="step5" class="step-toggle">
                <label for="step5" class="step">
                    <div class="step-icon" style="--step-color: #0d9488;">
                        <i class="fas fa-wpforms"></i>
                    </div>
                    <div class="step-content">
                        <h2>Bước 5: Forms và Validation</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>5.1 Template-driven forms</li>
                        <li>5.2 Reactive forms</li>
                        <li>5.3 FormGroup và FormControl</li>
                        <li>5.4 FormBuilder</li>
                        <li>5.5 Validation (built-in validators)</li>
                        <li>5.6 Custom validators</li>
                        <li>5.7 Async validators</li>
                        <li>5.8 Dynamic forms</li>
                        <li>5.9 Form arrays</li>
                    </ul>
                </div>
            </div>

            <!-- Step 6 -->
            <div class="step-container">
                <input type="checkbox" id="step6" class="step-toggle">
                <label for="step6" class="step">
                    <div class="step-icon" style="--step-color: #8b5cf6;">
                        <i class="fas fa-server"></i>
                    </div>
                    <div class="step-content">
                        <h2>Bước 6: HTTP và API Integration</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>6.1 HttpClient</li>
                        <li>6.2 Observables và Subscriptions</li>
                        <li>6.3 Error handling</li>
                        <li>6.4 Interceptors</li>
                        <li>6.5 JWT authentication</li>
                        <li>6.6 Caching strategies</li>
                        <li>6.7 Retry và backoff strategies</li>
                        <li>6.8 File uploads</li>
                        <li>6.9 Real-time với WebSockets</li>
                    </ul>
                </div>
            </div>

            <!-- Step 7 -->
            <div class="step-container">
                <input type="checkbox" id="step7" class="step-toggle">
                <label for="step7" class="step">
                    <div class="step-icon" style="--step-color: #d946ef;">
                        <i class="fas fa-database"></i>
                    </div>
                    <div class="step-content">
                        <h2>Bước 7: State Management</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>7.1 Services và dependency injection</li>
                        <li>7.2 Sharing data between components</li>
                        <li>7.3 RxJS subjects (BehaviorSubject, ReplaySubject)</li>
                        <li>7.4 NgRx store</li>
                        <li>7.5 NgRx effects</li>
                        <li>7.6 NgRx selectors</li>
                        <li>7.7 NgRx entity</li>
                        <li>7.8 NGXS (alternative)</li>
                        <li>7.9 Akita (alternative)</li>
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
                        <h2>Bước 8: Testing</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>8.1 Unit testing với Jasmine và Karma</li>
                        <li>8.2 TestBed</li>
                        <li>8.3 Testing components</li>
                        <li>8.4 Testing services</li>
                        <li>8.5 Testing pipes và directives</li>
                        <li>8.6 Mocking dependencies</li>
                        <li>8.7 E2E testing với Protractor/Cypress</li>
                        <li>8.8 Code coverage</li>
                        <li>8.9 Testing best practices</li>
                    </ul>
                </div>
            </div>

            <!-- Step 9 -->
            <div class="step-container">
                <input type="checkbox" id="step9" class="step-toggle">
                <label for="step9" class="step">
                    <div class="step-icon" style="--step-color: #f43f5e;">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <div class="step-content">
                        <h2>Bước 9: Performance Optimization</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>9.1 Change detection strategies (OnPush)</li>
                        <li>9.2 Pure pipes</li>
                        <li>9.3 TrackBy function</li>
                        <li>9.4 Lazy loading</li>
                        <li>9.5 Preloading strategies</li>
                        <li>9.6 AOT compilation</li>
                        <li>9.7 Bundle optimization</li>
                        <li>9.8 Server-side rendering (Angular Universal)</li>
                        <li>9.9 Web workers</li>
                        <li>9.10 Virtual scrolling</li>
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
                        <h2>Bước 10: Advanced Angular</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>10.1 Angular libraries</li>
                        <li>10.2 Custom schematics</li>
                        <li>10.3 Angular Elements (Web Components)</li>
                        <li>10.4 Internationalization (i18n)</li>
                        <li>10.5 Accessibility (a11y)</li>
                        <li>10.6 PWA với Angular</li>
                        <li>10.7 Angular Material</li>
                        <li>10.8 NgRx advanced patterns</li>
                        <li>10.9 Micro frontends</li>
                        <li>10.10 Upgrading strategies</li>
                    </ul>
                </div>
            </div>

            <!-- Step 11 -->
            <div class="step-container">
                <input type="checkbox" id="step11" class="step-toggle">
                <label for="step11" class="step">
                    <div class="step-icon" style="--step-color: #dc2626;">
                        <i class="fas fa-cloud-upload-alt"></i>
                    </div>
                    <div class="step-content">
                        <h2>Bước 11: Deployment và CI/CD</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>11.1 Build configurations (environments)</li>
                        <li>11.2 Deployment strategies</li>
                        <li>11.3 Docker với Angular</li>
                        <li>11.4 CI/CD pipelines</li>
                        <li>11.5 Monitoring và logging</li>
                        <li>11.6 Error tracking</li>
                        <li>11.7 Analytics integration</li>
                        <li>11.8 Security best practices</li>
                        <li>11.9 Performance monitoring</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
