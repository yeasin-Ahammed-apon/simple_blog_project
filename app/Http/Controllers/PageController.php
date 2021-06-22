<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PageController extends Controller
{
    public function index(){
        return view('pages.public.index');
    }
    public function list(){
        $db = Post::all();
        return view('pages.public.list',['datas'=>$db]);
    }
    public function about(){
        return view('pages.public.about');
    }
    
    
}
