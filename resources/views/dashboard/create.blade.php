<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="container">
        <h1>Create Article</h1>
        <form action="{{ route('articles.store') }}" method="POST">
            @csrf
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    id="title" name="title" required>
            </div>

            <div>
                <label for="category_id" class="block text-sm font-medium text-gray-700">Category</label>
                <select
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    id="category_id" name="category_id" required>
                    <option value="">Select Category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            {{-- <div>
                <label for="new_category" class="block text-sm font-medium text-gray-700">Or Add New Category</label>
                <input type="text" name="new_category" id="new_category" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    placeholder="Enter new category">
            </div> --}}

            <div>
                <label for="body" class="block text-sm font-medium text-gray-700">Body</label>
                <textarea
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    id="body" name="body" rows="5" required></textarea>
            </div>

            <button type="submit" class="my-btn">
                Create Article
            </button>
        </form>
        <div class="flex justify-between items-center mt-3">
            <a href="/dashboard/articles" class="my-btn">
                &laquo; Back
            </a>
        </div>
    </div>
</x-layout>
