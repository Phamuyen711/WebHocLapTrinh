<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    // Trang đăng nhập
    public function showLoginForm()
    {
        return view('user.themes.login.login');
    }

    // Đăng nhập: cho phép nhập username hoặc email
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = User::where('username', $request->username)
            ->orWhere('email', $request->username)
            ->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->withErrors(['username' => 'Tên đăng nhập hoặc mật khẩu không chính xác']);
        }

        // Đăng nhập
        Auth::guard('web')->login($user);

        // Nếu chưa xác thực email -> đưa tới trang nhắc xác thực
        if (!$user->hasVerifiedEmail()) {
            return redirect()->route('verification.notice');
        }

        // Đã xác thực -> về trang dự định
        return redirect()->intended('/');
    }

    // Đăng ký
    public function register(Request $request)
    {
        $request->validate([
            'fullname'    => 'required|string|max:200',
            'displayname' => 'required|string|max:100',
            'username'    => 'required|string|max:100|unique:tbl_users,username',
            'email'       => 'required|string|email|max:100|unique:tbl_users,email',
            'password'    => 'required|string|min:8|max:50|confirmed',
        ]);

        $user = User::create([
            'fullname'       => $request->fullname,
            'displayname'    => $request->displayname,
            'username'       => $request->username,
            'email'          => $request->email,
            'password'       => Hash::make($request->password),
            'remember_token' => Str::random(60),
        ]);

        // Gửi mail xác thực
        if (!$user->hasVerifiedEmail()) {
            $user->sendEmailVerificationNotification();
        }

        if ($request->ajax()) {
            return response()->json([
                'success'  => true,
                'redirect' => route('user.login'),
            ]);
        }

        return redirect()->route('user.login')->with('success', 'Đăng ký thành công. Vui lòng kiểm tra email để xác thực.');
    }

    // Đăng xuất
    public function logout()
    {
        Auth::guard('web')->logout();
        session()->invalidate();
        session()->regenerateToken();
        return redirect('/login');
    }
}
