<div class="container mx-auto px-4 py-8">
    <h2 class="text-2xl font-bold mb-6">Latest News</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach ($posts as $post)
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="https://placehold.co/800?font=roboto&text={{ $post['title'] }}" alt="News Image"
                    class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold">News Title 1</h3>
                    <p class="text-gray-600">Brief description of the news article goes here. It provides a quick
                        overview of
                        the content.</p>
                    <a href="#" class="text-blue-500 hover:underline">Read more</a>
                </div>
            </div>
        @endforeach
        {{-- <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="https://placehold.co/800?font=roboto&text=Hello+World" alt="News Image" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-lg font-semibold">News Title 1</h3>
                <p class="text-gray-600">Brief description of the news article goes here. It provides a quick overview of
                    the content.</p>
                <a href="#" class="text-blue-500 hover:underline">Read more</a>
            </div>
        </div> --}}
    </div>
</div>
