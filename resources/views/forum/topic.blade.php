@extends('dashboard.layout')

@section('content')
    <div class="content-body">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Topics</h4>
                            <div class="d-flex justify-content-end">
                                <a href="{{ route('forum.topic.create') }}" class="btn btn-primary">Add Topics</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($topics as $key => $topic)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>

                                                <td>{{ $topic->name }}</td>
                                                <td>
                                                    <a href="{{ route('forum.edit_topic', $topic->id) }}"
                                                        class="btn btn-primary">Edit</a>
                                                    <form action="{{ route('forum.delete_topic', $topic->id) }}"
                                                        method="POST" style="display: inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger"
                                                            onclick="return confirm('Are you sure you want to delete this topic?')">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="4">No categories found yet</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
