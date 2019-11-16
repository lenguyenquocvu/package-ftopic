<?php

namespace Fteam\Topic\Controllers;
use App;
use App\Http\Controllers\Controller;
use Fteam\Topic\Models\ClassList;
use Fteam\Topic\Models\Project;
use Illuminate\Http\Request;
use Fteam\Topic\Models\Student;
use Fteam\Topic\Models\Teacher;
use Illuminate\Support\Facades\DB;

class StudentOrTeacherController extends Controller {
    public function loadPage(Request $request){
        $authentication = App::make('authenticator');
        // echo '<pre>';
        if(!!isset($authentication->getLoggedUser()->permissions["_student"])){
            $student = $authentication->getLoggedUser()->email;
            // return view('topic::student.teststudent', array())->withStudent($student);
            $mem = $this->findStudent($student);
            $code = $mem[0]->stu_code;
            $pro = $this->findProjectFollowStudent($code);

            // $mem = $this->findTeacherInfoAfterJoin($mem);
            return view('topic::student.teststudent', array())->withMem($mem)
                                                              ->withPro($pro);
        }  else if(!!isset($authentication->getLoggedUser()->permissions["_teacher"])){
            $teacher = $authentication->getLoggedUser()->email;
            $mem = $this->findTeacher($teacher);
            $code = $mem[0]->tea_code;
            $pro = $this->findProjectFollowTeacher($code);
            $classlist = $this->findClassListFollowTeacher($code);
            return view('topic::teacher.testteacher', array())->withMem($mem)
                                                              ->withPro($pro)
                                                              ->withClasslist($classlist);
        }  else {
            $error = "Please change url to ../admin or ../admin/login";
            return view('topic::teacher.testteacher', array())->withError($error);
        }
    }

    public function findStudent($email) {
        echo '<pre>';
        return Student::where('stu_email', $email)->get();
    }

    public function findTeacher($email) {
        echo '<pre>';
        return Teacher::where('tea_email', $email)->get();
    }

    public function findProjectFollowStudent($code) {
        echo '<pre>';
        return DB::table('students')->leftJoin('student_projects', 'students.stu_code', '=', 'student_projects.stu_code')
                                    ->leftJoin('projects', 'student_projects.pro_code', '=', 'projects.pro_code')
                                    ->join('class_lists', 'class_lists.cl_code' , '=', 'projects.cl_code')
                                    ->where('students.stu_code', $code)->orderBy('projects.pro_name')->get();
    }

    public function findProjectFollowTeacher($code) {
        echo '<pre>';
        return Project::where('tea_code', $code)->get();
    }

    public function findClassListFollowTeacher($code) {
        echo '<pre>';
        return ClassList::where('tea_code', $code)->orderBy('sub_name')->get();
    }

    
    // public function findStudentProjectAfterJoin() {
    //     echo '<pre>';
    //     return Member::leftJoin('student_projects', );
    // }
    public function findSubjectTeacher() {
        
    }
}