<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ImagenController;


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
Route::get('/login', function () {
    return view('login');
});

Route::get('/', function () {
    return view('inicio');
});


Route::get('/formulario', [RegisterController::class,'index']);
Route::post('/formulario', [RegisterController::class, 'store']);

Route::get('/inicio', [LoginController::class, 'index'])->name('login');
Route::post('/inicio', [LoginController::class, 'store']);

Route::get('/{user:username}', [PostController::class, 'index'])->name('post.index');
Route::get('/dashboard/create', [PostController::class, 'create'])->name('post.create');

Route::post('/imagenes', [ImagenController::class, 'store'])->name('imagenes');
Route::get('/post/create', [PostController::class,'create'])->name('post.create');
Route::post('/post', [PostController::class,'store'])->name('post.store');
Route::get('/{user:username}/post/{post}',[PostController::class,'show'])->name('posts.show');

Route::post('/salir', [LogoutController::class, 'store'])->name('logout');
