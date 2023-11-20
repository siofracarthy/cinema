<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Film') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <form action="{{ route('films.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <x-text-input
                        type="text"
                        name="title"
                        field="title"
                        placeholder="Title.."
                        class="w-full"
                        autocomplete="off"
                        :value="@old('title')"></x-text-input>

                    <!-- I created a new component called textarea, you will need to do the same to using the x-textarea component -->
                    <x-textarea
                        name="description"
                        rows="10"
                        field="description"
                        placeholder="Description.." style="margin-bottom: 10px;"
                        class="w-full mt-2"
                        :value="@old('description')">
                    </x-textarea>

                    <x-text-input
                    type="text"
                    name="original_language"
                    field="original_language"
                    placeholder="Language.." style="margin-bottom: 10px;"
                    class="w-full"
                    :value="@old('original_language')">
                    </x-text-input>

                    <x-text-input
                    type="number"
                    name="age_rating"
                    field="age_rating"
                    placeholder="Age Rating.." style="margin-bottom: 10px;"
                    class="w-full"
                    :value="@old('age_rating')">
                    </x-text-input>

                    <x-text-input
                    type="number"
                    name="run_time"
                    field="run_time"
                    placeholder="Run Time.." style="margin-bottom: 10px;"
                    class="w-full"
                    :value="@old('run_time')">
                    </x-text-input>
                    <h1 style="margin-left: 3px;">Release Date</h1>


                    <x-text-input
                    type="date"
                    name="release_date"
                    field="release_date"
                    placeholder="Release Date.." style="margin-bottom: 10px;"
                    class="w-full"
                    :value="@old('release_date')">
                    </x-text-input>

                    <x-text-input
                    type="text"
                    name="director"
                    field="director"
                    placeholder="Director.." style="margin-bottom: 10px;"
                    class="w-full"
                    :value="@old('director')">
                    </x-text-input>


                    <x-file-input
                    type="file"
                    name="film_image"
                    placeholder="Film"
                    class="w-full mt-6"
                    field="film_image"
                    :value="@old('film_image')">>
                    </x-file-input>

                    <x-primary-button class="mt-6">Save Film</x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
