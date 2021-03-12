<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Http\Controllers\BlogController;

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
    return view('welcome');
});

Route::get('/profile-home', function () {
    return view('profile_home');
})->name('profile_home');
Route::get('/profile-about', function () {
    return view('profile_about');
})->name('profile_about');
Route::get('/profile-contact', function () {
    return view('profile_contact');
})->name('profile_contact');
Route::get('/post/create', function () {
    DB::table("posts")->insert([
        'title'=>"MyLife",
        'body'=>"My name is Daryn. I am 18 years old."
    ]);
});
Route::get('/post', [BlogController::class,'index']);
