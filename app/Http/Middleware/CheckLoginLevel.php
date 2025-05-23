<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckLoginLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && Auth::user()->level === 'admin') {
            return $next($request);
        }

        // ถ้าไม่ใช่ admin ให้ redirect กลับพร้อม error
        return redirect()->route('LoginPage')->withErrors([
            'unauthorized' => 'คุณไม่มีสิทธิ์เข้าถึงหน้านี้',
        ]);
    }
}
