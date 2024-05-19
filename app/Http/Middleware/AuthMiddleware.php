<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\student;
use Illuminate\Support\Facades\Auth;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();
        $student = student::where('user_id' , Auth::id())->first();
        if($student != null && $user->roles == 'admin'  ) {
            return $next($request);
        } else {
            return redirect()->route('home')->with('msg' , 'Bạn không có quyền truy cập ');
        }

    }
}
