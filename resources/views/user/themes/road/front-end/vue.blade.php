@extends('user.layouts.home')

@section('content')
    <div class="container">
        <h1 class="title">Lộ Trình Tự Học Lập Trình Vue.js</h1>

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
                        <i class="fab fa-vuejs"></i>
                    </div>
                    <div class="step-content">
                        <h2>Bước 2: Vue.js cơ bản</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>2.1 Vue.js là gì và tại sao sử dụng nó</li>
                        <li>2.2 Cài đặt và thiết lập (CDN, Vue CLI, Vite)</li>
                        <li>2.3 Cấu trúc project Vue</li>
                        <li>2.4 Vue instance và lifecycle hooks</li>
                        <li>2.5 Data binding và directives (v-bind, v-model, v-if, v-for)</li>
                        <li>2.6 Event handling (v-on)</li>
                        <li>2.7 Computed properties và watchers</li>
                        <li>2.8 Template syntax và expressions</li>
                        <li>2.9 Class và style binding</li>
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
                        <h2>Bước 3: Components và Communication</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>3.1 Component basics và registration</li>
                        <li>3.2 Single-File Components (SFC)</li>
                        <li>3.3 Props (passing data down)</li>
                        <li>3.4 Custom events (communication up)</li>
                        <li>3.5 Slots và named slots</li>
                        <li>3.6 Dynamic components</li>
                        <li>3.7 Async components</li>
                        <li>3.8 Component composition (mixins, composables)</li>
                        <li>3.9 Provide/inject</li>
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
                        <li>4.1 Vue Router setup</li>
                        <li>4.2 Route configuration</li>
                        <li>4.3 Router-link và router-view</li>
                        <li>4.4 Dynamic routes và params</li>
                        <li>4.5 Nested routes</li>
                        <li>4.6 Named routes và views</li>
                        <li>4.7 Navigation guards</li>
                        <li>4.8 Lazy loading routes</li>
                        <li>4.9 Route meta fields</li>
                    </ul>
                </div>
            </div>

            <!-- Step 5 -->
            <div class="step-container">
                <input type="checkbox" id="step5" class="step-toggle">
                <label for="step5" class="step">
                    <div class="step-icon" style="--step-color: #0d9488;">
                        <i class="fas fa-database"></i>
                    </div>
                    <div class="step-content">
                        <h2>Bước 5: State Management</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>5.1 Quản lý state trong Vue</li>
                        <li>5.2 Vuex basics</li>
                        <li>5.3 State và getters</li>
                        <li>5.4 Mutations và actions</li>
                        <li>5.5 Modules và namespacing</li>
                        <li>5.6 Pinia (Vue 3 state management)</li>
                        <li>5.7 Composition API và state management</li>
                        <li>5.8 Persistent state</li>
                        <li>5.9 State management patterns và best practices</li>
                    </ul>
                </div>
            </div>

            <!-- Step 6 -->
            <div class="step-container">
                <input type="checkbox" id="step6" class="step-toggle">
                <label for="step6" class="step">
                    <div class="step-icon" style="--step-color: #8b5cf6;">
                        <i class="fas fa-wpforms"></i>
                    </div>
                    <div class="step-content">
                        <h2>Bước 6: Forms và Validation</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>6.1 Form handling với v-model</li>
                        <li>6.2 Form input bindings</li>
                        <li>6.3 Form validation cơ bản</li>
                        <li>6.4 Vuelidate / VeeValidate</li>
                        <li>6.5 Custom form components</li>
                        <li>6.6 Form submission và handling</li>
                        <li>6.7 File uploads</li>
                        <li>6.8 Dynamic forms</li>
                        <li>6.9 Form best practices</li>
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
                        <h2>Bước 7: API Integration và Data Handling</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>7.1 HTTP requests với Axios</li>
                        <li>7.2 Fetch API</li>
                        <li>7.3 API calls trong Vuex/Pinia actions</li>
                        <li>7.4 Error handling</li>
                        <li>7.5 Loading states và skeleton screens</li>
                        <li>7.6 Authentication và authorization</li>
                        <li>7.7 Interceptors</li>
                        <li>7.8 GraphQL với Apollo Client</li>
                        <li>7.9 Real-time data với WebSockets</li>
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
                        <h2>Bước 8: Advanced Vue và Ecosystem</h2>
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                </label>
                <div class="step-details">
                    <ul>
                        <li>8.1 Composition API (Vue 3)</li>
                        <li>8.2 TypeScript với Vue</li>
                        <li>8.3 Testing (Unit, Component, E2E)</li>
                        <li>8.4 Performance optimization</li>
                        <li>8.5 Server-Side Rendering (Nuxt.js)</li>
                        <li>8.6 Static Site Generation</li>
                        <li>8.7 UI libraries (Vuetify, Quasar, PrimeVue)</li>
                        <li>8.8 Internationalization (i18n)</li>
                        <li>8.9 Accessibility (a11y)</li>
                        <li>8.10 Deployment và CI/CD</li>
                        <li>8.11 Progressive Web Apps (PWA)</li>
                        <li>8.12 Mobile app development (Capacitor, NativeScript)</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
