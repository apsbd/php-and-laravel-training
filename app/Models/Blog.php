<?php
namespace App\Models;

use Illuminate\Support\Arr;

class Blog
{
    public static function all(): array
    {
        return [
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
    }

    public static function find(int $id): array
    {
        $blog = Arr::first(static::all(), fn ($blog) => $blog['id'] == $id);

        if (!$blog) {
            abort(404);
        }

        return $blog;
    }
}
