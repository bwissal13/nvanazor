@extends('layouts.front-profile')
@section('content')

<div class="cs-height_30 cs-height_lg_30"></div>
<h2 class="cs-section_heading cs-style1">Profile Info</h2>
<div class="cs-height_25 cs-height_lg_25"></div>
<form class="row">
    <div class="col-lg-6">
        <div class="cs-form_field_wrap">
            <input type="text" class="cs-form_field cs-white_bg" placeholder="e. g. ‘Edward Figaro’">
        </div>
        <div class="cs-height_25 cs-height_lg_25"></div>
        <div class="cs-form_field_wrap">
            <input type="text" class="cs-form_field cs-white_bg" placeholder="e. g. ‘Edward Figaro’">
        </div>
        <div class="cs-height_25 cs-height_lg_25"></div>
        <div class="cs-form_field_wrap">
            <textarea cols="30" rows="5" placeholder="Your bio..." class="cs-form_field cs-white_bg"></textarea>
        </div>
        <div class="cs-height_20 cs-height_lg_20"></div>
        <div class="cs-edit_profile">
            <div class="cs-edit_profile_img"><img src="../assets/img/avatar/avatar_29.png" alt=""></div>
            <div class="cs-edit_profile_right">
                <div class="cs-edit_profile_btns">
                    <a href="#" class="cs-upload_btn">Upload</a>
                    <span class="cs-delete_btn"><i class="far fa-trash-alt"></i> Delete</span>
                </div>
                <p>Images must be .png or .jpg format. Min size 200x200px (avatar)</p>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="cs-height_0 cs-height_lg_25"></div>
        <div class="cs-form_field_wrap">
            <input type="text" class="cs-form_field cs-white_bg" placeholder="Username">
        </div>
        <div class="cs-height_25 cs-height_lg_25"></div>
        <div class="cs-form_field_wrap">
            <input type="text" class="cs-form_field cs-white_bg" placeholder="Custom Url">
        </div>
        <div class="cs-height_25 cs-height_lg_25"></div>
        <span class="cs-btn cs-style2 cs-btn_lg w-100">
            <span class="text-left">
                <i class="fab fa-facebook-f"></i>
                <span>Facebook</span>
                <input type="text" value="www.facebook.com/username">
            </span>
        </span>
        <div class="cs-height_25 cs-height_lg_25"></div>
        <span class="cs-btn cs-style2 cs-btn_lg w-100">
            <span class="text-left">
                <i class="fab fa-twitter"></i>
                <span>Twitter</span>
                <input type="text" value="www.facebook.com/username">
            </span>
        </span>
        <div class="cs-height_25 cs-height_lg_25"></div>
        <span class="cs-btn cs-style2 cs-btn_lg w-100">
            <span class="text-left">
                <i class="fab fa-linkedin-in"></i>
                <span>Linkedin</span>
                <input type="text" value="www.facebook.com/username">
            </span>
        </span>
        <div class="cs-height_25 cs-height_lg_25"></div>
    </div>
    <div class="col-lg-12">
        <div class="cs-height_40 cs-height_lg_5"></div>
        <button class="cs-btn cs-style1 cs-btn_lg"><span>Update Profile</span></button>
    </div>
</form>
@endsection