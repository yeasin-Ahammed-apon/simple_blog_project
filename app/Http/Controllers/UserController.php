<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use App\Models\User;


class UserController extends Controller
{   
    //loing page
    public function login(){
        return view('pages.public.login');
    }
    //login action
    public function login_action(Request $request){
        $validated = $request->validate([
            'name' => 'required|max:25|min:2',            
            'password' => 'required|min:6|max:12',            
        ]);
        $name = $request->name;
        $password = $request->password;
        $db = User::where("name",$name)->first();
        if($db == null){
            return redirect()->back()->with('message',"failed");
        }
        if($name == $db->name && Hash::check($password, $db->password) == true) {
            session()->put('id',$db->id);
            session()->put('name',$name);
            return redirect('/user_deshboard')->with('message',"login");
        }       
        return redirect()->back()->with('message',"failed");
    }
    //register page
    public function register(){
        return view('pages.public.register');
    }
    //register action
    public function register_action(Request $request){
        $validated = $request->validate([
            'name' => 'required|unique:users,name|max:25|min:2',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|max:12',
            'image' => 'required|mimes:jpg',
        ]);
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;    
        $image_file = $request->file('image');
        $image_file_ext = $request->file('image')->extension();
        
        User::insert([
            "name" => $name,
            "email" => $email,
            "image" => "$name.$image_file_ext",
            "password" => Hash::make($password),
            "created_at" => now()
        ]);
        Storage::putFileAs('public/photo',$image_file ,"$name.$image_file_ext");       

        return redirect('/login')->with('message','success');        
    }
}
