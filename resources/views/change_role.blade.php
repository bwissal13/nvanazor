
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Change User Role') }}</div>

                    <div class="card-body">
                        <form method="post" action="{{ route('change-role') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="user_id" class="form-label">Select User:</label>
                                <select name="user_id" id="user_id" class="form-select">
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="role" class="form-label">Select Role:</label>
                                <select name="role" id="role" class="form-select">
                                    @foreach ($allRoles as $role)
                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Change Role</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
