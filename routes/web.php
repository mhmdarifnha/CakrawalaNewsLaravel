<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Models\Category;
use App\Models\User;

Route::get('/', function () {
    // $posts = Post::with('author')->latest()->get();
    $posts = Post::latest()->get();
    return view('home', ['title' => 'Home page', 'posts' => $posts]);
});

Route::get('/article', function () {
    // $posts = Post::with(['category', 'author'])->latest()->get();
    $posts = Post::latest()->get();
    return view('article', ['title' => 'Article page', 'posts' => $posts]);
});

Route::get('/article/{post:slug}', function (Post $post) {
    return view('single-article', ['title' => 'Single Article', 'post' => $post]);
});

Route::get('/authors/{user:username}', function (User $user) {
    $posts = $user->posts->load('category', 'author');
    return view('article', ['title' => count($user->posts) . ' Article by ' . $user->name, 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    // $posts = $category->posts->load('category', 'author');
    return view('article', ['title' => 'Category ' . $category->name, 'posts' => $category->posts]);
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
