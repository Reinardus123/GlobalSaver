<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminEventController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;


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
        "title" => "Home",
        "active" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "active" => "about",
        "name" => "Reinardus Revelino Djafar",
        "email" => "reinardusrevelino@gmail.com",
        "image"=> "img/WEEK5.jpg"
    ]);
});


Route::get('/posts', [PostController::class, 'index']);


Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/events',[EventController::class, 'index']);

Route::get('events/{event:slug}',[EventController::class, 'show']);



Route::get('/categories/{category:slug}',function(Category $category){
    return view('events',[
        'title' => "Events By Category : $category->name",
        'active' => "categories",
        'events' => $category->events->load('category','author')       
    ]);
});

Route::get('/authors/{author:username}',function(User $author){
    return view('posts',[
        'title' => "Post By Author : $author->name",
        'posts' => $author->posts->load('category','author'),
        'active' => 'authors'
        
    ]);
});

Route::get('/authors/{author:username}', function(User $author){
    return view('events',[
        'title' => "Event By : $author->name",
        'events' =>$author->events->load('category','author'),
        'active' => 'authors'
    ]);
});



Route::get('/categories',function(){
    return view('categories',[
        'title' => 'Event Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});


Route::get('/login',[LoginController::class, 'index'])->middleware('guest');
Route::post('/login',[LoginController::class, 'authenticate']);
Route::post('/logout',[LoginController::class, 'logout']);
Route::get('/register',[RegisterController::class, 'index'])->name('login')->middleware('guest');
Route::post('/register',[RegisterController::class, 'store']);



Route::get('/dashboard',function(){
    return view('dashboard.index');
})->middleware('auth');


Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/posts',DashboardPostController::class)->middleware('auth');


Route::resource('/dashboard/events',AdminEventController::class)->middleware('admin');



