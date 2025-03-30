<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="container">
        <h1>Create Article</h1>
        <form action="{{ route('articles.update', $post->id) }}" method="POST">
            {{-- <form action="/tes"> --}}
            @csrf
            @method('PUT')
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    id="title" name="title" value="{{ $post['title'] }}" required>
            </div>

            <div>
                <label for="category_id" class="block text-sm font-medium text-gray-700">Category</label>
                <select
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    id="category_id" name="category_id" required>
                    <option value="">Select Category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" @selected($category->id == old('category_id', $post->category_id))>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="body" class="block text-sm font-medium text-gray-700">Body</label>
                <textarea
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    id="body" name="body" rows="5" value="{{ $post['body'] }}" required>{{ old('body', $post->body) }}</textarea>
            </div>

            <button type="submit" class="my-btn">
                Update Article
            </button>
        </form>
        <div class="flex justify-between items-center mt-3">
            <a href="/dashboard/articles" class="my-btn">
                &laquo; Back
            </a>
        </div>
    </div>
</x-layout>
