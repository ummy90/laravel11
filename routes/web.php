<?php


use Illuminate\Support\Facades\Route;
use App\Models\Post;


Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
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

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => Post::all()]);
});

Route::get('/posts/{post:slug}', function ($post) {
    $post = Post::find($id);

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

