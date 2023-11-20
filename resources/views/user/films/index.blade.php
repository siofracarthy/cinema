<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Films') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <x-alert-success>
                {{ session('success') }}
            </x-alert-success>

                    <x-primary-button><a href="{{ route('user.films.create') }}" class="btn-link btn-lg mb-2">Add a Film</a></x-primary-button>
                    @forelse ($films as $film)
                        <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                            <b class="font-bold text-2xl">
                               <a href="{{ route('user.films.show', $film) }}"> {{ $film->title }} </a>
                            </b>
                            <p class="mt-2">
                                {{ $film->description }}
                                @if ($film->film_image)
                                    <img src="{{ asset($film->film_image) }}" alt="{{ $film->title }}" width="100">
                                @else
                                    No Image
                                @endif
                            </p>

                        </div>
                    @empty
                        <p>No Films</p>
                    @endforelse

        </div>
    </div>
</x-app-layout>
