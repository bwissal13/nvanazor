@extends('layouts.front-profile')

@section('content')
    <div class="cs-height_30 cs-height_lg_30"></div>
    <h2 class="cs-section_heading cs-style1">Edit Profile</h2>
    <div class="cs-height_25 cs-height_lg_25"></div>
    <div class="row">
        <div class="col-lg-12">
            <form method="post" action="{{ route('artists.updateProfile', ['id' => $artist->id]) }}">
                @csrf
                @method('PUT')
                <div class="col-lg-6">
                <div class="cs-form_field_wrap">
                    <textarea name="bio" class="cs-form_field cs-white_bg" placeholder="Your bio..." rows="5">{{ $artist->bio }}</textarea>
                </div>
                <div class="cs-height_25 cs-height_lg_25"></div>
                <div class="cs-form_field_wrap">
                    <input type="text" name="image_url" class="cs-form_field cs-white_bg" placeholder="Image URL" value="{{ $artist->image_url }}">
                </div>
                <div class="cs-height_25 cs-height_lg_25"></div>
                <div class="cs-form_field_wrap">
                    <input type="text" name="external_url" class="cs-form_field cs-white_bg" placeholder="External URL" value="{{ $artist->external_url }}">
                </div>
            </div>
                <div class="cs-height_40 cs-height_lg_5"></div>
                <button type="submit" class="cs-btn cs-style1 cs-btn_lg"><span>Update</span></button>
            </form>
            <form method="post" action="{{ route('users.update', ['user' => $user_id]) }}">
                @csrf
                @method('PUT')
                <div class="col-lg-6">
                    <div class="cs-height_0 cs-height_lg_25"></div>
                    <div class="cs-form_field_wrap">
                        <input type="text" name="username" class="cs-form_field cs-white_bg" placeholder="Username" value="{{ auth()->user()->name }}" readonly>
                    </div>
                    <div class="cs-height_25 cs-height_lg_25"></div>
                    <div class="cs-form_field_wrap">
                        <input type="email" name="email" class="cs-form_field cs-white_bg" placeholder="Email" value="{{ auth()->user()->email }}" readonly>
                    </div>
                </div>
                <div class="cs-height_40 cs-height_lg_5"></div>
                <button type="submit" class="cs-btn cs-style1 cs-btn_lg"><span>Update</span></button>
            </form>
        </div>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@endsection
