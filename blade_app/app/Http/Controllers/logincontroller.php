<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\logindb_;

class logincontroller extends Controller
{
    public function one(){
        return view("project.logincompany");
    }

    public function iamone(){
        $post = logindb_::find($id=1);
        $uname = $_REQUEST['uname'];
		$pass = $_REQUEST['upass'];
        
     if(($post['admin_name'] == $uname) && ($post['password'] == $pass))
       {
        return redirect('/comlist');
       }
       else{
        return redirect('/comlogin');
       }

    }
    public function two(){
        return view("project.loginemployee");
    }

    public function iamtwo(){
        $post = logindb_::find($id=1);
        $uname = $_REQUEST['aname'];
		$pass = $_REQUEST['apass'];
        
     if(($post['admin_name'] == $uname) && ($post['password'] == $pass))
       {
        return redirect('/emplist');
       }
       else{
        return redirect('/emplogin');
       }

    }
   
}
