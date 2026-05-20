{{-- resources/views/partials/sidebar.blade.php --}}
@php
    $authUser = Auth::user();
@endphp

<div class="stm_lms_user_float_menu __collapsed __position_left {{ Auth::check() ? '__logged_in' : '' }}">
    <div class="stm_lms_user_float_menu__toggle">
        <i class="fas fa-bars" style="font-size:16px; color:#273044;"></i>
    </div>

    {{-- Avatar + info --}}
    <a href="{{ route('user.personal.show') }}" class="stm_lms_user_float_menu__user float_menu_item">
        <div class="stm_lms_user_float_menu__user_avatar">
            <img src="{{ $authUser && $authUser->avatar ? asset('storage/' . $authUser->avatar) : 'https://secure.gravatar.com/avatar/c91b9db5b89ee07e68ac57f3a5602ae8?s=215&d=mm&r=g' }}"
                class="avatar avatar-215 photo" style="width:60px;height:60px;border-radius:50%;object-fit:cover;" />
        </div>

        <div class="stm_lms_user_float_menu__user_info">
            <h3>{{ $authUser->fullname ?? 'GuestUser' }}</h3>
            <span>{{ $authUser->role ?? 'Student' }}</span>
        </div>

        <div class="stm_lms_user_float_menu__user_settings">
            <i class="fas fa-cog"></i>
        </div>
    </a>

    <div class="stm_lms_user_float_menu__scrolled">
        <a href="{{ route('user.enrolled-courses') }}" class="float_menu_item float_menu_item__inline __icon">
            <span class="float_menu_item__title heading_font">Enrolled Courses</span>
            <i class="fa fa-book float_menu_item__icon"></i>
        </a>
        <a href="{{ route('user.wishlist.index') }}" class="float_menu_item float_menu_item__inline __icon">
            <span class="float_menu_item__title heading_font">Wishlist</span>
            <i class="fa fa-star float_menu_item__icon"></i>
        </a>
        <div class="stm_lms_user_float_menu__scrolled_label">
            <i class="fa fa-chevron-down"></i>
        </div>
    </div>

    {{-- Logout chỉ hiển thị khi đã đăng nhập --}}
    @auth
        <a href="#" class="stm-lms-logout-button"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fas fa-power-off"></i>
            <span>Log out</span>
        </a>
        <form id="logout-form" action="{{ route('user.logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    @endauth
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const sidebar = document.querySelector('.stm_lms_user_float_menu');
        const mainContent = document.querySelector('.main-content');
        const toggleButton = document.querySelector('.stm_lms_user_float_menu__toggle');
        if (toggleButton) {
            toggleButton.addEventListener('click', function() {
                sidebar.classList.toggle('__collapsed');
                if (mainContent) mainContent.classList.toggle('sidebar-expanded');
            });
        }
    });
</script>
