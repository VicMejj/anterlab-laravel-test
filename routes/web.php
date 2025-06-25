<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;

Route::get('/', fn() => redirect('/posts'));
Route::resource('posts', PostController::class);
Route::get('/users/{id}/tasks', function ($id) {
    $user = \App\Models\User::with('tasks')->findOrFail($id);
    return view('users.tasks', compact('user'));
});

