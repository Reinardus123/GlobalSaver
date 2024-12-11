<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthorController extends Controller
{
    public function event(User $author){
        return view('events',[
            'title' => "Event By : $author->name",
            'events' =>$author->events->load('category','author'),
            'active' => 'authors'
        ]);
    }

    public function post(User $author){
        return view('posts',[
            'title' => "Post By Author : $author->name",
            'posts' => $author->posts->load('category','author'),
            'active' => 'authors'
            
        ]);
    }
}
