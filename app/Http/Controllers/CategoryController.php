<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function show(Category $category){
        return view('events',[
            'title' => "Events By Category : $category->name",
            'active' => "categories",
            'events' => $category->events->load('category','author')       
        ]);
    }

    public function index(){
        return view('categories',[
            'title' => 'Event Categories',
            'active' => 'categories',
            'categories' => Category::all()
        ]);
    }
}
