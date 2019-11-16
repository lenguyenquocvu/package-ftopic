<?php
namespace Fteam\Topic\Controllers;
use App;

use Fteam\Topic\Models\Project;
use Fteam\Topic\Models\Student;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request as IlluminateRequest;

class TopicController extends Controller{
    
    public function index(IlluminateRequest $request){
        $value = $request->all();
        $procode = $value['procode'];
        $student_code = $this->getStudentCode();
        $findlink = DB::table('student_projects')
            ->where('stu_code', $student_code[0]->stu_code)
            ->where('pro_code', $procode)->get();
        $link = $findlink[0]->sp_link;
        // var_dump($value); die();
        return view('topic::student.submit', array())->withValue($value)
                                                     ->withLink($link);
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
        return Student::where('stu_email', $email)->get();
    }
    
    public function upload(IlluminateRequest $request){
        $procode = $request->all()['subs'];
        $filename = $request->file('file')->getClientOriginalName();
        $project = Project::where('pro_code', $procode)->get();
        $pro_name = $project[0]->pro_name;
        $subject = $project[0]->sub_code;
        $class = $project[0]->cl_code;
        // var_dump($project); die();
        $student_code = $this->getStudentCode();

        $img_path_delete = public_path('storage/file/'.$student_code[0]->stu_code.'/'.$subject.'/'.$class.'/'.$pro_name);

        if(file_exists($img_path_delete)) {
            unlink($img_path_delete);
        }

        $link = 'storage/file/'.$student_code[0]->stu_code.'/'.$subject.'/'.$class.'/'.$pro_name.'/'.$filename;
        Storage::put($link, 'public');
        DB::table('student_projects')
            ->where('stu_code', $student_code[0]->stu_code)
            ->where('pro_code', $procode)
            ->update(['sp_link' => $link]);
        return redirect('/user');
    }
    
    public function getfile(IlluminateRequest $request){
        // var_dump($project); die();
        $link = $request->all()['download'];
        // var_dump($link); die();
        $url = storage_path('app/'.$link );
       
        ///$file = Storage::disk('public')->get($filename);
        $headers = array(
           
        );
        return response()->download($url,'te231st.jpg', $headers);
        
    }
}