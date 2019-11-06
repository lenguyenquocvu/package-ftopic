<?php
namespace Fteam\Topic\Controllers;
use App;
use App\Http\Controllers\Controller;
use App\Project as AppProject;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request as IlluminateRequest;
use Fteam\Topic\Models\Project;
use Fteam\Topic\Models\Member;

class ShowProjectsController extends Controller {
    public function index(){
        return view('topic::student.submit', array());
    }

    public function getStudentCode () {
        $authentication = App::make('authenticator');
        if(!!isset($authentication->getLoggedUser()->permissions["_student"])){
            $student = $authentication->getLoggedUser()->email;
            return $this->findMember($student);
        }
    }

    public function findMember($email) {
        echo '<pre>';
        return Member::where('mem_email', $email)->get();
    }

    public function showProjects() {
        $student_code = $this->getStudentCode();
        
        $projects = Project::where('mem_code',$student_code[0]->mem_code)->get();

        return view('topic::teacher.testteacher', array())->withProjects($projects);
    }
}