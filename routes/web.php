<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
    [
        'id' => '1',
        'title' => 'Judul Artikel ',
        'author' => 'Umi Khoiriyah',
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, dolore aut explicabo commodi alias consequatur reiciendis sunt omnis consectetur 
        nisi earum recusandae sed fugit laudantium dolorem repudiandae impedit delectus magnam!'
    ],
    [
        'id' => '2',
        'title' => 'Judul Artikel ',
        'author' => 'Umi Khoiriyah',
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, dolore aut explicabo commodi alias consequatur reiciendis sunt omnis consectetur 
        nisi earum recusandae sed fugit laudantium dolorem repudiandae impedit delectus magnam!'
    ],
    [
        'id' => '3',
        'title' => 'Judul Artikel ',
        'author' => 'Umi Khoiriyah',
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, dolore aut explicabo commodi alias consequatur reiciendis sunt omnis consectetur 
        nisi earum recusandae sed fugit laudantium dolorem repudiandae impedit delectus magnam!'
    ]
    ]]);
});

Route::get('/posts/{id}', function ($id) {
    $posts = [
    [
        'id' => '1',
        'title' => 'Judul Artikel ',
        'author' => 'Umi Khoiriyah', 
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, dolore aut explicabo commodi alias consequatur reiciendis sunt omnis consectetur 
        nisi earum recusandae sed fugit laudantium dolorem repudiandae impedit delectus magnam!'
    ],
    [
        'id' => '2',
        'title' => 'Judul Artikel ',
        'author' => 'Umi Khoiriyah',
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, dolore aut explicabo commodi alias consequatur reiciendis sunt omnis consectetur 
        nisi earum recusandae sed fugit laudantium dolorem repudiandae impedit delectus magnam!'
    ],
    [
        'id' => '3',
        'title' => 'Judul Artikel ',
        'author' => 'Umi Khoiriyah',
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, dolore aut explicabo commodi alias consequatur reiciendis sunt omnis consectetur 
        nisi earum recusandae sed fugit laudantium dolorem repudiandae impedit delectus magnam!'
    ]
    ];

    $post = Arr::first ($posts, function ($post) use ($id) {
        return $post['id'] == $id;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

Route::get('/produk', function () {
    return view('produk.index');
});

Route::get('/logout', function () {
    return view('welcome');
});