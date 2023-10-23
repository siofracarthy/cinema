
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <!-- Page Content -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                    <table class="table table-hover">
                        <tbody>
                          <tr>
                            <td rowspan="6">
                                <!-- use the asset function, access the file $book->book_image in the folder storage/images -->
                                <img src="{{asset('storage/images/' . $film->film_image) }}" width="150" />
                            </td>
                            </tr>
                            <tr>
                                <td class="font-bold ">Title  </td>
                                <td>{{ $film->title }}</td>
                            </tr>

                            <tr>
                                <td class="font-bold">Description </td>
                                <td>{{ $film->description }}</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
