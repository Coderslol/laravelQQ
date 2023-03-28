<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'name' => 'khoirul muasin',
        'email' => '04madonk@gmail.com',
        'image' => 'img1.png'
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
        [
            'title' => 'Judul 1',
            'slug' => 'judul-posts-1',
            'penulis' => 'Coders',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, perferendis officia! Ex, autem saepe ipsam, eaque qui eos provident incidunt velit molestiae eligendi vitae atque sed voluptates accusamus magnam alias! Dolore, pariatur, minima temporibus quibusdam provident laborum dicta quo asperiores consequatur cupiditate quod ipsa. Reprehenderit laborum dolorem beatae eum excepturi error fugiat consequuntur magni quas aut, sequi nulla quis dolore? Laboriosam eaque omnis, nulla rem illum suscipit velit aperiam, expedita officia sequi distinctio quibusdam incidunt maxime adipisci eos amet vero?'
        ],
        [
            'title' => 'Judul 2',
            'slug' => 'judul-posts-2',
            'penulis' => 'Coderss',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, perferendis officia! Ex, autem saepe ipsam, eaque qui eos provident incidunt velit molestiae eligendi vitae atque sed voluptates accusamus magnam alias! Dolore, pariatur, minima temporibus quibusdam provident laborum dicta quo asperiores consequatur cupiditate quod ipsa. Reprehenderit laborum dolorem beatae eum excepturi error fugiat consequuntur magni quas aut, sequi nulla quis dolore? Laboriosam eaque omnis, nulla rem illum suscipit velit aperiam, expedita officia sequi distinctio quibusdam incidunt maxime adipisci eos amet vero?'
        ],
    ];
    return view('posts', [
        'title' => 'Blog',
        'posts' => $blog_posts
    ]);
});


Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            'title' => 'Judul 1',
            'slug' => 'judul-posts-1',
            'penulis' => 'Coders',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, perferendis officia! Ex, autem saepe ipsam, eaque qui eos provident incidunt velit molestiae eligendi vitae atque sed voluptates accusamus magnam alias! Dolore, pariatur, minima temporibus quibusdam provident laborum dicta quo asperiores consequatur cupiditate quod ipsa. Reprehenderit laborum dolorem beatae eum excepturi error fugiat consequuntur magni quas aut, sequi nulla quis dolore? Laboriosam eaque omnis, nulla rem illum suscipit velit aperiam, expedita officia sequi distinctio quibusdam incidunt maxime adipisci eos amet vero?'
        ],
        [
            'title' => 'Judul 2',
            'slug' => 'judul-posts-2',
            'penulis' => 'Coderss',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, perferendis officia! Ex, autem saepe ipsam, eaque qui eos provident incidunt velit molestiae eligendi vitae atque sed voluptates accusamus magnam alias! Dolore, pariatur, minima temporibus quibusdam provident laborum dicta quo asperiores consequatur cupiditate quod ipsa. Reprehenderit laborum dolorem beatae eum excepturi error fugiat consequuntur magni quas aut, sequi nulla quis dolore? Laboriosam eaque omnis, nulla rem illum suscipit velit aperiam, expedita officia sequi distinctio quibusdam incidunt maxime adipisci eos amet vero?'
        ],
    ];

        $new_post = [];
        foreach($blog_posts as $post){
            if($post['slug'] === $slug){
                $new_post = $post;
            }
        }

    return view('post', [
        'title' => 'single post',
        'post' => $new_post
    ]);
});
