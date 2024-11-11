<?php
namespace App\Models;

class Task
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'Learn Laravel',
                'is_completed' => false
            ],
            [
                'id' => 2,
                'title' => 'Go to the gym',
                'is_completed' => true
            ],
            [
                'id' => 3,
                'title' => 'Visit a friend',
                'is_completed' => false
            ]
        ];
    }
}
