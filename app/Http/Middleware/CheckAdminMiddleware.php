<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
//        dd($next);
        if(!auth()->check()){
            return redirect()->route('admin.login');
        }
        return $next($request);
    }
}
