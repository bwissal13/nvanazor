@extends('dashboard.layout')

@section('content')
<div class="content-body">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Artworks</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Image URL</th> 
                                        <th>Price</th>
                                        <th>Artist</th>
                                       
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($artworks as $key => $artwork)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $artwork->title }}</td>
                                        <td>{{ $artwork->description }}</td>
                                        <td>{{ $artwork->image_url }}</td>
                                        <td>{{ $artwork->price }}</td>
                                        <td>{{ $artwork->artist_name }}</td>
                                        

                                        <td>
                                            <button class="btn btn-primary">Edit</button>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="6">No artworks found yet</td>
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
