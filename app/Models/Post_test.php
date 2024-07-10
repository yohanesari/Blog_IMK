<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static
        $blog_posts = [
            [
                "title" => "Judul Post Pertama",
                "slug" => "judul-post-pertama",
                "author" => "Yohanes Diyan",
                "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Deleniti ipsam voluptates labore mollitia quae inventore laboriosam nulla, 
            asperiores voluptatum corrupti consequatur eos repudiandae, error, illo dolores 
            voluptatibus beatae? Modi, esse."
            ],
            [
                "title" => "Judul Post Kedua",
                "slug" => "judul-post-kedua",
                "author" => "Siapa Aja",
                "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Deleniti ipsam voluptates labore mollitia quae inventore laboriosam nulla, 
            asperiores voluptatum corrupti consequatur eos repudiandae, error, illo dolores 
            voluptatibus beatae? Modi, esse. Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Deleniti ipsam voluptates labore mollitia quae inventore laboriosam nulla, 
            asperiores voluptatum corrupti consequatur eos repudiandae, error, illo dolores 
            voluptatibus beatae? Modi, esse."
            ]
        ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }
    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p['slug'] === $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}
