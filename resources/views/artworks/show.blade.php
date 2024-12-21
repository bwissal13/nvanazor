<!-- resources/views/artworks/show.blade.php -->

@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Artwork Details - {{ $artwork->title }}</h1>
        <div>
            <p><strong>Title:</strong> {{ $artwork->title }}</p>
            <p><strong>Description:</strong> {{ $artwork->description }}</p>
            <p><strong>Image URL:</strong> {{ $artwork->image_url }}</p>
            <p><strong>Price:</strong> ${{ $artwork->price }}</p>
            <!-- Add more artwork details as needed -->
        </div>
        <div>
            <a href="{{ route('artworks.edit', $artwork->id) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('artworks.destroy', $artwork->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this artwork?')">Delete</button>
            </form>
        </div>
    </div>
@endsection
