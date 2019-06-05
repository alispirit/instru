<?php

namespace App\Http\Middleware;

use Closure;
use App\User as usr;
use Illuminate\Http\Response;

class SuperAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
//        $user = new usr();
//        $user->user_type;
//        var_dump($user->user_type);

//        var_dump($request->user()->type);
//        die;
//        if ($request->user() && $request->user()->type != 'super_admin')
        if ( !$request->user() ||  $request->user()->type != 0) {
//            return new Response(view('unauthorized')->with('role', 'SUPER ADMIN'));
            return new Response(view('welcome')->with('role', 'SUPER ADMIN'));
        }
        return $next($request);
    }
}
