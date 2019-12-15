<?php

namespace App\Http\Middleware;

use Closure;

class SwapDatabaseConnection
{
    /**
     * The name of the admin role
     */
    const ADMIN_ROLE = 'Admin';

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!is_null($request->user()) && $request->user()->hasRole(self::ADMIN_ROLE) ) {
            config(['database.default' => 'admin']);
        } else {
            config(['database.default' => 'standard']);
        }

        return $next($request);
    }
}
