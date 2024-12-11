<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminEventController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocaleController;

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

Route::get('/',[HomeController::class,'index'] );
Route::get('/posts', [PostController::class, 'index']);


Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/events',[EventController::class, 'index']);

Route::get('events/{event:slug}',[EventController::class, 'show']);

Route::get('/categories/{category:slug}',[CategoryController::class,'show']);

Route::get('/authors/{author:username}',[AuthorController::class,'post']);

Route::get('/authors/{author:username}',[AuthorController::class,'event']);

Route::get('/categories',[CategoryController::class,'index']);


Route::get('/login',[LoginController::class, 'index'])->middleware('guest');

Route::post('/login',[LoginController::class, 'authenticate']);

Route::post('/logout',[LoginController::class, 'logout']);

Route::get('/register',[RegisterController::class, 'index'])->name('login')->middleware('guest');

Route::post('/register',[RegisterController::class, 'store']);

Route::get('/dashboard',[dashboardController::class,'index'])->middleware('auth');


Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/posts',DashboardPostController::class)->middleware('auth');

Route::get('locale/{locale}',[LocaleController::class,'locale'])->name('locale');


Route::resource('/dashboard/events',AdminEventController::class)->middleware('admin');

Route::get('/book/{event:slug}',[BookController::class,'index']);

Route::post('/book',[BookController::class,'checkout']);

Route::post('/midtrans-callback',[BookController::class,'callback']);

Route::get('/invoice{id}',[BookController::class,'invoice']);