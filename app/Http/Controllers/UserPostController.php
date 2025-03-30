<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Container\Attributes\Storage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Str;

class UserPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $user = $request->user();
        $posts = $user->posts;

        return view('dashboard.articles', ['title' => 'Your Articles!', 'posts' => $posts]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('dashboard.create', ['title' => 'Create Article!', 'categories' => Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            // 'new_category' => 'nullable|string|max:255',
            'body' => 'required|string',
        ]);

        $datas = [
            'title' => $request->title,
            'author_id' => $request->user()->id,
            'category_id' => intval($request['category_id']),
            'slug' => Str::slug($request->title),
            'body' => $request->body,
        ];

        Post::create($datas);
        // return dd($datas);

        return redirect()->route('articles.index')->with('success', 'Article created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug): View
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('dashboard.show', ['title' => 'Article', 'post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug): View
    {

        $post = Post::where('slug', $slug)->firstOrFail();
        return view('dashboard.edit', ['title' => 'Edit page', 'post' => $post, 'categories' => Category::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author_id' => 'required|exists:users,id',
            'category_id' => 'required|exists:categories,id',
            'body' => 'required|string',
        ]);

        $datas = [
            'title' => $request->title,
            'author_id' => $request->user()->id,
            'category_id' => intval($request->category_id),
            'slug' => Str::slug($request->title),
            'body' => $request->body
        ];

        Post::findOrFail($id)->update($datas);

        return redirect()->route('articles.index')->with('success', 'Article updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        Post::findOrFail($id)->delete();
        return redirect()->route('articles.index')->with('success', 'Article successfully deleted!');
    }
}
