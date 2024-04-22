@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $topic->name }}</h1>

        @foreach ($topic->posts as $post)
            <div class="card mb-3">
                <div class="card-body">
                    <p class="card-text">{{ $post->content }}</p>
                    <hr>
                    <h5>Comments</h5>
                    @foreach ($post->comments as $comment)
                        <p>{{ $comment->content }}</p>
                    @endforeach
                    <hr>
                    <form action="{{ route('forum.comment') }}" method="POST">
                        @csrf
                        <input type="hidden" name="post_id" value="{{ $post->id }}">
                        <div class="form-group">
                            <label for="content">Add a Comment</label>
                            <textarea class="form-control" id="content" name="content" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
