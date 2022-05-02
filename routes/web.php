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

Route::get('/blogs/neurodata', function () {
    return view('blogs.neurodata');
});

Auth::routes();
Route::get('/show/{blog}', [App\Http\Controllers\BlogsController::class, 'show'])->name('blogs.show');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/user', [App\Http\Controllers\BlogsController::class, 'store']);
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::get('/blogs/homePage', [App\Http\Controllers\BlogsController::class, 'index'])->name('blogs.homePage');
Route::get('/blogs/blogPage', [App\Http\Controllers\BlogsController::class, 'index'])->name('blogs.blogPage');

