<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    @foreach ($posts as $post)
        <article class="border-b border-gray-200 pb-4 mb-4">
            <a href="/article/{{ $post['slug'] }}" class="text-xl font-bold hover:underline">{{ $post['title'] }}</a>
            <div class="flex items-center gap-1 text-sm text-gray-500">
                <a href="/authors/{{ $post->author->name }}" class="hover:underline">{{ $post->author->name }}</a>
                | <a href="/article/?category={{ $post->category->slug }}"
                    class="bg-{{ $post->category->color }}-100 text-black text-xs font-medium px-3 py-1 rounded-md hover:bg-{{ $post->category->color }}-200 hover:underline">{{ $post->category->name }}</a>
                | <p> Diposting pada: {{ $post->created_at->diffForHumans() }} </p>
            </div>
            <p class="my-4 text-base">{{ Str::limit($post['body'], 100) }}</p>
            <a href="/article/{{ $post['slug'] }}" class="text-sm text-blue-500 hover:underline">&laquo; Back</a>
        </article>
    @endforeach
</x-layout>
