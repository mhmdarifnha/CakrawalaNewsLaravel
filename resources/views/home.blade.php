<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <main>
        {{-- News --}}
        {{-- <div class="h-32 w-full bg-slate-200 border-gray-500 p-2">
            <h3>judul berita</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam sit voluptatum minus? Officia illum
                numquam animi maxime dolor necessitatibus est perspiciatis ducimus, molestias non, possimus nobis?
                Labore doloribus dolores perspiciatis eaque deserunt eos, maiores numquam consectetur molestias ex sint
                reiciendis doloremque illo impedit beatae laborum iusto architecto sit voluptas ad.</p>
        </div> --}}
        @foreach ($posts as $post)
            <article class="border-b border-gray-200 pb-4 mb-4 w-full">
                <a href="/article/{{ $post['slug'] }}"
                    class="w-fit text-xl font-bold hover:underline">{{ $post['title'] }}</a>
                <div class="flex items-center gap-1 text-sm text-gray-500">
                    <a href="/authors/{{ $post->author->username }}" class="hover:underline transition-all duration-150">
                        {{ $post->author->name }}
                    </a> | <a href="/categories/{{ $post->category->slug }}"
                        class="hover:underline transition-all duration-150">
                        Kategori: {{ $post->category->name }}
                    </a> | <p>Diposting pada:
                        {{ $post->created_at->diffForHumans() }}
                    </p>
                </div>
                <p class="my-4 text-base">{{ Str::limit($post['body'], 100) }}</p>
                <a href="/article/{{ $post['slug'] }}" class="text-sm text-blue-500 hover:underline">Read more &raquo;</a>
            </article>
        @endforeach
    </main>
</x-layout>