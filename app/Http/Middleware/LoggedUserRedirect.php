<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class LoggedUserRedirect
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $role = Auth::user()->role;

        if ($role === 'teacher') {
            return redirect()->route('teacher.dashboard');
        } elseif ($role === 'student') {
            return redirect()->route('student.dashboard');
        }

        // return $next($request);
        return abort(403, 'not authorized');
    }
}
