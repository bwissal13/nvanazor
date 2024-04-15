{{-- 
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Artist Profile - {{ $artist->name }}</h1>
        <p>Bio: {{ $artist->bio }}</p>
        <p>External URL: {{ $artist->external_url }}</p>
        

        <!-- Button to add artwork -->
        <a href="{{ route('artworks.create') }}" class="btn btn-primary">Add Artwork</a>

        <!-- Section for displaying artworks associated with the artist -->
        <h2>Artworks</h2>
        @if ($artist->artworks)
            @foreach ($artist->artworks as $artwork)
                <div>
                    <h3>{{ $artwork->title }}</h3>
                    <p>Description: {{ $artwork->description }}</p>
                    <!-- Add more artwork details as needed -->
                </div>
            @endforeach
        @else
            <p>No artworks found for this artist.</p>
        @endif
    </div>
@endsection --}}
{{-- @extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Add Artist Information</h2>
        <form method="post" action="{{ route('artists.store') }}">
            @csrf
            <div class="form-group">
                <label for="bio">Bio:</label>
                <textarea name="bio" id="bio" class="form-control" rows="4">{{ old('bio') }}</textarea>
            </div>
            <div class="form-group">
                <label for="image_url">Image URL:</label>
                <input type="text" name="image_url" id="image_url" class="form-control" value="{{ old('image_url') }}">
            </div>
            <div class="form-group">
                <label for="external_url">External URL:</label>
                <input type="text" name="external_url" id="external_url" class="form-control" value="{{ old('external_url') }}">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection --}}
@extends('layouts.front-profile')
@section('content')


<div class="cs-height_30 cs-height_lg_30"></div>
<h2 class="cs-section_heading cs-style1">Profile</h2>
<div class="cs-height_25 cs-height_lg_25"></div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="cs-form_field_wrap">
                            <div class="cs-form_field cs-white_bg"><strong>Bio:</strong>  {{ $artist->bio }}</div>
                        </div>
                        <div class="cs-height_25 cs-height_lg_25"></div>
                        <div class="cs-form_field_wrap">
                            <div class="cs-form_field cs-white_bg"><strong>Image URL:</strong> {{ $artist->image_url }}</div>
                        </div>
                        <div class="cs-height_25 cs-height_lg_25"></div>
                        <div class="cs-form_field_wrap">
                            <div class="cs-form_field cs-white_bg"><strong>External URL:</strong> {{ $artist->external_url }}</div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="cs-height_0 cs-height_lg_25"></div>
                        <div class="cs-form_field_wrap">
                            <div class="cs-form_field cs-white_bg"><strong>Username:</strong> {{ auth()->user()->name }}</div>
                        </div>
                        <div class="cs-height_25 cs-height_lg_25"></div>
                        <div class="cs-form_field_wrap">
                            <div class="cs-form_field cs-white_bg"><strong>Email:</strong> {{ auth()->user()->email }}</div>
                        </div>
                    </div>
                </div>

   
    <div class="cs-height_100 cs-height_lg_70"></div>
  @endsection