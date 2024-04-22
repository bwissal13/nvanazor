@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add New Topic</h1>
        <form action="{{ route('forum.topic.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Topic Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Topic</button>
        </form>
    </div>
@endsection
