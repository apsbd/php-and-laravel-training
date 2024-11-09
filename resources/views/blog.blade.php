<x-layout>
    <x-slot:heading>
        Blog
    </x-slot:heading>

    <h2 class="font-bold text-lg">{{ $blog['title'] }}</h2>

    <p>
        {{ $blog['body'] }}
    </p>
</x-layout>
