<?php
namespace Fteam\Topic\Controllers;
use App;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request as IlluminateRequest;
use Fteam\Topic\Models\Member;

class TopicController extends Controller{
    
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
    
    public function upload(IlluminateRequest $request){
        $student_code = $this->getStudentCode();

        $img_path_delete = public_path('storage/file/'.$student_code[0]->mem_code);

        if(File::exist($img_path_delete)) {
            unlink($img_path_delete);
        }

        $contents = $request->file('file');

        Storage::put('public/file/'.$student_code[0]->mem_code, $contents, 'public');   die();
        
        return redirect('student/submit');
    }
    
    public function getfile(IlluminateRequest $request){
        $student_code = $this->getStudentCode();
        $url = public_path('storage/file/'.$student_code[0]->mem_code.'/vYUviRWg6EIsjjCVAYGBQoopxF20hH0K8yghHqQN.docx' );
       
        ///$file = Storage::disk('public')->get($filename);
        $headers = array(
           
        );
        return response()->download($url,'te231st.jpg', $headers);
        
    }
}