<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreatedController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// //getting information form the URL
// Route::get('/{name}', function ($name) {
//     //providing the info got from the url to the welcome page
//     return view('welcome',['name' => $name]);
// });

              //Using controller in the Route
Route::get("/users",[CreatedController::class,'index']);
               //controllers with ARG
Route::get("/users/{user}",[CreatedController::class,'index2']);

Route::get("/users/user/view/{name}",[CreatedController::class,'index3']);

Route::get('/laravel/about', function () {
    return view('about');
});
Route::get('/welcome',function(){
    return view('welcome');
});
//another way to get a page
Route::view('/laravel/contact','contact');//1st RAG :URL ,2nd ARG Our Page
   // Redirect the user to a specific page
Route::fallback(function () {
    return redirect('/welcome');
});

// url generation
Route::get('/',function(){
    return view('welcome');
});

Route::get('/home',function(){
    return view('home');
});

Route::get('/about1',function(){
    return view('about1');
});







