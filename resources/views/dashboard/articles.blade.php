<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    {{-- <div class="px-4">
        {{ $posts->links() }}
    </div> --}}
    @if ($posts->isNotEmpty())
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 p-4">
            @foreach ($posts as $post)
                <article class="flex flex-col gap-3 shadow-lg rounded-md p-4 justify-between bg-white">
                    <div class="flex gap-3 items-center text-sm">
                        <span class="text-gray-500">{{ $post->created_at->diffForHumans() }}</span>
                        <a href="/article/?category={{ $post->category->slug }}"
                            class="bg-{{ $post->category->color }}-100 text-black text-xs font-medium px-2 py-1 rounded-md hover:bg-{{ $post->category->color }}-200 hover:underline">
                            {{ $post->category->name }}
                        </a>
                    </div>
                    <a href="{{ route('articles.show', $post['slug']) }}"
                        class="text-lg md:text-xl font-bold hover:underline">
                        {{ $post['title'] }}
                    </a>
                    <p class="text-gray-700 text-sm md:text-base">
                        {{ Str::limit($post['body'], 100) }}
                    </p>
                    <form action="{{ route('articles.destroy', $post->id) }}" method="POST" class="flex gap-1">
                        <a href="{{ route('articles.edit', $post['slug']) }}"
                            class="text-black text-xs font-medium rounded-md hover:underline">Edit
                            Article</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-black text-xs font-medium rounded-md hover:underline">Delete
                            Article</button>
                    </form>
                    {{-- <div class="flex justify-between items-center mt-3">
                        <a href="/dashboard/article/edit/{{ $post['slug'], $post['id'] }}"
                            class="text-yellow-500 hover:text-yellow-600">
                            Edit Article
                        </a>
                    </div> --}}
                </article>
            @endforeach
        </div>
        {{-- <div class="px-4">
            {{ $posts->links() }}
        </div> --}}
        <div class="flex justify-between items-center mt-3">
            <a href="{{ route('articles.create') }}" class="my-btn">
                Create Article
            </a>
        </div>
    @else
        <div class="flex flex-col items-center justify-center min-h-[50vh] text-gray-700">
            <img src="https://cdn-icons-png.flaticon.com/512/2748/2748558.png" alt="Not Found"
                class="w-24 h-24 opacity-70">
            <h2 class="text-2xl font-semibold">Artikel Tidak Ditemukan</h2>
            <p class="text-gray-500 text-sm mt-2">Coba cari dengan kata kunci lain atau kembali ke halaman utama.</p>
            <a href="/" class="my-btn">
                Kembali ke Beranda
            </a>
        </div>
    @endif
</x-layout>
