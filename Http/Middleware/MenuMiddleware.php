<?php

namespace App\Http\Middleware;

use Closure;

class MenuMiddleware
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle($request, Closure $next, $role, $menu)
    {
        app('App\Classes\Menu\MenuFactory')->renderActive($menu);

        return $next($request);
    }

}
