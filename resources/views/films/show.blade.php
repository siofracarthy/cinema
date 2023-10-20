@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>View Film</h1>

        <table class="table table-hover">
            <tbody>
                <tr>
                    <td><strong> Title </strong></td>
                    <td>{{ $film->title }}</td>
                </tr>

                <tr>
                    <td><strong> Description </strong></td>
                    <td>{{ $film->description }}</td>
                </tr>
                <tr>
                    <td><strong> Run Time </strong></td>
                    <td>{{ $film->run_time }}</td>
                </tr>
                <tr>
                    <td><strong> Release Date </strong></td>
                    <td>{{ $film->release_date }}</td>
                </tr>
                <td><strong> Age Rating </strong></td>
                <td>{{ $film->age_rating }}</td>
                <tr>
                    <td><strong> Original Language </strong></td>
                    <td>{{ $film->original_language }}</td>
                </tr>
                <tr>
                    <td><strong> Director </strong></td>
                    <td>{{ $film->director }}</td>
                </tr>

                <tr>
                    <td><strong> Film Image </strong></td>
                    <td>{{ $film->film_image }}</td>
                </tr>


            </tbody>
        </table>
    </div>
@endsection
