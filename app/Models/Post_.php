<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
        [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Firdaus Waridil Wishal",
        "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt aspernatur sed earum reprehenderit, ut sequi eum porro tenetur! Quod officiis vitae placeat nam tempora! Voluptate sed voluptatibus quisquam amet delectus harum fuga rerum, culpa alias deleniti a impedit at maiores laboriosam molestias est iste cum quo officia distinctio non. Omnis deleniti illo maxime fugiat similique eaque, sit culpa consectetur aperiam, error voluptatibus quae voluptatum? Praesentium totam ducimus commodi nam obcaecati voluptatum, consequatur quae consequuntur velit cumque deleniti, molestiae sunt soluta!"
        ],
        [
        "title" => "Judul Post Kedua",
        "slug" => "judul-post-Kedua",
        "author" => "Doddy Mallis",
        "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt aspernatur sed earum reprehenderit, ut sequi eum porro tenetur! Quod officiis vitae placeat nam tempora! Voluptate sed voluptatibus quisquam amet delectus harum fuga rerum, culpa alias deleniti a impedit at maiores laboriosam molestias est iste cum quo officia distinctio non. Omnis deleniti illo maxime fugiat similique eaque, sit culpa consectetur aperiam, error voluptatibus quae voluptatum? Praesentium totam ducimus commodi nam obcaecati voluptatum, consequatur quae consequuntur velit cumque deleniti, molestiae sunt soluta!"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}