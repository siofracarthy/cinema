<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Book') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <!-- The route is films.update, this route defined in web.php calls FilmController:update() function -->
                <form action="{{ route('admin.films.update', $book) }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf

                <h1 style="margin-left: 3px;">Title</h1>

                <x-text-input
                    type="text"
                    name="title"
                    field="title"
                    placeholder="Title"
                    class="w-full"
                    :value="@old('title', $film->title)">
                </x-text-input>

                <h1 style="margin-left: 3px;">Description</h1>

                <x-textarea
                    name="description"
                    rows="10"
                    field="description"
                    placeholder="Description..."
                    class="w-full mt-6"
                    :value="@old('description', $film->description)">
                </x-textarea>


                <h1 style="margin-left: 3px;">Language</h1>

                <x-text-input
                type="text"
                name="original_language"
                field="original_language"
                placeholder="Language" style="margin-bottom: 20px;"
                class="w-full"
                :value="@old('original_language ', $film->original_language)">
                </x-text-input>

                <h1 style="margin-left: 3px;">Age Rating</h1>

                <x-text-input
                type="text"
                name="age_rating"
                field="age_rating"
                placeholder="Age Rating" style="margin-bottom: 20px;"
                class="w-full"
                :value="@old('age_rating ', $film->age_rating)">
                </x-text-input>


                <h1 style="margin-left: 3px;">Run Time</h1>

                <x-text-input
                type="number"
                name="run_time"
                field="run_time"
                placeholder="Run Time.." style="margin-bottom: 10px;"
                class="w-full"
                :value="@old('run_time', $film->run_time)">
                </x-text-input>


                <h1 style="margin-left: 3px;">Release Date</h1>

                <x-text-input
                type="date"
                name="release_date"
                field="release_date"
                placeholder="Release Date.." style="margin-bottom: 10px;"
                class="w-full"
                :value="@old('release_date', $film->release_date)">
                </x-text-input>

                <h1 style="margin-left: 3px;">Director</h1>

                <x-text-input
                type="text"
                name="director"
                field="director"
                placeholder="Director" style="margin-bottom: 20px;"
                class="w-full"
                :value="@old('director ', $film->director)">
                </x-text-input>

                <h1 style="margin-left: 3px;">Film Image</h1>

                <x-file-input
                    type="file"
                    name="film_image"
                    placeholder="Film"
                    class="w-full mt-6"
                    field="film_image">
                </x-file-input>

                <div class="mt-6">
                    <x-select-company name="company_id" :companies="$companies" :selected="old('company_id')"/>
                </div>


                <x-primary-button class="mt-6">Save Book</x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
