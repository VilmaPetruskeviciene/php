<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class Gate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $role)
    {
        $permissions = [
            1 => ['user', 'home'],
            10 => ['user', 'admin', 'home']
        ];

        if ('home' == $role && !Auth::user()) {
            return redirect('login');
        }

        if (!in_array($role, $permissions[Auth::user()->role])) {
            abort(401);
        }
        //dd(Auth::user()->role);
        //dd($role);

        return $next($request);
    }
}
