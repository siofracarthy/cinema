@extends('layouts.app')

@section('content')
    <h3 class="text-center">Create Film</h3>
    <form action="{{ route('films.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Film Title</label>
            <input type="text" name="title" id="title" class="
            form-control {{ $errors->has('title') ? 'is-invalid' : '' }}"
            value="{{ old('title') }}" placeholder="Enter Title">
            @if($errors->has('title'))
                <span class="invalid-feedback">
                    {{ $errors->first('title') }}
                </span>
            @endif
        </div>
        <div class="form-group">
            <label for="description">Film Description</label>
            <textarea name="description" id="description" rows="4" class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" placeholder="Enter Film Description">{{ old('description') }}</textarea>
            @if($errors->has('description')) {{-- <-check if we have a validation error --}}
                <span class="invalid-feedback">
                    {{ $errors->first('description') }} {{-- <- Display the First validation error --}}
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="run_time">Film Run Time</label>
            <input type="text" name="run_time" id="run_time" class="form-control {{ $errors->has('run_time') ? 'is-invalid' : '' }}" placeholder="Enter Film Run Time">{{ old('run_time') }}</textarea>
            @if($errors->has('run_time')) {{-- <-check if we have a validation error --}}
                <span class="invalid-feedback">
                    {{ $errors->first('run_time') }} {{-- <- Display the First validation error --}}
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="release_date">Release Date</label>
            <input type="date" name="release_date" id="release_date" class="form-control {{ $errors->has('release_date') ? 'is-invalid' : '' }}" placeholder="Enter Release Date">{{ old('release_date') }}</textarea>
            @if($errors->has('release_date')) {{-- <-check if we have a validation error --}}
                <span class="invalid-feedback">
                    {{ $errors->first('release_date') }} {{-- <- Display the First validation error --}}
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="age_rating">Age Rating</label>
            <input type="number" name="age_rating" id="age_rating" class="form-control {{ $errors->has('age_rating') ? 'is-invalid' : '' }}" placeholder="Enter Age Rating">{{ old('age_rating') }}</textarea>
            @if($errors->has('age_rating')) {{-- <-check if we have a validation error --}}
                <span class="invalid-feedback">
                    {{ $errors->first('age_rating') }} {{-- <- Display the First validation error --}}
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="original_language">Original Language</label>
            <input type="text" name="original_language" id="original_language" class="form-control {{ $errors->has('original_language') ? 'is-invalid' : '' }}" placeholder="Enter Original Language">{{ old('original_language') }}</textarea>
            @if($errors->has('original_language')) {{-- <-check if we have a validation error --}}
                <span class="invalid-feedback">
                    {{ $errors->first('original_language') }} {{-- <- Display the First validation error --}}
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="director">Director</label>
            <input type="text" name="director" id="director" class="form-control {{ $errors->has('director') ? 'is-invalid' : '' }}" placeholder="Enter Director's name">{{ old('director') }}</textarea>
            @if($errors->has('director')) {{-- <-check if we have a validation error --}}
                <span class="invalid-feedback">
                    {{ $errors->first('director') }} {{-- <- Display the First validation error --}}
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="film_image">Film Image</label>
            <input type="image" name="film_image" id="film_image" class="form-control {{ $errors->has('film_image') ? 'is-invalid' : '' }}" placeholder="Enter film image">{{ old('film_image') }}</textarea>
            @if($errors->has('film_image')) {{-- <-check if we have a validation error --}}
                <span class="invalid-feedback">
                    {{ $errors->first('film_image') }} {{-- <- Display the First validation error --}}
                </span>
            @endif
        </div>


        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection
