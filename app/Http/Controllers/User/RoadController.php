<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class RoadController extends Controller
{
    /**
     * Hiển thị trang lộ trình dựa trên roadType và page
     */
    public function show($roadType, $page)
    {
        // Kiểm tra roadType và page hợp lệ
        $user = auth()->user();
        $allowedRoutes = [
            'back-end' => ['tansinhvien', 'java', 'php', 'cpp', 'python'],
            'front-end' => ['htmlcss', 'web', 'react', 'angular', 'vue']
        ];

        if (!isset($allowedRoutes[$roadType]) || !in_array($page, $allowedRoutes[$roadType])) {
            abort(404);
        }

        // Return view theo đường dẫn
        return view("user.themes.road.{$roadType}.{$page}")->with([
            'user' => $user,
        ]);
    }
}