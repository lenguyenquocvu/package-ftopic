<?php

namespace Fteam\Topic\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class StudentLogged {
    public function handle($request, Closure $next, $custom_url = null)
    {
        $authentication = App::make('authenticator');
        $redirect_url = $custom_url ?: '/users';
        if(!!isset($authentication->getLoggedUser()->permissions["_student"])) {
            // return redirect($redirect_url);
            return redirect($redirect_url);
        } else {
            return $next($request);
        }
    }
}