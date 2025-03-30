<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserPostController;
use App\Models\Category;
use App\Models\User;

Route::get('/', function () {
    return view('home', ['title' => 'Home page', 'posts' => Post::latest()->paginate(3)]);
});

Route::get('/article', function () {
    return view('articles', ['title' => 'Article page', 'posts' => Post::filter(request(['search', 'category', 'author']))->latest()->paginate(6)->withQueryString()]);
});

Route::get('/article/{post:slug}', function (Post $post) {
    return view('single-article', ['title' => 'Single Article', 'post' => $post]);
});

Route::get('/authors/{user:username}', function (User $user) {
    return view('articles', ['title' => count($user->posts) . ' Article by ' . $user->name, 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('articles', ['title' => 'Category ' . $category->name, 'posts' => $category->posts]);
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

// Route::get('/dashboard', [UserPostController::class, 'index']);
// Route::get('/dashboard', function () {
//     return view('dashboard.index', ['title' => 'Dashboard']);
// })->middleware(['auth', 'verified'])->name('dashboard');
// Route::get('/dashboard/articles', [UserPostController::class, 'show']);

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.index', ['title' => 'Dashboard']);
    })->name('dashboard');
    Route::resource('/dashboard/articles', UserPostController::class);
    // Route::get('/dashboard/articles', [UserPostController::class, 'index'])->name('dashboard.articles');
    // Route::get('/dashboard/articles/{post}', [UserPostController::class, 'show'])->name('dashboard.articles.show');
    // Route::get('/dashboard/article/{post}/edit', [UserPostController::class, 'edit'])->name('dashboard.articles.edit');
    // Route::put('/dashboard/article/{post}', [UserPostController::class, 'store'])->name('dashboard.articles.store');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
