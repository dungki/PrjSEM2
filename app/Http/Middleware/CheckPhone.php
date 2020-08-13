<?php

namespace App\Http\Middleware;

use Closure;

class CheckPhone
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    // public function handle($request, Closure $next)
    // {
    //     if (strlen($request->phone) == 10) {
    //         return redirect('home');
    //     }
    //     return $next($request);
    // }
}
