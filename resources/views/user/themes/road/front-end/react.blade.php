@extends('user.layouts.home')

@section('content')
    <div class="container">
        <h1 class="title">Lộ Trình Tự Học Lập Trình React</h1>

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
                        <li>1.3 Arrow functions, destructuring, spread/rest operators</li>
                        <li>1.4 Array methods (map, filter, reduce)</li>
                        <li>1.5 Promises và async/await</li>
                        <li>1.6 Modules (import/export)</li>
                        <li>1.7 NPM và Node.js cơ bản</li>
                        <li>1.8 Git cơ bản</li>
                    </ul>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="step-container">
                <input type="checkbox" id="step2" class="step-toggle">
                <label for="step2" class="step">
                    <div class="step-icon" style="--step-color: #6366f1;">
                        <i class="fab fa-react"></i>
                    </div>
                    <div class="step-content">
                        <h2>Bước 2: React cơ bản</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>2.1 Cài đặt và cấu hình (Create React App, Vite)</li>
                        <li>2.2 JSX và cú pháp</li>
                        <li>2.3 Components (Class và Functional)</li>
                        <li>2.4 Props và prop drilling</li>
                        <li>2.5 State và lifecycle (Class components)</li>
                        <li>2.6 Handling events</li>
                        <li>2.7 Conditional rendering</li>
                        <li>2.8 Lists và keys</li>
                        <li>2.9 Forms và controlled components</li>
                    </ul>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="step-container">
                <input type="checkbox" id="step3" class="step-toggle">
                <label for="step3" class="step">
                    <div class="step-icon" style="--step-color: #2563eb;">
                        <i class="fas fa-code-branch"></i>
                    </div>
                    <div class="step-content">
                        <h2>Bước 3: React Hooks và State Management</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>3.1 useState hook</li>
                        <li>3.2 useEffect hook</li>
                        <li>3.3 useRef, useContext, useMemo, useCallback</li>
                        <li>3.4 Custom hooks</li>
                        <li>3.5 Context API</li>
                        <li>3.6 Redux cơ bản</li>
                        <li>3.7 Redux Toolkit</li>
                        <li>3.8 Zustand, Jotai, Recoil (state management alternatives)</li>
                        <li>3.9 React Query / SWR (server state management)</li>
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
                        <li>4.1 React Router DOM</li>
                        <li>4.2 Route parameters và query strings</li>
                        <li>4.3 Nested routes</li>
                        <li>4.4 Protected routes</li>
                        <li>4.5 Navigation guards</li>
                        <li>4.6 Code splitting và lazy loading</li>
                        <li>4.7 History API và programmatic navigation</li>
                    </ul>
                </div>
            </div>

            <!-- Step 5 -->
            <div class="step-container">
                <input type="checkbox" id="step5" class="step-toggle">
                <label for="step5" class="step">
                    <div class="step-icon" style="--step-color: #0d9488;">
                        <i class="fas fa-palette"></i>
                    </div>
                    <div class="step-content">
                        <h2>Bước 5: Styling trong React</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>5.1 CSS modules</li>
                        <li>5.2 Styled-components / Emotion</li>
                        <li>5.3 Tailwind CSS với React</li>
                        <li>5.4 UI libraries (Material UI, Chakra UI, Ant Design)</li>
                        <li>5.5 CSS-in-JS</li>
                        <li>5.6 Responsive design trong React</li>
                        <li>5.7 Animations và transitions</li>
                        <li>5.8 Theming và dark mode</li>
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
                        <h2>Bước 6: Tương tác với API và Data Fetching</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>6.1 Fetch API và Axios</li>
                        <li>6.2 Async data fetching với useEffect</li>
                        <li>6.3 React Query / SWR</li>
                        <li>6.4 GraphQL với Apollo Client</li>
                        <li>6.5 Error handling</li>
                        <li>6.6 Loading states và skeleton screens</li>
                        <li>6.7 Authentication và authorization</li>
                        <li>6.8 WebSockets và real-time data</li>
                    </ul>
                </div>
            </div>

            <!-- Step 7 -->
            <div class="step-container">
                <input type="checkbox" id="step7" class="step-toggle">
                <label for="step7" class="step">
                    <div class="step-icon" style="--step-color: #d946ef;">
                        <i class="fas fa-vial"></i>
                    </div>
                    <div class="step-content">
                        <h2>Bước 7: Testing và Debugging</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>7.1 Jest basics</li>
                        <li>7.2 React Testing Library</li>
                        <li>7.3 Component testing</li>
                        <li>7.4 Mocking API calls</li>
                        <li>7.5 Snapshot testing</li>
                        <li>7.6 End-to-end testing (Cypress, Playwright)</li>
                        <li>7.7 Debugging với React DevTools</li>
                        <li>7.8 Error boundaries</li>
                    </ul>
                </div>
            </div>

            <!-- Step 8 -->
            <div class="step-container">
                <input type="checkbox" id="step8" class="step-toggle">
                <label for="step8" class="step">
                    <div class="step-icon" style="--step-color: #ec4899;">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <div class="step-content">
                        <h2>Bước 8: Performance Optimization</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>8.1 React.memo</li>
                        <li>8.2 useMemo và useCallback</li>
                        <li>8.3 Code splitting và lazy loading</li>
                        <li>8.4 Virtualization (react-window, react-virtualized)</li>
                        <li>8.5 Web Vitals và performance metrics</li>
                        <li>8.6 Bundle size optimization</li>
                        <li>8.7 Profiling với React DevTools</li>
                        <li>8.8 Memoization patterns</li>
                    </ul>
                </div>
            </div>

            <!-- Step 9 -->
            <div class="step-container">
                <input type="checkbox" id="step9" class="step-toggle">
                <label for="step9" class="step">
                    <div class="step-icon" style="--step-color: #f43f5e;">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <div class="step-content">
                        <h2>Bước 9: Frameworks và Ecosystem</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>9.1 Next.js</li>
                        <li>9.2 Server-side rendering (SSR)</li>
                        <li>9.3 Static site generation (SSG)</li>
                        <li>9.4 Incremental static regeneration (ISR)</li>
                        <li>9.5 TypeScript với React</li>
                        <li>9.6 Progressive Web Apps (PWA)</li>
                        <li>9.7 Internationalization (i18n)</li>
                        <li>9.8 Accessibility (a11y)</li>
                        <li>9.9 SEO trong React applications</li>
                    </ul>
                </div>
            </div>

            <!-- Step 10 -->
            <div class="step-container">
                <input type="checkbox" id="step10" class="step-toggle">
                <label for="step10" class="step">
                    <div class="step-icon" style="--step-color: #ef4444;">
                        <i class="fas fa-cloud-upload-alt"></i>
                    </div>
                    <div class="step-content">
                        <h2>Bước 10: Deployment và Production</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>10.1 Build process</li>
                        <li>10.2 Environment variables</li>
                        <li>10.3 Deployment platforms (Vercel, Netlify, GitHub Pages)</li>
                        <li>10.4 CI/CD pipelines</li>
                        <li>10.5 Docker với React</li>
                        <li>10.6 Monitoring và error tracking</li>
                        <li>10.7 Analytics integration</li>
                        <li>10.8 Performance monitoring</li>
                        <li>10.9 Security best practices</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
