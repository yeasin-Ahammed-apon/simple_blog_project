<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

class ProfileController extends Controller
{
    public function profile(){  
        $db = User::where('id',session()->get('id'))
                    ->where('name',session()->get('name'))                      
                    ->first();
        $db1 = Post::where('users_id',session()->get('id'))->get();
        return view('pages.user.profile.profile',[
            'datas'=>$db,
            "posts" =>$db1
        ]);
    }
    public function edit_profile($id){ 
        $db = User::where('id',session()->get('id'))
        ->where('name',session()->get('name'))                      
        ->first();
        return view('pages.user.profile.edit',['datas'=>$db]);
    }
    public function update_profile(Request $request){ 
         $id =  $request->id;
         $name =  $request->name;
         $email =  $request->email;
         
        User::where('id',$id)
                    ->update([
                        'name'=> $name,
                        'email'=> $email,
                    ]);
        session()->put('name',$name);
        return redirect('/profile');
    }
}

