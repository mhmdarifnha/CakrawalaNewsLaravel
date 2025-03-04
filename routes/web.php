<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Models\User;

Route::get('/', function () {
    return view('home', ['title' => 'Home page', 'posts' => Post::all()]);
});

Route::get('/article', function () {
    return view('article', ['title' => 'Article page', 'posts' => Post::all()]);
});

Route::get('/article/{post:slug}', function (Post $post) {
    return view('single-article', ['title' => 'Single Article', 'post' => $post]);
});

Route::get('/authors/{user}', function (User $user) {
    // 'Article by' . $user->name
    return view('article', ['title' => 'Article by ' . $user->name, 'posts' => $user->posts]);
});

Route::get('/video', function () {
    return view('video', ['title' => 'Video page']);
});

Route::get('/about', function () {
    return view('about', [
        'name' => 'Arif',
        'title' => 'About page'
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
