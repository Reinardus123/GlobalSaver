<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use PhpParser\Node\Expr\PostInc;

class PostController extends Controller
{
  
    public function index(){
        //query buat searching
        // logicnya kalo misalkan yang dicari ga ada dia bakal kelempar ke $posts->get()
        // kalo ada pencariannya dia masuk dulu ke where abis itu baru ke $posts->get()
        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if(request(('author'))){
            $author = User::firstWhere('username', request('author'));
            $title = 'by' . $author->name;
        }
        return view('posts',[
            "title" => "All Posts " .  $title,
            "active" => 'posts',
            // "posts" => Post::latest()->get(),
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))
            ->paginate(7)->withQueryString()
        ]);
    }

    public function show(Post $post){
        return view('post',[
            "title" => "Single Post",
            "active" => "posts",
            "post" => $post
         ]);
    }


}

