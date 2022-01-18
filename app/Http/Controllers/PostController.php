<?php


namespace App\Http\Controllers;
use App\Models\Post;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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


public function panel2(){

    $posts =Post::all();

    return view('panel_2',['posts'=>$posts->reverse()]);

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

     return  redirect()->route('post.panel2')->with('msg','اضاف شد');
 }






 public function delete(Post $post){

    $posts =Post::all();
   // dd($posts[2]->id->delete());
   //return $post;
   // $post->delete();
     return  redirect()->route('post.panel2')->with('msg',' حذف');

}


public function destroy($id)
    {

        //return $id;
        //dd($id);
         $advertise = Post::find($id);
         $advertise->delete();
         return  redirect()->route('post.panel2')->with('msg',' حذف');
    }




}
