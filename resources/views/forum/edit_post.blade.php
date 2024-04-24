@extends('front.layout')
@section('content')
    <div class="cs-height_90 cs-height_lg_80"></div>
    <section class="cs-page_head cs-bg"
        data-src="https://thememarch.com/demo/html/enfhess-html/enfhess-dark/assets/img/page_head_bg.svg">
        <div class="container">
            <div class="text-center">
                <h1 class="cs-page_title">Edit Post</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/forum" class="cs-btn cs-style1">Forum</a></li>
                </ol>
            </div>
        </div>
    </section>
    <div class="cs-height_100 cs-height_lg_70"></div>
    <div class="container">
        <form action="{{ route('forum.post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="col-lg-12">
                <div class="cs-file_wrap">
                    <div class="cs-file_in">
                        <svg width="46" height="47" viewBox="0 0 46 47" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <!-- SVG code for file upload icon -->
                        </svg>
                        <h3>Drag and drop an image or <span>Upload</span></h3>
                        <p>High-resolution image (jpeg, png, svg)</p>
                    </div>
                    <div class="cs-close_file" title="Close">
                        <svg width="33" height="33" viewBox="0 0 33 33" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <!-- SVG code for close icon -->
                        </svg>
                    </div>
                    <input type="file" class="cs-file" name="image" accept="image/*" />
                    <img src="{{ $post->image_url }}" class="cs-preview" alt="Image" />
                </div>
                <div class="cs-height_25 cs-height_lg_25"></div>

                <div class="cs-height_20 cs-height_lg_20"></div>
            </div>
            <div class="col-lg-6">
                <label for="title" class="cs-form_label">Title</label>
                <div class="cs-form_field_wrap">
                    <input type="text" class="cs-form_field" placeholder="e.g. 'Title'" id="title" name="title"
                        value="{{ $post->title }}" required />
                </div>
                <div class="cs-height_20 cs-height_lg_20"></div>

                <div class="cs-height_20 cs-height_lg_20"></div>
                <label class="cs-form_label">Select Topic</label>
                <div class="cs-form_field_wrap cs-select_arrow">
                    <select class="cs-form_field" name="topic_id">
                        @foreach ($topics as $topic)
                            <option value="{{ $topic->id }}" @if ($topic->id == $post->topic_id) selected @endif>{{ $topic->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="cs-height_20 cs-height_lg_20"></div>
            </div>
            <div class="col-lg-6">
                <label for="content" class="cs-form_label">Post Content</label>
                <div class="cs-form_field_wrap">
                    <textarea cols="30" rows="5" placeholder="e.g. Content" class="cs-form_field" id="content"
                        name="content" required>{{ $post->content }}</textarea>
                </div>
                <div class="cs-height_20 cs-height_lg_20"></div>

                <div class="cs-height_20 cs-height_lg_20"></div>
            </div>
            <div class="col-lg-12">

                <div class="cs-height_30 cs-height_lg_30"></div>
                <button class="cs-btn cs-style1 cs-btn_lg" type="submit">
                    <span>Update</span>
                </button>
            </div>
        </form>
    </div>
    </div>
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

    <div class="cs-height_100 cs-height_lg_70"></div>
@endsection
