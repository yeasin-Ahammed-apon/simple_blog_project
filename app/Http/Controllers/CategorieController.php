<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function categories(){
        return view('pages.admin.categories');
    }
}
