<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="px-6 py-6 overflow-hidden bg-white shadow-xl sm:rounded-lg">
                {{-- <x-welcome /> --}}

                <h1>{{ $user->name }}’s Favourite Books</h1>

                @foreach($user->favouriteBooks() as $book)
                <h2>{{ $book->name }}</h2>
                <div>Authors: {{ $book->authors->implode('name', ', ') }}</div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
