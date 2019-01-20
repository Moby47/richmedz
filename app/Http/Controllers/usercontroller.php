<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//storage library
use Illuminate\Support\Facades\Storage;
use Image;
use App\Modelpost;
use App\Modelad;
use App\Modelbanner;

class usercontroller extends Controller
{

    public function __construct()
    {
	 $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $post =Modelpost::all()->count();
         $ad =Modelad::all()->count();

        return view('users.dashboard')->with('post',$post)->with('ad',$ad);
    }

    public function post()
    {
        return view('users.create_post');
    }

    public function mpost()
    {
        $post =Modelpost::orderby('id','desc')->paginate(6);
        return view('users.manage_post')->with('post',$post);
    }

    public function ad()
    {
        return view('users.create_ad');
    }

    public function mad()
    {
        $ad =Modelad::orderby('id','desc')->paginate(6);
        return view('users.manage_ad')->with('ad',$ad);
    }

    public function banner()
    {
        return view('users.banner');
    }




  //form methods
  public function new_post(Request $request)
  {
      /*
    $this->validate($request, [
        'Title'=> 'required|string|max:130',
        'Category'=> 'required|max:35',
        'Amount'=> 'integer|nullable',
        'Picture'=>   'required|image|max:15999',
        'Description'=> 'required|string|max:1500',
    ]);

    try{

    $title= $request->input('Title');
    $cat= $request->input('Category');
    $amt= $request->input('Amount');
    $des= $request->input('Description');
    
     //handle file uploads   #1

       //.................compression algorithm...............//

       if($request->hasfile('Picture')){
       try{
               
        //get filename with extension
        $filenamewithextension = $request->file('Picture')->getClientOriginalName();

        //get filename without extension
        $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

        //get file extension
        $extension = $request->file('Picture')->getClientOriginalExtension();

        //filename to store
        $filenametostore = $filename.'_'.time().'.'.$extension;

        //#original
            //Upload File
           // $request->file('Picture')->storeAs('public/post_Pictures_original', $filenametostore);
            //#resized
            $request->file('Picture')->storeAs('public/posts', $filenametostore);
    
            // #resized
            //Resize image here
            $thumbnailpath = public_path('/storage/posts/'.$filenametostore);
            $img = Image::make($thumbnailpath)->resize(550, 340, function($constraint) {
            $constraint->aspectRatio();
        });
        $img->save($thumbnailpath);
    }
    catch(\Exception $e){
        return redirect('/post')->with('err','Fatal Error! Try Again');
    }
       // return redirect('images')->with('success', "Image uploaded successfully.");
      // return response()->Json('success!');
    }else{
        $filenametostore = 'noimage.jpg';
    }

    //.................compression algorithm...............//

$save = new Modelpost;

$save->title=$title;
$save->category=$cat;
$save->amount=$amt;
$save->image=$filenametostore;
$save->description=$des;

$save->save();
    }

    catch(\Exception $e){
        return redirect('/post')->with('err','Posting Failed! reduce post description and try again');
    }

return redirect('/post')->with('done','Post Created Successfully!');
*/

  }//method end









    /**
     *Delete post
     *
     * @return \Illuminate\Http\Response
     */
    public function delete1(Request $request)
    {
        /*
        $id= $request->input('id');

       $del = Modelpost::findorfail($id);

       $del->delete();

       if($del->image != 'noimage.jpg'){
        //delete image file
        Storage::delete('public/posts/'.$del->image);
    }

       return redirect('/manage-post')->with('done','Post Deleted Successfully!');
*/
    }

    


    public function new_ad(Request $request)
    {
      $this->validate($request, [
          'Title'=> 'required|string|max:50',
          'Category'=> 'required|max:35',
          'Picture'=>   'required|image|max:15999',
       
      ]);
  
    try{


      $title= $request->input('Title');
      $cat= $request->input('Category');
      
       //handle file uploads   #1
  
         //.................compression algorithm...............//
  
         if($request->hasfile('Picture')){
             try{
                 
          //get filename with extension
          $filenamewithextension = $request->file('Picture')->getClientOriginalName();
  
          //get filename without extension
          $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
  
          //get file extension
          $extension = $request->file('Picture')->getClientOriginalExtension();
  
          //filename to store
          $filenametostore = $filename.'_'.time().'.'.$extension;
  
          //#original
              //Upload File
             // $request->file('Picture')->storeAs('public/post_Pictures_original', $filenametostore);
              //#resized
              $request->file('Picture')->storeAs('public/posts', $filenametostore);
      
              // #resized
              //Resize image here
              $thumbnailpath = public_path('/storage/posts/'.$filenametostore);
              $img = Image::make($thumbnailpath)->resize(550, 340, function($constraint) {
              $constraint->aspectRatio();
          });
          $img->save($thumbnailpath);
      }
      catch(\Exception $e){
          return redirect('/ad')->with('err','Fatal Error! Try Again');
      }
         // return redirect('images')->with('success', "Image uploaded successfully.");
        // return response()->Json('success!');
      }else{
          $filenametostore = 'noimage.jpg';
      }
  
      //.................compression algorithm...............//
  
  $save = new Modelad;
  
  $save->title=$title;
 $save->category=$cat;
  $save->image=$filenametostore;
  
  
  $save->save();
    }

    catch(\Exception $e){
        return redirect('/ad')->with('err','Ad posting Failed! recheck/reduce text and try again');
    }
  return redirect('/ad')->with('done','Ad Created Successfully!');
  
  
    }//method end


    public function delete2(Request $request)
    {
        $id= $request->input('id');

       $del = Modelad::findorfail($id);

       $del->delete();

       if($del->image != 'noimage.jpg'){
        //delete image file
        Storage::delete('public/posts/'.$del->image);
    }

       return redirect('/manage-ad')->with('done','Post Deleted Successfully!');

    }



    public function new_banner(Request $request)
    {
      $this->validate($request, [
          
          'Banner'=>   'required|string|max:255',
       
      ]);
  

      $ban= $request->input('Banner');
  
  $save = new Modelbanner;
  
  $save->category='News';
  $save->story=$ban;
 
  $save->save();
  
  return redirect('/banner')->with('done','Banner Created Successfully!');
  
  
    }//method end

}//class end
