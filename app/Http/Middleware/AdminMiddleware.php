<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class AdminMiddleware
{

    public function handle(Request $request, Closure $next)
    {
        if(Auth::user()->role_id != 1){
            return redirect('dashboard');
        }
        return $next($request);
    }
}
