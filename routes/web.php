<?php

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/blogs', function () {
    return view('blogs', [
        'blogs' => Blog::all()
    ]);
});

Route::get('/blogs/create', function () {
    return view('create');
});

Route::post('/blogs', function (Request $request) {
    $validated = $request->validate([
        'title' => 'required|unique:blogs|max:255',
        'body' => 'required'
    ]);

    Blog::create($validated);

    return redirect('/blogs');
});

Route::get('/blogs/{blog}', function (Blog $blog) {
    return view('blog', ['blog' => $blog]);
});

Route::get('/contact', function () {
    return view('contact');
});
