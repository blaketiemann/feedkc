<?php

namespace App\Http\Middleware;

use Closure;

class Requester
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
        $permitted = auth()->check() && auth()->user()->account === 'requester';

        return $permitted ? $next($request) : redirect('/request');

    }
}
