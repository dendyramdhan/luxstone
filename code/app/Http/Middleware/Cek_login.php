<?php

namespace App\Http\Middleware;

use Closure;

class Cek_login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!cek_session())
        {
            return redirect('admin');
        }
        return $next($request);
    }
}
