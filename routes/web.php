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


Route::get('/laravel/about', function () {
    return view('about');
});
//another way to get a page
Route::view('/laravel/contact','contact');//1st RAG :URL ,2nd ARG Our Page
   // Redirect the user to a specific page
Route::fallback(function () {
    return redirect('/welcome');
});













