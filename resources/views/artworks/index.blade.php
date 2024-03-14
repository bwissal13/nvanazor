<!-- resources/views/artworks/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>All Artworks</h1>
        <a href="{{ route('artworks.create') }}" class="btn btn-primary">Add Artwork</a>
        <hr>
        @foreach ($artworks as $artwork)
            <div>
                <h3>{{ $artwork->title }}</h3>
                <p>Description: {{ $artwork->description }}</p>
                <!-- Add more artwork details as needed -->
                <a href="{{ route('artworks.show', $artwork->id) }}">View</a>
                <a href="{{ route('artworks.edit', $artwork->id) }}">Edit</a>
            </div>
            <hr>
        @endforeach
    </div>
@endsection
