<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagescontroller extends Controller
{
    //................................visitors........................
    //index page method
    public function index(){
        return view('index');
    }//meth end


    //services page method
    public function services(){
        return view('services');
    }//meth end

     //view profile page method
     public function profile_view(){
        return view('profile_view');
    }//meth end
//................................visitors........................




//................................users........................

 //dashboard page method
 public function dash(){
    return view('users.dashboard');
}//meth end


 //profile page method
 public function profile(){
    return view('users.profile');
}//meth end



 //gallery page method
 public function gallery(){
    return view('users.gallery');
}//meth end

//................................users........................

}//class end
