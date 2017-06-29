<?php

namespace helloWorld\Http\Middleware;

use Closure;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $Role)
    {
        echo "Role: ".$Role;       
        return $next($request);
    }
}
