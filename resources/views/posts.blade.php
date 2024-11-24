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
            <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="min-w-full mb-6">
                        <thead>
                            <tr class="text-left border-gray-600">
                                <th class="px-4 py-2 border-b">Title</th>
                                <th class="px-4 py-2 border-b">Author</th>
                                <th class="px-4 py-2 border-b">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr class="border-b border-gray-600">
                                    <td class="px-4 py-2">
                                        <a href="/posts/{{ $post['id'] }}" class="text-blue-500 hover:underline">
                                            <strong>{{ $post['title']}} by {{ $post->author->name }}</strong>
                                        </a>
                                    </td>
                                    <td class="px-4 py-2">{{ $post->author->name }}</td>
                                    <td class="flex px-4 py-2 space-x-2">
                                        <!-- a link to view post -->
                                        <a href="/posts/{{ $post['id'] }}" class="focus:outline-none text-white bg-blue-800 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2">
                                            View
                                        </a>

                                        @can('update', $post)
                                            <a href="posts/{{ $post['id'] }}/edit" class="focus:outline-none text-white bg-green-800 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2">
                                                Edit
                                            </a>
                                        @endcan

                                        @can('delete', $post)
                                            <form action="posts/{{ $post['id'] }}" method="POST">
                                                @method('delete')
                                                @csrf
                                                <button class="focus:outline-none text-white bg-red-800 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2">
                                                    Delete
                                                </button>
                                            </form>
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="mt-4">
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
