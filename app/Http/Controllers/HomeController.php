<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelpost;
use App\Modelad;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post =Modelpost::all()->count();
         $ad =Modelad::all()->count();

        return view('users.dashboard')->with('post',$post)->with('ad',$ad);
    }
}
