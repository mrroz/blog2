<?php


namespace App\Http\Controllers;
use App\Models\Post;


use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        // $jDate = Jalalian::fromCarbon(Carbon::now());
        // $date = \Morilog\Jalali\Jalalian::now();


        $posts =Post::all();
        return view('welcome',['posts'=>$posts->reverse()]);
     }




     public function panel(){

            $posts =Post::all();

            return view('panel',['posts'=>$posts->reverse()]);

}


public function create(Request $request){

    // dd($request->all()) ;

    $file = time().'.'.$request->file->getClientOriginalExtension();
    $request->file->move(base_path('storage/app/public'),$file);


  $new= Post::create([

         "title" => 'املاك ',
         "price" => $request->price,
         "address" => $request->address,
         "type" => $request->type,
         "measurement" => $request->measurement,
         "rooms" => $request->rooms,
         "year" => $request->year,
         "description" => $request->description,
         "file" =>'storage/'.$file,

     ]);

     return  redirect()->route('post.panel')->with('msg','اضاف شد');
 }



}