<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight flex justify-between">
            <span>{{ __('Posts') }}</span>

            <div>
                <a href="/posts/create" class="focus:outline-none text-white bg-green-800 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-800 dark:hover:bg-green-700 dark:focus:ring-green-800">Create New Post</a>
            </div>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <ul>
                        @foreach ($posts as $post)
                            <li class="flex justify-start items-center">
                                <a href="/posts/{{ $post['id'] }}" class="text-blue-500 hover:underline p-2 pl-0">
                                    <strong>{{ $post['title']}} by {{ $post->author->name }}</strong>
                                </a>

                                <form action="posts/{{ $post['id']}}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button class="bg-red-600 px-2">Delete</button>
                                </form>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
