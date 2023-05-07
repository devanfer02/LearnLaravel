<?php

namespace App\Models;

class Post 
{
    private static $blogPosts = [
        [
            "title" => "Programming For Beginners",
            "slug" => "first-title-post",
            "author" => "Devan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Quaerat magni cumque a laudantium quisquam? 
            Illo doloremque tempora perspiciatis ipsum, 
            quaerat esse veritatis sapiente dolores laboriosam asperiores ab, 
            ullam exercitationem a?",
        ],
        [
            "title" => "Algorithms and Data Structures",
            "slug" => "second-title-post",
            "author" => "Devan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Quaerat magni cumque a laudantium quisquam? 
            Illo doloremque tempora perspiciatis ipsum, 
            quaerat esse veritatis sapiente dolores laboriosam asperiores ab, 
            ullam exercitationem a?",
        ],
    ];

    public static function getAllPosts() 
    {
        return collect(self::$blogPosts);
    }

    public static function findBySlug($slug) 
    {
        return static::getAllPosts()->firstWhere('slug',$slug);
    }
}
