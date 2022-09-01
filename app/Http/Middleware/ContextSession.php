<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ContextSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $host = $request->getHttpHost();

        if (! $request->session()->has('current_host')) {
            $request->session()->put('current_host', $host);

            return $next($request);
        }

        if ($request->session()->get('current_host') !== $host) {
            abort(401);
        }

        return $next($request);
    }
}
