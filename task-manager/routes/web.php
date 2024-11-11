<?php

use App\Models\Task;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', function () {
    return view('tasks', [
        'tasks' => Task::all()
    ]);
});

Route::get('/tasks/{id}', function ($id) {
    return view('task', [
        'task' => Arr::first(Task::all(), fn ($task) => $task['id'] == $id)
    ]);
});
