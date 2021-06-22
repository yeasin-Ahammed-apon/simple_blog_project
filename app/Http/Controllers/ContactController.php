<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{


    public function contact(){
        return view('pages.public.contact');
    }
    public function contact_action(Request $request){

        $name = $request->name;
        $email = $request->email;
        $message = $request->message;    

        $validated = $request->validate([
            'name' => 'required|max:25|min:2',
            'email' => 'required|email',
            'message' => 'required|min:2',
        ]);
        Contact::insert([
            "name" => $name,
            "email" => $email,
            "message" => $message,
            "created_at" => now()
        ]);       
        return redirect()->back()->with('message','success');
    }
}
