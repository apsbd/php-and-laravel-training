<x-layout>
    <x-slot:heading>
        Blogs
    </x-slot:heading>

    <ul>
        @foreach ($blogs as $blog)
            <li>
                <a href="/blogs/{{ $blog['id'] }}" class="text-blue-500 hover:underline">
                    <strong>{{ $blog['title'] }}</strong>
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
