<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnforceVerified
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && ! Auth::user()->hasVerifiedEmail()) {
            // Danh sách route cho phép khi chưa verify
            $allowedNames = [
                'user.login', 'user.register',
                'verification.notice', 'verification.verify', 'verification.send',
            ];
            // Cho phép các URL xác thực và đăng xuất
            $allowedPaths = [
                'login', 'register', 'email/verify', 'email/verification-notification',
            ];

            $name = optional($request->route())->getName();
            $path = trim($request->path(), '/');

            $isAllowed =
                ($name && in_array($name, $allowedNames, true)) ||
                $path === '' ||                 // cho phép trang login nếu bạn đặt là /
                $path === 'login' ||
                str_starts_with($path, 'email/verify') ||
                $path === 'email/verification-notification' ||
                ($request->method() === 'POST' && $path === 'logout');

            if (! $isAllowed) {
                return redirect()->route('verification.notice');
            }
        }

        return $next($request);
    }
}
