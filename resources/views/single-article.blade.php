<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <article class="pb-4 mb-4 w-full">
        <h2 class="text-xl font-bold">{{ $post['title'] }}</h2>
        <div class="flex items-center gap-1 text-sm text-gray-500">
            <a href="/authors/{{ $post->author->username }}"
                class="hover:underline transition-all duration-150">{{  $post->author->name }}</a> | <p>Diposting pada:
                {{ $post->created_at->diffForHumans() }}
            </p>
        </div>
        <p class="my-4 text-base">{{ $post['body'] }}</p>
        <a href="/article" class="text-sm text-blue-500 hover:underline"> &laquo; Back to article page
        </a>
    </article>
</x-layout>