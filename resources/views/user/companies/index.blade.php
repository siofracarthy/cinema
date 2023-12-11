<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Companies') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- alert-success is a component I created to display a success message that may be sent from the controller.
            For example, when a comapny is deleted, a message like "Company Deleted Successfully" will be displayed -->
            <x-alert-success>
                {{ session('success') }}
            </x-alert-success>

            @forelse ($companies as $company)
                <x-card>

                        <a href="{{ route('user.companies.show', $company) }}" class="font-bold text-2xl">{{ $company->name }}</a>

                        <p class="mt-2 text-gray-700">
                            <span class="font-bold">ID:</span> {{ $company->id }}
                        </p>
                        <p class="mt-2 text-gray-700">
                            <span class="font-bold">Name:</span> {{ $company->name }}
                        </p>
                        <p class="mt-2 text-gray-700">
                            <span class="font-bold">Email:</span> {{ $company->email }}
                        </p>
                        <p class="mt-2 text-gray-700">
                            <span class="font-bold">Phone Number:</span> {{ $company->phone_number }}
                        </p>

                </x-card>
            @empty
                <p>No Companies</p>
            @endforelse

        </div>
    </div>
</x-app-layout>


