<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <article class="w-full\ mx-auto bg-white shadow-md rounded-lg p-6 mb-6">
        <h2 class="text-2xl font-bold text-gray-800 mb-2">{{ $post['title'] }}</h2>

        <div class="flex items-center gap-2 text-sm text-gray-500 mb-4">
            <a href="/authors/{{ $post->author->username }}"
                class="hover:text-blue-600 font-medium transition-all duration-200">
                ✍️ {{ $post->author->name }}
            </a>
            <span class="text-gray-400">•</span>
            <p>🕒 {{ $post->created_at->diffForHumans() }}</p>
        </div>

        <p class="text-gray-700 leading-relaxed text-lg">
            {{ $post['body'] }}
        </p>

        <div class="mt-6">
            <a href="/article"
                class="inline-block text-blue-600 hover:text-blue-800 hover:underline font-semibold text-sm transition-all duration-200">
                &laquo; Back to article page
            </a>
        </div>
    </article>
</x-layout>