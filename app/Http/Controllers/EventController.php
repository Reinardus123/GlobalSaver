<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use App\Models\Event;

class EventController extends Controller
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

        return view('events',[
            "title" => "All Events " .  $title,
            "active" => 'events',
            // "posts" => Post::latest()->get(),
            "events" => Event::latest()->filter(request(['search', 'category', 'author']))
            ->paginate(7)->withQueryString()
        ]);
    }

    public function show(Event $event){
        return view('event',[
            "title" => "Event",
            "active" => "events",
            "event" => $event
         ]);
    }

}
