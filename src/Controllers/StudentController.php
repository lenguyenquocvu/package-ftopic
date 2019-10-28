<?php

namespace Fteam\Topic\Controllers;
use App;
use LaravelAcl\Authentication\Helpers\FileRouteHelper ;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use LaravelAcl\Authentication\Helpers\SentryAuthenticationHelper;

class StudentController extends Controller {
    public function loadPage(Request $request){
        $authentication = App::make('authenticator');
        $authenticationHelper = App::make('authentication_helper');
        echo '<pre>';
        if(!!isset($authentication->getLoggedUser()->permissions["_student"])){
            var_dump($authentication->getLoggedUser()->email);
            echo 'Success!';
        }
       
    }
}
