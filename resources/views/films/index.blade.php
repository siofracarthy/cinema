@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>All Films</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($films as $film)
                    <tr>
                        <td> <a href="{{ route('films.show', $film) }}">{{ $film->title}}</a> </td>
                        <td>{{ $film->description }}</td>
                        <td>
                            @if ($film->film_image)
                            <img src="{{ $film->film_image }}"
                            alt="{{ $film->title }}" width="100">
                                @else
                                 No Image
                                @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

