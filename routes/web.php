<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
    ]);
});

Route::get('/blog', function () {
    $blogPost = [
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
    return view('posts', [
        "title" => "Blog",
        "posts" => $blogPost
    ]);
});

Route::get('post/{slug}', function ($slug) {
    $blogPost = [
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

    $new = [];
    foreach ($blogPost as $post) {
        if($post['slug'] === $slug) {
            $new = $post;
        }
    }

    return view('post', [
        "title" => "Post ",
        "post" => $new
    ]);
});