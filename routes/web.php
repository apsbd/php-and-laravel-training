<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/blogs', function () {
    return view('blogs', [
        'blogs' => Blog::all()
    ]);
});

Route::get('/blogs/{id}', function ($id) {
    $blog = Blog::find($id);

    return view('blog', ['blog' => $blog]);
});

Route::get('/contact', function () {
    return view('contact');
});
