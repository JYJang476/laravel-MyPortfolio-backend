<?php

namespace App\Http\Middleware;

use Closure;

class CrossDomain
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
        header("Access-Control-Allow-Headers: *");
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: GET, HEAD, POST, PUT, DELETE, OPTIONS");
        
        return $next($request);
    }
}
