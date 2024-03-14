{{-- @extends('layouts.app')

@section('content') --}}
    {{-- <div class="container">
        <h1>Artist Profile - {{ $artist->name }}</h1>
        <p>Bio: {{ $artist->image_url }}</p>
        <p>Bio: {{ $artist->external_url }}</p> --}}
        <!-- Add more artist details as needed -->

        <!-- Add section for displaying artworks associated with the artist -->
        {{-- <h2>Artworks</h2>
        @foreach ($artist->artworks as $artwork)
            <div>
                <h3>{{ $artwork->title }}</h3>
                <p>{{ $artwork->description }}</p>
                <!-- Add more artwork details as needed -->
            </div>
        @endforeach --}}
    {{-- </div>
@endsection --}}
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
@endsection
