{{-- 

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create New Artwork</h1>
        <form method="POST" action="{{ route('artworks.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }}</textarea>
            </div>

            <div class="form-group">
                <label for="image_url">Image URL</label>
                <input type="text" class="form-control" id="image_url" name="image_url" value="{{ old('image_url') }}">
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ old('price') }}" required>
            </div>

            <!-- Add more fields as needed -->

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
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

@endsection --}}
@extends('layouts.front-profile')
@section('content')
   
              <div class="cs-height_20 cs-height_lg_20"></div>
            </div>
            <div class="col-lg-6">
              <label for="title" class="cs-form_label">Title</label>
              <div class="cs-form_field_wrap">
                <input
                  type="text"
                  class="cs-form_field"
                  placeholder="e. g. 'NFT Art'"
                  id="title" name="title" value="{{ old('title') }}" required
                />
              </div>
              <div class="cs-height_20 cs-height_lg_20"></div>
              <label for="price" class="cs-form_label" required>Item price</label>
              <div class="cs-form_field_wrap">
                <input
                  type="text"
                  class="cs-form_field"
                  placeholder="e. g. 20$"
                  id="price" name="price" value="{{ old('price') }}"
                />
              </div>
              <div class="cs-height_20 cs-height_lg_20"></div>
              <label class="cs-form_label">Select collection</label>
              <div class="cs-form_field_wrap cs-select_arrow">
                <select class="cs-form_field">
                  <option value="1">e. g. NFT music</option>
                  <option value="2">e. g. NFT art</option>
                  <option value="3">e. g. NFT video</option>
                </select>
              </div>
              <div class="cs-height_20 cs-height_lg_20"></div>
            </div>
            <div class="col-lg-6">
              <label for="description" class="cs-form_label">Description</label>
              <div class="cs-form_field_wrap">
                <textarea
                  cols="30"
                  rows="5"
                  placeholder="e. g. Item description"
                  class="cs-form_field"
                  id="description" name="description"
                >{{ old('description') }}</textarea>
              </div>
              <div class="cs-height_20 cs-height_lg_20"></div>
           
              <div class="cs-height_20 cs-height_lg_20"></div>
            </div>
            <div class="col-lg-12">
            
              <div class="cs-height_30 cs-height_lg_30"></div>
              <button class="cs-btn cs-style1 cs-btn_lg" type="submit">
                <span>Submit Item</span>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="cs-height_100 cs-height_lg_70"></div>

@endsection