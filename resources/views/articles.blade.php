<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 p-4">
        @foreach ($posts as $post)
            <article class="flex flex-col gap-3 shadow-lg rounded-md p-4 justify-between bg-white">
                <div class="flex gap-3 items-center text-sm">
                    <span class="text-gray-500">{{ $post->created_at->diffForHumans() }}</span>
                    <a href="/categories/{{ $post->category->slug }}"
                        class="bg-{{ $post->category->color }}-100 text-black text-xs font-medium px-3 py-1 rounded-md hover:bg-{{ $post->category->color }}-200">
                        {{ $post->category->name }}
                    </a>
                </div>
                <a href="/article/{{ $post['slug'] }}" class="text-lg md:text-xl font-bold hover:underline">
                    {{ $post['title'] }}
                </a>
                <p class="text-gray-700 text-sm md:text-base">
                    {{ Str::limit($post['body'], 100) }}
                </p>
                <div class="flex justify-between items-center mt-3">
                    <a href="/authors/{{ $post->author->username }}"
                        class="font-semibold text-sm md:text-base text-gray-700 hover:text-gray-900 hover:underline">
                        {{ $post->author->name }}
                    </a>
                    <a href="/article/{{ $post['slug'] }}" class="text-blue-600 text-sm md:text-base hover:underline">
                        Read more &raquo;
                    </a>
                </div>
            </article>
        @endforeach
    </div>
</x-layout>