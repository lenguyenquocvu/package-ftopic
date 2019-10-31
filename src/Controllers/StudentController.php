<?php

namespace Fteam\Topic\Controllers;

use App;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller {
    public function loadPage(Request $request){
        var_dump($request->all());
    }
}
