<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get("/", "PostController@index")->name("posts.index");
Route::get("/posts/{post}", "PostController@show")->name("posts.show");

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware('auth')
    ->name("admin.")
    ->group(function () {
        //Route::resource("/posts", "PostController");
        //Route::get("/posts/index", "PostController@index");
        Route::get('/posts/create', 'PostController@create')->name('posts.create');
        Route::post('/posts', 'PostController@store')->name('posts.store');
        Route::post('/posts/update', 'PostController@store')->name('posts.update');

    });
