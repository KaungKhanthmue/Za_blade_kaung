<?php

namespace App\Http\Controllers;

use App\Models\employees_;
use Illuminate\Http\Request;
use App\Http\Requests\empfunction;

class C1_function extends Controller
{
    public function indexemp(){
        $posts = employees_::all();
        return view('project.r1_data',['alldata'=>$posts]);
    }

    public function createemp()
    {
        return view("project.c1_data");
    }
    public function okparone() 
    {

        $post = new employees_();
        $post->Full_name = request('fname');
        $post->Company_ID = request('cid');
        $post->Email = request('e1');
        $post->Phone = request('phone');
        $post->save();
        return redirect('/emplist');
    }

    public function storeemp($id){
        $post = employees_::find($id);
        return view("project.u1_data",["post"=>$post]);
    }
    public function semp(Request $request,$id){

        $post = employees_::find($id);
        $post->Full_name =  request()->uempname;
        $post->Company_ID =  request()->uempcid;
        $post->Email =  request()->uempemail;
        $post->Phone =  request()->uempphone;
        $post->save();
        return redirect('/emplist');
    }

    public function destoryemp($id){
        $post = employees_::find($id);
        $post->delete();
        return redirect('/emplist');
    }

}
