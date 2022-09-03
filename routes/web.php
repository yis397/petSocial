<?php

use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\FollowerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ImagenController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PrivateController;
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

Route::get('/',[PrivateController::class,'index'])->name('home');

Route::get('/auth/register',[RegisterController::class,'index']);
Route::post('/auth/register',[RegisterController::class,'store'])->name('register.store');
Route::get('/auth/login',[LoginController::class,'index']);
Route::post('/auth/login',[LoginController::class,'store'])->name('login.store');
Route::post('/logout',[LogoutController::class,'store'])->name('logout');



Route::get('/perfil',[PrivateController::class,'perfil']);
Route::post('/perfil',[PrivateController::class,'perfilStore'])->name('perfil.store');



Route::get('/{user:username}',[PostController::class,'index'])->name('muro');



Route::get('/posts/create',[PostController::class,'create'])->name('muro.create');
Route::post('/posts/create',[PostController::class,'store'])->name('muro.store');
Route::get('/{user:username}/post/{post}',[PostController::class,'fullPost'])->name('muro.full');

Route::post('/{user:username}/post/{post}',[ComentarioController::class,'store'])->name('muro.comentario');

Route::post('/{user:username}/follow',[FollowerController::class,'store'])->name('user.follow');
Route::post('/{user:username}/unfollow',[FollowerController::class,'destroy'])->name('user.unfollow');

Route::post('/imagen-in',[ImagenController::class,'store'])->name('imagen.store');
