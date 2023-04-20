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

                <h1>{{ $user->name }}’s Friends {{ $user->friends->count() }}</h1>

                @foreach($user->friends as $friend)
                <h2>{{ $friend->name }} </h2>
                <ul class="list-disc pl-15">
                    @foreach($friend->favouriteBooks() as $book)
                    <li>{{ $book->name  }}</li>
                    @endforeach
                </ul>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
