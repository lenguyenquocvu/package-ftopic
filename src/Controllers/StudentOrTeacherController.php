<?php

namespace Fteam\Topic\Controllers;
use App;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Fteam\Topic\Models\Member;

class StudentOrTeacherController extends Controller {
    public function loadPage(Request $request){
        $authentication = App::make('authenticator');
        // echo '<pre>';
        if(!!isset($authentication->getLoggedUser()->permissions["_student"])){
            $student = $authentication->getLoggedUser()->email;
            // return view('topic::student.teststudent', array())->withStudent($student);
            $mem = $this->findMember($student);
            return view('topic::student.teststudent', array())->withMem($mem);
        }  
        if(!!isset($authentication->getLoggedUser()->permissions["teacher"])){
            $teacher = $authentication->getLoggedUser()->email;
            $mem = $this->findMember($teacher);
            return view('topic::teacher.testteacher', array())->withMem($mem);
        }  
    }

    public function findMember($email) {
        echo '<pre>';
        return Member::where('mem_email', $email)->get();
    }
}