<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <!-- Page Content -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


            <x-alert-success>
                {{ session('success') }}
            </x-alert-success>

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <td rowspan="8">
                                    <!-- use the asset function, access the file $film->film_image in the folder storage/images -->
                                    <img src="{{ asset($film->film_image) }}" alt="{{ $film->title }}" width="300">
                                </td>
                            </tr>
                            <tr>
                                <td class="font-bold ">Title </td>
                                <td>{{ $film->title }}</td>
                            </tr>

                            <tr>
                                <td class="font-bold">Description </td>
                                <td>{{ $film->description }}</td>
                            </tr>

                            <tr>
                                <td class="font-bold">Run Time </td>
                                <td>{{ $film->run_time }}</td>
                            </tr>

                            <tr>
                                <td class="font-bold">Release Date </td>
                                <td>{{ $film->release_date }}</td>
                            </tr>

                            <tr>
                                <td class="font-bold">Age Rating </td>
                                <td>{{ $film->age_rating }}</td>
                            </tr>

                            <tr>
                                <td class="font-bold">Director </td>
                                <td>{{ $film->director }}</td>
                            </tr>


                            <tr>
                                <td class="font-bold">Language </td>
                                <td>{{ $film->original_language }}</td>
                            </tr>

                            <tr>
                                <td class="font-bold">Company Name </td>
                                <td>{{ $film->company->name }}</td>
                            </tr>

                            <tr>
                                <td class="font-bold">Company Email </td>
                                <td>{{ $film->company->email }}</td>
                            </tr>

                            <tr>
                                <td class="font-bold">Company Phone Number </td>
                                <td>{{ $film->company->phone_number }}</td>
                            </tr>



                        </tbody>
                    </table>
                    <x-primary-button><a href="{{ route('admin.films.edit', $film) }}">Edit</a> </x-primary-button>

                    <form action="{{ route('admin.films.destroy', $film) }}" method="post">
                        @method('delete')
                        @csrf
                        <x-primary-button
                            onclick="return confirm('Are you sure you want to delete?')">Delete</x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
