<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/blogs', function () {
    return view('blogs', [
        'blogs' => [
            [
                'id' => 1,
                'title' => 'My first blog',
                'body' => 'This is my first blog post'
            ],
            [
                'id' => 2,
                'title' => 'My second blog',
                'body' => 'This is my second blog post'
            ],
            [
                'id' => 3,
                'title' => 'My third blog',
                'body' => 'This is my third blog post'
            ]
        ]
    ]);
});

Route::get('/blogs/{id}', function ($id) {
    $blogs = [
        [
            'id' => 1,
            'title' => 'My first blog',
            'body' => 'This is my first blog post'
        ],
        [
            'id' => 2,
            'title' => 'My second blog',
            'body' => 'This is my second blog post'
        ],
        [
            'id' => 3,
            'title' => 'My third blog',
            'body' => 'This is my third blog post'
        ]
    ];

    $blog = Arr::first($blogs, fn ($blog) => $blog['id'] == $id);

    return view('blog', ['blog' => $blog]);
});

Route::get('/contact', function () {
    return view('contact');
});
