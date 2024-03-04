@extends('layouts.app')

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
@endsection
