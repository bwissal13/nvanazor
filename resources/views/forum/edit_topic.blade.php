@extends('dashboard.layout')

@section('content')
<div class="content-body">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Topic</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('forum.update_topic', $topic->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="name" class="form-label">Topic Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter topic name" value="{{ $topic->name }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Update Topic</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
