<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        $user = Auth::User();


        if ($user->role == $role) {

            return $next($request);
        }
        // else
        // {
        //     if (!Auth::check() || Auth::user()->role !== $role) {
        //         abort(403, 'Unauthorized action.');
        //     }
        // }
        return back();




    }
}