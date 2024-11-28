<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class coba
{
    // use HasFactory;

    private static $blog_posts = 
     [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Reinardus Revelino",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias corrupti voluptatibus deleniti saepe perspiciatis molestiae? Deserunt, autem optio ad facilis cupiditate soluta nobis accusamus. Impedit quam ullam rerum consectetur incidunt."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Reinardus",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias corrupti voluptatibus deleniti saepe perspiciatis molestiae? Deserunt, autem optio ad facilis cupiditate soluta nobis accusamus. Impedit quam ullam rerum consectetur incidunt."
        ]
    ];

   public static function all(){
     return collect(self::$blog_posts);
   }

   public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere('slug',$slug);
       
    }

}
