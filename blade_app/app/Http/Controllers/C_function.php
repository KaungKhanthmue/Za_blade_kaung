<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\company_;
use App\Http\Requests\Comemp;

class C_function extends Controller
{
    // index function 
    public function indexcom()
    {
        $post = company_::all();
        return view('project.r_data',['alldata'=>$post]);
    }

    // create function
    public function createcom(){
        return view("project.c_data");
    }
    public function okpar(Request $request) 
    {
        
        if ($request->hasFile('logo'))
        {
            foreach($request->file('logo')as $image)
            {
                $filename = time().'_'.$image->getClientOriginalName();
                $image->storeAs('upload',$filename);
            }
        }
        $post = new company_();
        $post->Name = request('name');
        $post->Email = request('email');
        $post->logo = request('logo');
        $post->logo = $filename;
        $post->Website = request('web');
        $post->save();
        return redirect('/comlist');
    }

    // store function 
    public function storecom($id)
    {
        $post = company_::find($id);
        return view("project.u_data",["post"=>$post]);
    }
    public function scom(Request $request,$id){
        if ($request->hasFile('ucomlogo'))
        {
            foreach($request->file('ucomlogo')as $image)
            {
                $filename = time().'_'.$image->getClientOriginalName();
                $image->storeAs('upload',$filename);
            }
        }
        $post = company_::find($id);
        $post->Name =  request()->ucomname;
        $post->Email =  request()->ucomemail;
        $post->logo =  request()->ucomlogo;
        $post->logo = $filename;
        $post->Website =  request()->ucomweb;
        $post->save();
        return redirect('/comlist');
    }

    // destory function
    public function destorycom($id)
    {
        $post = company_::find($id);
        $post->delete();
        return redirect('/comlist');
    }

    

}
