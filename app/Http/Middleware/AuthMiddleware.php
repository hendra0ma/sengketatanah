<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next,string $role)
    {

    $role_name = auth()->user()->role;
    
    // if ($role == 'dashboard' && $role_name != 'utama' && $role_name != 'administrator') {
    //     abort(403);
    // }
    // if ($role == 'korban' && $role_name != 'korban' && $role_name != 'administrator') {
    //     abort(403);
    // }
    // abort(403);

    if ($role == 'utama' && $role_name != 'utama') {
        abort(403);
    }
    if ($role == 'korban' && $role_name != 'korban') {
        abort(403);
    }
   
    return $next($request);
    }
}
