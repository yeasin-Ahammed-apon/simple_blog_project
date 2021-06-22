<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Post;
use App\Models\Categorie;

class PostController extends Controller
{
   
    public function home(){                        
        return view('pages.user.index');
    }
    public function list(){
        $db = Post::join('users','users.id','=','posts.users_id')
            ->join('categories','categories.id','=','posts.categories_id')
            ->select(
                "posts.*",
                "posts.title as title",
                "posts.created_at as time",
                "users.name as name",
                "categories.name as categories_name"
            )->get();
        return view('pages.user.list',['datas'=>$db]);
    }

    public function my_posts(){
        $db = Post::where('users_id',session()->get('id'))->get();
        return view('pages.user.users_post',['datas'=>$db]);
    }
    public function view($id){
        $db = Post::where('id',$id)->first();
        return view('pages.user.view',['datas'=>$db]);
    }
    
    public function add(){
        $db = Categorie::all();
        return view('pages.user.add',['datas'=>$db]);
    }
    public function add_action(Request $request){
        $validated = $request->validate([
            'categories_id' => 'required',
            'title' => 'required',
            'image' => 'required|mimes:jpg',
            'details' => 'required|min:6|max:200',
            'users_id' => 'required'
        ]);
            $title = $request->title;
            $categories_id = $request->categories_id;
            $details = $request->details;    
            $users_id = $request->users_id;  
            $image_file = $request->file('image');
            $image_file_ext = $request->file('image')->extension();
                        
        Post::insert([
            "title" => $title,
            "categories_id" => $categories_id,
            "details" => $details,
            "users_id" => $users_id,
            "image" => "$title.$image_file_ext",            
            "created_at" => now()
        ]);
        Storage::putFileAs('public/post',$image_file ,"$title.$image_file_ext");       

        return redirect('/add')->with('message','success'); 
    }   
    public function delete(Request $request,$id){
        $db =Post::where('id',$id)->delete();
        
            return redirect('/my_posts');                
        
    }
    public function logout(){
        session()->flush();
        return redirect('/')->with('message','logout');
        
    }
}
