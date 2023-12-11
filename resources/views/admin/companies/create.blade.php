<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Company') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <form action="{{ route('films.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <x-text-input
                        type="text"
                        name="name"
                        field="name"
                        placeholder="Name.."
                        class="w-full"
                        autocomplete="off"
                        :value="@old('name')"></x-text-input>

                    <!-- I created a new component called textarea, you will need to do the same to using the x-textarea component -->



                    <div class="mt-6">
                        <x-select-company name="company_id" :companies="$companies" :selected="old('company_id')"/>
                    </div>

                    <x-primary-button class="mt-6">Save Company</x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
