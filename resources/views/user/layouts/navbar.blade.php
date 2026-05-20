<style>
    /* Base Styles */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 15px;
    }

    /* Header Styles */
    #site-header {
        background-color: #fff;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        position: relative;
        z-index: 1000;
    }

    .header-wrapper {
        display: flex;
        align-items: center;
        justify-content: space-between;
        height: 80px;
    }

    /* Logo */
    .site-logo {
        flex: 0 0 auto;
    }

    .site-logo img {
        max-height: 50px;
        width: auto;
    }

    /* Main Navigation */
    .main-nav {
        flex: 1;
        display: flex;
        justify-content: center;
    }

    .mobile-toggle {
        display: none;
        font-size: 24px;
        cursor: pointer;
    }

    .nav-list {
        display: flex;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .nav-item {
        position: relative;
        margin: 0 5px;
    }

    .nav-link {
        display: flex;
        align-items: center;
        padding: 10px 15px;
        color: #333;
        text-decoration: none;
        font-weight: 600;
        transition: color 0.3s;
    }

    .dropdown-icon {
        margin-left: 5px;
        font-size: 12px;
        transition: transform 0.3s;
    }

    .nav-item:hover .nav-link {
        color: #0070f3;
    }

    .nav-item:hover .dropdown-icon {
        transform: rotate(180deg);
    }

    /* Dropdown Menu */
    .dropdown-menu {
        position: absolute;
        top: 100%;
        left: 0;
        min-width: 220px;
        background: white;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        border-radius: 4px;
        z-index: 100;
        padding: 10px 0;
        margin: 0;
        list-style: none;
        display: none;
    }

    .nav-item:hover .dropdown-menu {
        display: block;
    }

    .dropdown-item {
        margin: 0;
    }

    .dropdown-link {
        display: block;
        padding: 8px 15px;
        color: #333;
        text-decoration: none;
        font-size: 14px;
        transition: background-color 0.3s, color 0.3s;
    }

    .dropdown-link:hover {
        background-color: #f5f5f5;
        color: #0070f3;
    }

    /* Mega Menu */
    .mega-menu {
        position: absolute;
        top: 100%;
        left: 0;
        width: 600px;
        background: white;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        border-radius: 4px;
        z-index: 100;
        display: none;
    }

    .nav-item:hover .mega-menu {
        display: block;
    }

    .mega-menu-container {
        display: flex;
        padding: 20px;
    }

    .mega-column {
        flex: 1;
        padding: 0 15px;
    }

    .mega-heading {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 10px;
        padding-bottom: 10px;
        border-bottom: 1px solid #eaeaea;
    }

    .mega-title {
        color: #333;
        font-weight: 700;
        text-decoration: none;
        font-size: 16px;
    }

    .mega-toggle {
        font-size: 12px;
        transition: transform 0.3s;
    }

    .mega-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .mega-list-item {
        margin-bottom: 8px;
    }

    .mega-link {
        display: block;
        padding: 5px 0;
        color: #555;
        text-decoration: none;
        font-size: 14px;
        transition: color 0.3s;
    }

    .mega-link:hover {
        color: #0070f3;
    }

    /* User Menu */
    .user-menu {
        position: relative;
        margin-left: 20px;
    }

    .user-btn {
        display: flex;
        align-items: center;
        background-color: #4267B2;
        color: white;
        border: none;
        border-radius: 50px;
        /* Pill shape */
        padding: 8px 16px;
        cursor: pointer;
        font-size: 14px;
        transition: background-color 0.3s;
    }

    .user-btn:hover {
        background-color: #365899;
    }

    .user-icon {
        margin-right: 8px;
    }

    .user-name {
        margin: 0 5px;
    }

    .user-dropdown-icon {
        font-size: 10px;
        transition: transform 0.3s;
    }

    .user-btn.active .user-dropdown-icon {
        transform: rotate(180deg);
    }

    .user-dropdown {
        position: absolute;
        top: calc(100% + 10px);
        right: 0;
        width: 220px;
        background: white;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        border-radius: 4px;
        z-index: 100;
        padding: 10px 0;
        margin: 0;
        list-style: none;
        display: none;
    }

    .user-dropdown.show {
        display: block;
    }

    .user-dropdown-item {
        margin: 0;
    }

    .user-dropdown-link {
        display: block;
        padding: 8px 15px;
        color: #333;
        text-decoration: none;
        font-size: 14px;
        transition: background-color 0.3s, color 0.3s;
    }

    .user-dropdown-link:hover {
        background-color: #f5f5f5;
        color: #0070f3;
    }

    .user-dropdown-divider {
        height: 1px;
        margin: 8px 0;
        background-color: #eaeaea;
    }

    .user-logout {
        color: #dc3545;
    }

    .user-logout:hover {
        background-color: #f8d7da;
        color: #dc3545;
    }

    /* Responsive */
    @media (max-width: 1024px) {
        .header-wrapper {
            height: auto;
            padding: 15px 0;
            flex-wrap: wrap;
        }

        .site-logo {
            flex: 1;
        }

        .mobile-toggle {
            display: block;
            order: 2;
            margin-left: 20px;
        }

        .main-nav {
            flex-basis: 100%;
            order: 3;
        }

        .nav-list {
            display: none;
            flex-direction: column;
            width: 100%;
            padding: 15px 0;
        }

        .nav-list.show {
            display: flex;
        }

        .nav-item {
            margin: 0;
        }

        .nav-link {
            padding: 12px 0;
            justify-content: space-between;
        }

        .dropdown-menu {
            position: static;
            width: 100%;
            box-shadow: none;
            padding: 0 0 0 15px;
            border-radius: 0;
        }

        .mega-menu {
            position: static;
            width: 100%;
            box-shadow: none;
            border-radius: 0;
        }

        .mega-menu-container {
            flex-direction: column;
            padding: 0 0 0 15px;
        }

        .mega-column {
            padding: 0;
            margin-bottom: 15px;
        }

        .user-menu {
            order: 1;
            margin-left: 0;
            margin-right: 20px;
        }
    }

    /* Auth Button Styles */
    .auth-menu {
        display: flex;
        justify-content: flex-end;
    }

    .auth-btn {
        display: flex;
        align-items: center;
        background-color: #4267B2;
        color: white;
        border: none;
        border-radius: 50px;
        /* Pill shape */
        padding: 8px 16px;
        cursor: pointer;
        font-size: 14px;
        text-decoration: none;
        transition: background-color 0.3s;
    }

    .auth-btn:hover {
        background-color: #365899;
        text-decoration: none;
        color: white;
    }

    .auth-icon {
        margin-right: 8px;
    }

    .auth-text {
        font-weight: 500;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .auth-menu {
            justify-content: center;
            margin-top: 10px;
        }
    }
</style>
<header id="site-header">
    <div class="container">
        <div class="header-wrapper">
            <!-- Logo -->
            <div class="site-logo">
                <a href="{{ route('user.index') }}">
                    <img src="{{ asset('assets/user/wp-content/uploads/2022/08/Screenshot-2023-01-29-230321.png') }}"
                        alt="HTAV2.VN Logo">
                </a>
            </div>

            <!-- Main Navigation -->
            <nav class="main-nav">
                <div class="mobile-toggle">
                    <i class="fas fa-bars"></i>
                </div>

                <ul class="nav-list">
                    <!-- DỊCH VỤ -->
                    {{-- <li class="nav-item has-dropdown">
                        <a href="#" class="nav-link">
                            DỊCH VỤ
                            <i class="fas fa-chevron-down dropdown-icon"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item">
                                <a href="index.html" class="dropdown-link">XÂY DỰNG WEBSITE</a>
                            </li>
                            <li class="dropdown-item">
                                <a href="cua-hang/index.html" class="dropdown-link">PHẦN MỀM</a>
                            </li>
                        </ul>
                    </li> --}}

                    {{-- TRANG CHỦ --}}
                    <li class="nav-item has-dropdown">
                        <a href="{{ route('user.index') }}" class="nav-link">
                            TRANG CHỦ
                        </a>
                    </li>

                    {{-- Giới thiệu --}}
                    <li class="nav-item has-dropdown">
                        <a href="{{ route('user.intro.show') }}" class="nav-link">
                            GIỚI THIỆU
                        </a>
                    </li>

                    <!-- LỘ TRÌNH TỰ HỌC -->
                    <li class="nav-item has-dropdown">
                        <a href="#" class="nav-link">
                            LỘ TRÌNH TỰ HỌC
                            <i class="fas fa-chevron-down dropdown-icon"></i>
                        </a>
                        <div class="mega-menu">
                            <div class="mega-menu-container">
                                <!-- BACK-END -->
                                <div class="mega-column">
                                    <div class="mega-heading">
                                        <a href="#" class="mega-title">BACK-END</a>
                                        <i class="fas fa-chevron-down mega-toggle"></i>
                                    </div>
                                    <ul class="mega-list">
                                        <li class="mega-list-item">
                                            <a href="{{ route('user.road.show', ['back-end', 'tansinhvien']) }}"
                                                class="mega-link">
                                                Lộ trình tự học cho tân sinh viên
                                            </a>
                                        </li>
                                        <li class="mega-list-item">
                                            <a href="{{ route('user.road.show', ['back-end', 'java']) }}"
                                                class="mega-link">
                                                Lập trình viên Java Back-end
                                            </a>
                                        </li>
                                        <li class="mega-list-item">
                                            <a href="{{ route('user.road.show', ['back-end', 'php']) }}"
                                                class="mega-link">
                                                Lập trình PHP
                                            </a>
                                        </li>
                                        <li class="mega-list-item">
                                            <a href="{{ route('user.road.show', ['back-end', 'cpp']) }}"
                                                class="mega-link">
                                                Lập trình C/C++
                                            </a>
                                        </li>
                                        <li class="mega-list-item">
                                            <a href="{{ route('user.road.show', ['back-end', 'python']) }}"
                                                class="mega-link">
                                                Lập trình Python
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <!-- FRONT-END -->
                                <div class="mega-column">
                                    <div class="mega-heading">
                                        <a href="#" class="mega-title">FRONT-END</a>
                                        <i class="fas fa-chevron-down mega-toggle"></i>
                                    </div>
                                    <ul class="mega-list">
                                        <li class="mega-list-item">
                                            <a href="{{ route('user.road.show', ['front-end', 'htmlcss']) }}"
                                                class="mega-link">
                                                Tự học HTML/CSS
                                            </a>
                                        </li>
                                        <li class="mega-list-item">
                                            <a href="{{ route('user.road.show', ['front-end', 'web']) }}"
                                                class="mega-link">
                                                Lập trình Web
                                            </a>
                                        </li>
                                        <li class="mega-list-item">
                                            <a href="{{ route('user.road.show', ['front-end', 'react']) }}"
                                                class="mega-link">
                                                Lập trình React
                                            </a>
                                        </li>
                                        <li class="mega-list-item">
                                            <a href="{{ route('user.road.show', ['front-end', 'angular']) }}"
                                                class="mega-link">
                                                Lập trình Angular
                                            </a>
                                        </li>
                                        <li class="mega-list-item">
                                            <a href="{{ route('user.road.show', ['front-end', 'vue']) }}"
                                                class="mega-link">
                                                Lập trình Vue
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- LIÊN HỆ -->
                    <li class="nav-item">
                        <a href="{{ route('user.contact.show') }}" class="nav-link">LIÊN HỆ</a>
                    </li>
                </ul>
            </nav>

            <!-- User Menu -->
            <div class="auth-menu">
                <a href="{{ route('user.login') }}" class="auth-btn">
                    <i class="fas fa-user auth-icon" aria-hidden="true"></i>
                    <span class="auth-text">Login/Sign Up</span>
                </a>
            </div>
        </div>
    </div>
</header>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Mobile menu toggle
        const mobileToggle = document.querySelector('.mobile-toggle');
        const navList = document.querySelector('.nav-list');

        if (mobileToggle && navList) {
            mobileToggle.addEventListener('click', function() {
                navList.classList.toggle('show');
            });
        }

        // User dropdown toggle
        const userBtn = document.getElementById('userMenuBtn');
        const userDropdown = document.getElementById('userDropdown');

        if (userBtn && userDropdown) {
            userBtn.addEventListener('click', function() {
                userBtn.classList.toggle('active');
                userDropdown.classList.toggle('show');
            });

            // Close dropdown when clicking outside
            document.addEventListener('click', function(e) {
                if (!userBtn.contains(e.target) && !userDropdown.contains(e.target)) {
                    userBtn.classList.remove('active');
                    userDropdown.classList.remove('show');
                }
            });
        }

        // Mobile submenu toggles
        const navItems = document.querySelectorAll('.nav-item.has-dropdown');

        navItems.forEach(item => {
            const link = item.querySelector('.nav-link');
            const dropdown = item.querySelector('.dropdown-menu, .mega-menu');

            if (link && dropdown) {
                link.addEventListener('click', function(e) {
                    if (window.innerWidth <= 1024) {
                        e.preventDefault();
                        dropdown.style.display = dropdown.style.display === 'block' ? 'none' :
                            'block';
                    }
                });
            }
        });

        // Mega menu column toggles on mobile
        const megaToggles = document.querySelectorAll('.mega-toggle');

        megaToggles.forEach(toggle => {
            const column = toggle.closest('.mega-column');
            const list = column.querySelector('.mega-list');

            toggle.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();

                if (window.innerWidth <= 1024) {
                    list.style.display = list.style.display === 'none' ? 'block' : 'none';
                    toggle.style.transform = list.style.display === 'none' ? 'rotate(0deg)' :
                        'rotate(180deg)';
                }
            });
        });

        // Reset styles on window resize
        window.addEventListener('resize', function() {
            if (window.innerWidth > 1024) {
                navList.classList.remove('show');

                const dropdowns = document.querySelectorAll('.dropdown-menu, .mega-menu, .mega-list');
                dropdowns.forEach(dropdown => {
                    dropdown.style.display = '';
                });

                megaToggles.forEach(toggle => {
                    toggle.style.transform = '';
                });
            }
        });
    });
</script>
