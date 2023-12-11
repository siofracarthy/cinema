<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $company->name }}
        </h2>
    </x-slot>

    <!-- Page Content -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <h3 class="font-bold text-2xl mb-4">Company Details</h3>
            <p class="text-gray-700"><span class="font-bold">ID:</span> {{ $company->id }}</p>
            <p class="text-gray-700"><span class="font-bold">Name:</span> {{ $company->name }}</p>
            <p class="text-gray-700"><span class="font-bold">Email:</span> {{ $company->email }}</p>

            <h3 class="font-bold text-2xl mt-6 mb-4">All Films By {{ $company->name }}</h3>

            @forelse ($films as $film)
                <x-card>
                    <a href="{{ route('admin.films.show', $film) }}" class="font-bold text-2xl"> {{ $film->title }}</a>

                </x-card>



            @empty
                <p>No Films for this Company</p>
            @endforelse

        </div>
    </div>
</x-app-layout>
