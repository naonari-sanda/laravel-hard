<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HelloMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $hello = 'Hello! this is midddelware!!';
        $bye = 'Good-bye, middleware...';
        $date = [
            'hello' => $hello,
            'bye' => $bye
        ];
        $request->merge($date);
        return $next($request);
    }
}
