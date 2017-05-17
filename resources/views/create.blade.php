@extends('layouts.app')

@section('content')
    <div class="list_container create_container">
        <div class="box_left">
            <a href="/" class="logo p_20">
                <img src="/images/logo-min.png" alt="">
            </a>
        </div>
        <div class="box_right m_right_20 m_left_20 p_50">
            <a href="/" class="logo text_center hide">
                <img src="/images/logo-min.png" alt="">
            </a>
            <h1 class="text_center header_can_cook">
                So you think you can cook?
            </h1>
            <div class="text_center">
                <img src="/images/spatula.png" alt="">
            </div>
            <h2 class="text_center text_uppercase f_size_29">
                <small class="d_block f_size_21 m_top_5">Share your Signature dish and make it to the</small>
                2013 GLAD COOKING CHALLENGE
            </h2>
            <form action="/dishes/store" method="post" class="form_create" enctype="multipart/form-data">

                {{ csrf_field() }}

                <div class="form_group{{ $errors->has('photo') ? ' has_error' : '' }}">
                    <label for="photo" class="control_label">Upload photo of your dish<span class="text_red">*</span></label>
                    <div class="form_control yellow">
                        <input name="photo" type="file" id="photo" value="{{ old('photo') }}">
                    </div>
                    @if ($errors->has('photo')) <span class="help_block">{{ $errors->first('photo') }}</span> @endif
                </div>

                <div class="form_group{{ $errors->has('name') ? ' has_error' : '' }}">
                    <label for="photo" class="control_label">Name of your dish<span class="text_red">*</span></label>
                    <div class="form_control yellow">
                        <input name="name" type="text" id="name" value="{{ old('name') }}">
                    </div>
                    @if ($errors->has('name')) <span class="help_block">{{ $errors->first('name') }}</span> @endif
                </div>

                <div class="form_group{{ $errors->has('description') ? ' has_error' : '' }}">
                    <label for="photo" class="control_label">Why are this dish speciall for you?<span class="text_red">*</span></label>
                    <div class="form_control yellow">
                        <textarea name="description" id="description">{{ old('description') }}</textarea>
                    </div>
                    @if ($errors->has('description')) <span class="help_block">{{ $errors->first('description') }}</span> @endif
                </div>

                <div class="form_group">
                    <label for="photo" class="control_label">Name<span class="text_red">*</span></label>
                    <div class="form_control disabled yellow"><input type="text" value="{{ $user->name }}" disabled></div>
                </div>

                <div class="form_group">
                    <label for="photo" class="control_label">Email<span class="text_red">*</span></label>
                    <div class="form_control disabled yellow"><input type="email" value="{{ $user->email }}" disabled></div>
                </div>

                <div class="form_group">
                    <label for="photo" class="control_label">Phone Number<span class="text_red">*</span></label>
                    <div class="form_control disabled yellow"><input type="text" value="{{ $user->mobile }}" disabled></div>
                </div>

                <div class="form_group">
                    <label for="photo" class="control_label">Country<span class="text_red">*</span></label>
                    <div class="form_control disabled yellow"><input type="text" value="{{ $user->country->name }}" disabled></div>
                </div>

                <div class="d_inline_block w_100">
                    <div class="form_group w_20 pull_left p_right_20">
                        <label for="photo" class="control_label">Age<span class="text_red">*</span></label>
                        <div class="form_control disabled yellow"><input type="text" value="{{ $user->born_at->age }}" disabled></div>
                    </div>
                    <div class="form_group w_80 pull_left">
                        <label class="label_checkbox m_top_28 m_right_30">
                            <input type="checkbox" disabled {{ $user->gender == 'M' ? 'checked' : '' }}>
                            <span class="pull_left m_right_10"></span>
                            Male
                        </label>
                        <label class="label_checkbox">
                            <input type="checkbox" disabled {{ $user->gender == 'F' ? 'checked' : '' }}>
                            <span class="pull_left m_right_10"></span>
                            Female
                        </label>
                    </div>
                </div>

                <div class="form_group m_bottom_20">
                    <label class="label_checkbox">
                        <input type="checkbox" name="terms_and_conditions" {{ old('terms_and_conditions') ? 'checked' : '' }}>
                        <span class="pull_left m_right_5"></span>
                        I agree to <a href="#">Terms and Conditions</a>
                    </label>
                    @if ($errors->has('terms_and_conditions'))<span class="help_block"> {{ $errors->first('terms_and_conditions') }} </span>@endif
                </div>

                <div>

                </div>
                <button type="submit" class="btn btn_red pan">Submit</button>
            </form>
        </div>
    </div>
@endsection
