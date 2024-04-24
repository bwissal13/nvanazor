
@extends('dashboard.layout')

@section('content')
<div class="content-body">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add Topic</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('forum.topic.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Topic Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Topic name">
                            </div>
                            <button type="submit" class="btn btn-primary">Add Topic</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
