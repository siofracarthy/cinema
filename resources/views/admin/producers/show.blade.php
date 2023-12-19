<!-- resources/views/admin/publishers/show.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $producer->name }} - Films by this Producer
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Display publisher details -->

            <h3 class="font-bold text-2xl mb-4">Producer Details</h3>
            <p class="text-gray-700"><span class="font-bold">ID:</span> {{ $producer->id }}</p>
            <p class="text-gray-700"><span class="font-bold">Name:</span> {{ $producer->name }}</p>
            <p class="text-gray-700"><span class="font-bold">Address:</span> {{ $producer->address }}</p>

            <!-- Display books for the publisher -->

            <h3 class="font-bold text-2xl mt-6 mb-4">Films by {{ $producer->name }}</h3>

            @forelse ($films as $film)
                <x-card>
                     <a href="{{ route('admin.films.show', $film) }}" class="font-bold text-2xl">{{ $film->title }}</a>

                </x-card>
            @empty
                <p>No films for this Producer</p>
            @endforelse

        </div>
    </div>
</x-app-layout>
