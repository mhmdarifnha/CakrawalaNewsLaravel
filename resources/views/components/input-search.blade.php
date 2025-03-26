<div class="relative w-full max-w-md">
    <form method="GET" class="flex items-center">
        @if (request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
        @endif
        @if (request('author'))
            <input type="hidden" name="author" value="{{ request('author') }}">
        @endif
        <!-- Input Search -->
        <input type="search" name="search" id="search" placeholder="Cari artikel..."
            class="w-full h-10 rounded-l-md px-4 py-2 border border-gray-300 focus:ring-2 focus:ring-blue-400 focus:border-blue-500 outline-none transition-all duration-200">

        <!-- Tombol Search -->
        <button type="submit"
            class="h-10 px-4 bg-blue-500 text-white font-semibold rounded-r-md hover:bg-blue-600 transition-all duration-200">Search
        </button>
    </form>
</div>
