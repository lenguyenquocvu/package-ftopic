<?php
namespace Fteam\Topic\Controllers;
use Fteam\Topic\Models\Teacher;

use Fteam\Topic\Models\ClassList;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use Fteam\Topic\Models\Project;
use Fteam\Topic\Models\StudentProject;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TeacherController extends Controller {

    public function index(Request $request) {
        return view('topic::teacher.addproject', array());
    }

    public function index2(Request $request) {
        $data_first = $request->all();
        return view('topic::teacher.addstudentintoproject', array());
    }
    public function addProject(Request $request) { 
            $data = $request->all();
            // var_dump($data); die();
            $authentication = App::make('authenticator');
            if(!!isset($authentication->getLoggedUser()->permissions["_teacher"])) {
                $teacher = $authentication->getLoggedUser()->email;
                $mem = $this->findTeacher($teacher);
                $code = $mem[0]->tea_code;
                $max = DB::table('projects')->max('pro_code');
                if($max == null) {
                    $id = 0;
                } else {
                    $id = $max;
                }
                Project::insert(
                    array(
                        'pro_code' => $id + 1,
                        'pro_name' => $data['titles'],
                        'cl_code' => $data['classes'],
                        'sub_code' => $data['subs'],
                        'tea_code' => $code,
                        'pro_description' => $data['descriptions'],
                        'pro_end' => $data['da']
                    )
                );
                $tables = DB::table('students')->join('students_classes', 'students.stu_code', '=', 'students_classes.stu_code')
                                               ->join('class_lists', 'students_classes.cl_class', '=', 'class_lists.cl_code')
                                               ->select('students.stu_code', 'class_lists.tea_code')
                                               ->where('class_lists.tea_code', $code)->get();
                // $count = $tables->count();
                // var_dump(json_decode($tables )); die();
                $max2 = DB::table('projects')->max('pro_code');
                for($i = 0; $i < $tables->count(); $i++) {
                    StudentProject::insert(
                        array(
                        'stu_code' => $tables[$i]->stu_code,
                        'pro_code' => $max2,
                        'sp_link' => '',
                        ),
                    );
                }
                $class = $data['classes'];
                return view('topic::teacher.addproject', array())->withClass($class); 
            }
    }
    public function getEmail() {
        $authentication = App::make('authenticator');
        if(!!isset($authentication->getLoggedUser()->permissions["_teacher"])){
            $teacher = $authentication->getLoggedUser()->email;
            $mem = $this->findTeacher($teacher);
            $code = $mem[0]->tea_code;
            $pro = $this->findProjectFollowTeacher($code);
            $classlist = $this->findClassListFollowTeacher($code);
            
        } 
    }
    public function addStudent() {
        
    }
    public function findTeacher($email) {
        echo '<pre>';
        return Teacher::where('tea_email', $email)->get();
    }
    public function findClassListFollowTeacher($code) {
        echo '<pre>';
        return ClassList::where('tea_code', $code)->orderBy('sub_name')->get();
    }
}