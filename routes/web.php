<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategorieController;



//public Routes 
    //home page
        Route::get('/',[PageController::class,'index']);
    //list page with post data (without action) 
        Route::get('/list',[PageController::class,'list']);
    //about page        
        Route::get('/about',[PageController::class,'about']);
    //contact
        //contact page        
        Route::get('/contact',[ContactController::class,'contact']);
        //contact action
        Route::post('/contact_action',[ContactController::class,'contact_action']);
    //login page
        //login page        
        Route::get('/login',[UserController::class,'login']);
        //login_action
        Route::post('/login_action',[UserController::class,'login_action']);
    //register page
        //register page
        Route::get('/register',[UserController::class,'register']);
        //register action
        Route::post('/register_action',[UserController::class,'register_action']);
//logged in users routes
    
        Route::get('/user_deshboard',[PostController::class,'home']);
        Route::get('/list',[PostController::class,'list']);
        Route::get('/my_posts',[PostController::class,'my_posts']);
        Route::get('/view/{id}',[PostController::class,'view']);
        Route::get('/add',[PostController::class,'add']);
        Route::post('/add_action',[PostController::class,'add_action']);        
        Route::get('/delete/{id}',[PostController::class,'delete']);
        Route::get('/logout',[PostController::class,'logout']);

        Route::get('/profile',[ProfileController::class,'profile']);
        Route::get('/edit_profile/{id}',[ProfileController::class,'edit_profile']);
        Route::post('/update_profile',[ProfileController::class,'update_profile']);
        

        Route::get('/admin',[AdminController::class,'admin']);
        Route::get('/categories',[CategorieController::class,'categories']);