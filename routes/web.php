<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home',[
        "title" => "Home"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Firdaus Waridil Wishal",
        "email" => "waridhil@gmail.com",
        "image" => "IMG-20210531-WA0008.jpeg"
    ]);
});

Route::get('/posts', [PostController::class,'index']);
Route::get('posts/{post:slug}',[PostController::class,'show']);

Route::get('/login', [LoginController::class,'index'])->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);

Route::get('/register', [RegisterController::class,'index']);
Route::post('/register', [RegisterController::class,'store']);

Route::get('/admin', function()
{
    return view('admin');
});

Route::get('/logout', [LogoutController::class,'logout']);