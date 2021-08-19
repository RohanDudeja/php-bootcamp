<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
Route::resource('/users', UserController::class);
Route::post('/login',function (){
    return view('login');
});
Route::get('/users_actions', function () {
    return view('actions');
});

Route::resource('/user/{user_id}/posts', PostController::class);
Route::resource('/post/{post_id}/comments', CommentController::class);
