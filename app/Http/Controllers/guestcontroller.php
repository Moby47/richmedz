<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelad;
use App\Modelbanner;


class guestcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     //index page

    public function index()
    {
       // $slider =Modelpost::orderby('id','desc')->select('id','title','description')->take(5)->get();

        $banner =Modelbanner::orderby('id','desc')->select('category','story')->take(1)->get();

      //  $post =Modelpost::orderby('id','desc')->select('id','title','amount','category','image','description','created_at')->paginate(2);

        $ad =Modelad::orderby('id','desc')->select('title','image','created_at','category')->take(9)->get();

        return view('index')->with('banner',$banner)->with('ad',$ad);
    }

    public function about()
    {
        return view('about');
    }

    public function terms()
    {
        return view('terms');
    }

    public function fertility()
    {
        $banner =Modelbanner::orderby('id','desc')->select('category','story')->take(1)->get();
        $ad =Modelad::orderby('id','desc')->select('title','image','created_at','category')->take(9)->get();

        return view('fertility')->with('banner',$banner)->with('ad',$ad);
    }
    
    public function solution()
    {
        $banner =Modelbanner::orderby('id','desc')->select('category','story')->take(1)->get();
        $ad =Modelad::orderby('id','desc')->select('title','image','created_at','category')->take(9)->get();
        return view('solution')->with('banner',$banner)->with('ad',$ad);
    }


    public function hyper()
    {
        $banner =Modelbanner::orderby('id','desc')->select('category','story')->take(1)->get();
        $ad =Modelad::orderby('id','desc')->select('title','image','created_at','category')->take(9)->get();
        return view('hyper')->with('banner',$banner)->with('ad',$ad);
    }

    public function dia()
    {
        $banner =Modelbanner::orderby('id','desc')->select('category','story')->take(1)->get();
        $ad =Modelad::orderby('id','desc')->select('title','image','created_at','category')->take(9)->get();
        return view('diabetes')->with('banner',$banner);
    }

    public function vision()
    {
        $banner =Modelbanner::orderby('id','desc')->select('category','story')->take(1)->get();
        $ad =Modelad::orderby('id','desc')->select('title','image','created_at','category')->take(9)->get();
        return view('vision')->with('banner',$banner)->with('ad',$ad);
    }

    public function jc()
    {
        $banner =Modelbanner::orderby('id','desc')->select('category','story')->take(1)->get();
        $ad =Modelad::orderby('id','desc')->select('title','image','created_at','category')->take(9)->get();
        return view('jc')->with('banner',$banner)->with('ad',$ad);
    }
    public function loss()
    {
        $banner =Modelbanner::orderby('id','desc')->select('category','story')->take(1)->get();
        $ad =Modelad::orderby('id','desc')->select('title','image','created_at','category')->take(9)->get();
        return view('weight')->with('banner',$banner)->with('ad',$ad);
    }
}
