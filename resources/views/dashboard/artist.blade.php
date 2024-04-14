@extends('dashboard.layout')

@section('content')
<div class="content-body">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Artists</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Bio</th>
                                        <th>Image URL</th>
                                        <th>External URL</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($artists as $key => $artist)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $artist->name ?? 'Not yet completed' }}</td>
                                        <td>{{ $artist->bio ?? 'Not yet completed' }}</td>
                                        <td>{{ $artist->image_url ?? 'Not yet completed' }}</td>
                                        <td>{{ $artist->external_url ?? 'Not yet completed' }}</td>
                                        <td>
                                            <button class="btn btn-primary">Edit</button>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="6">No artists found yet</td>
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
