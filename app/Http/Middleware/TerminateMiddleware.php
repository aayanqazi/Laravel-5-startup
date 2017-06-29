<?php

namespace helloWorld\Http\Middleware;

use Closure;

class TerminateMiddleware
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
        echo "Executing statement of handle method";
        return $next($request);
    }
    public function terminate($request, $response){
        echo "<br>Executing statement of terminate method";
    }
}
