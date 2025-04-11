<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAdminMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        // Kiểm tra xem người dùng đã đăng nhập và có role là admin chưa
        if (Auth::check() && Auth::user()->role === 'Admin') {
            return $next($request);
        }
        else {
            // Nếu không phải admin thì chuyển hướng hoặc báo lỗi
            return redirect()->route('/login')->with([
                'message' => 'Bạn không có quyền truy cập trang này.',
            ]);
        }

        // Nếu không phải admin thì chuyển hướng hoặc báo lỗi
        abort(403, 'Bạn không có quyền truy cập trang này.');
    }
}
