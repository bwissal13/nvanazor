@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Artist Profile - {{ $artist->name }}</h1>
        <p>Bio: {{ $artist->bio }}</p>
        <!-- Add more artist details as needed -->

        <!-- Add section for displaying artworks associated with the artist -->
        <h2>Artworks</h2>
        @foreach ($artist->artworks as $artwork)
            <div>
                <h3>{{ $artwork->title }}</h3>
                <p>{{ $artwork->description }}</p>
                <!-- Add more artwork details as needed -->
            </div>
        @endforeach
    </div>
@endsection
