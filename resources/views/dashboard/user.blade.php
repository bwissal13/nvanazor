@extends('dashboard.layout')
@section('content')
<div class="content-body">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header flex-row">
                        <h4 class="card-title">Recent Bid</h4>
                    </div>
                    <div class="card-body bs-0 bg-transparent p-0">
                        <div class="bid-table">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th> <!-- Changed to "#" for numbering -->
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $key => $user)
                                        <tr>
                                            <td>{{ $key + 1 }}</td> <!-- Start numbering from 1 -->
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->roles->first()->name ?? '' }}</td> <!-- Fetch the first role's name -->
                                            <td>
                                                <button class="btn btn-primary">edit</button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
