@extends('dashboard.layout')

@section('content')
    <div class="content-body">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Posts</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Content</th>
                                            <th>Image URL</th>
                                            <th>Topic</th>
                                            <th>Creator</th>
                                            <th>Action</th>




                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($posts as $key => $Post)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $Post->title }}</td>
                                                <td>{{ $Post->content }}</td>
                                                <td>{{ $Post->image }}</td>
                                                <td>{{ $Post->topic->name }}</td>
                                                <td>{{ $Post->creator->name }}</td>
  <td>
                                                <form action="{{ route('forum.post.delete', $Post->id) }}" method="Post"
                                                    style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('Are you sure you want to delete this post?')">delete</button>
                                                </form>
                                            </td>

                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6">No Posts found yet</td>
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
