<?php
namespace Fteam\Topic\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request as IlluminateRequest;

class TopicController extends Controller{
    
    public function index(){
        return view('topic::student.submit', array());
    }

    public function upload(IlluminateRequest $request){

        $contents = $request->file('file');
        Storage::put('public/file', $contents, 'public');   die();
        return redirect('student/submit');
    }
    
    public function getfile(IlluminateRequest $request){
        $url = public_path('storage/file/PRJUF8RDVb6H2WTIuliA10Olofbp3HvQNxQ7qarA.png' );
       
        ///$file = Storage::disk('public')->get($filename);
        $headers = array(
           
        );
        return response()->download($url,'te231st.jpg', $headers);
        
    }
}