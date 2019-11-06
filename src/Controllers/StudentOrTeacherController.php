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
            // $mem = $this->findTeacherInfoAfterJoin($mem);
            return view('topic::student.teststudent', array())->withMem($mem);
        }  
        if(!!isset($authentication->getLoggedUser()->permissions["_teacher"])){
            $teacher = $authentication->getLoggedUser()->email;
            $mem = $this->findMember($teacher);
            return view('topic::student.teststudent', array())->withMem($mem);
        }  
    }

    public function findMember($email) {
        echo '<pre>';
        return Member::where('mem_email', $email)->get();
    }

    public function findTeacherInfoAfterJoin($code) {
        echo '<pre>';
        return Member::leftJoin('projects', $code, '=', 'projects.mem_code');
    }
    
    // public function findStudentProjectAfterJoin() {
    //     echo '<pre>';
    //     return Member::leftJoin('student_projects', );
    // }
    public function findSubjectTeacher() {
        
    }
}