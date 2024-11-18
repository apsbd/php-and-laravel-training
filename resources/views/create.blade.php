<x-layout>
    <x-slot:heading>
        Create a New Post
    </x-slot:heading>

    <form action="/blogs" method="post" class="space-y-6 p-6 bg-gray-100 rounded-md shadow-md">
        @csrf
        <div class="flex flex-col space-y-2">
            <label for="title" class="text-sm font-medium text-gray-700">Title</label>
            <input
                type="text"
                name="title"
                id="title"
                value="{{ old('title') }}"
                class="border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
            >
            @error('title')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex flex-col space-y-2">
            <label for="body" class="text-sm font-medium text-gray-700">Body</label>
            <textarea
                name="body"
                id="body"
                class="border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 h-32 resize-none"
            >{{ old('body') }}</textarea>
            @error('body')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <button
            type="submit"
            class="w-full bg-blue-600 text-white rounded-md py-2 font-medium hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500"
        >
            Create Post
        </button>
    </form>
</x-layout>
