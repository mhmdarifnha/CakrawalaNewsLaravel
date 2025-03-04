<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    @foreach ($posts as $post)
        <article class="border-b border-gray-200 pb-4 mb-4 w-3/4">
            <a href="/article/{{ $post['slug'] }}" class="w-fit text-xl font-bold hover:underline">{{ $post['title'] }}</a>
            <div class="flex items-center gap-1 text-sm text-gray-500">
                <a href="/authors/{{ $post->author->name }}">{{ $post->author->name }}</a> | <p>Diposting pada:
                    {{ $post->created_at->diffForHumans() }}
                </p>
            </div>
            <p class="my-4 text-base">{{ Str::limit($post['body'], 100) }}</p>
            <a href="/article/{{ $post['slug'] }}" class="text-sm text-blue-500 hover:underline">Read more &raquo;</a>
        </article>
    @endforeach
</x-layout>