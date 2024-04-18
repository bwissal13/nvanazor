@extends('dashboard.layout')

@section('content')
<div class="content-body">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Categories</h4>
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('categories.create') }}" class="btn btn-primary">Add Category</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($categories as $key => $category)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>
                                            @if($category->image)
                                                <img src="{{ asset('storage/category_images/' . $category->image) }}" alt="{{ $category->name }}" style="max-width: 100px;">
                                            @else
                                                No image
                                            @endif
                                        </td>
                                        <td>{{ $category->name }}</td>
                                        <td>
                                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary">Edit</a>
                                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
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
