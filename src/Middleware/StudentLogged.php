<?php
namespace Fteam\Topic\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class StudentLogged {
    public function handle($request, Closure $next, $custom_url = null)
    {
        $redirect_url = $custom_url ?: '/login';
        if(!App::make('authenticator')->check()) return redirect($redirect_url);

        return $next($request);
    }
}