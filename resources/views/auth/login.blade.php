@extends('layouts.app')

@section('content')
    <div class="login_container">
        <div class="box_left">
            <div class="d_inline_block">
                <a href="/" class="logo p_20">
                    <img src="/images/logo.png" alt="">
                </a>
                <form method="POST" class="login_form form_horizontal m_bottom_20" novalidate action="{{ route('login') }}">
                    <div class="p_10">
                        {{ csrf_field() }}
                        @if ($errors->has('email'))
                            <span class="help_block text_center m_bottom_10"><strong>{{ $errors->first('email') }}</strong></span>
                        @endif
                        <div class="form_group m_top_0">
                            <label for="email" class="form_label"> <strong>Username:</strong></label>
                            <div class="form_control">
                                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
                            </div>
                        </div>
                        <div class="form_group">
                            <label for="password" class="form_label"> <strong>Password:</strong></label>
                            <div class="form_control">
                                <input id="password" type="password" name="password" required>
                            </div>
                        </div>
                    </div>
                    <div class="btn-box p_10">
                        <button class="btn btn_red" type="submit">ENTER</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="box_right">
            <img src="/images/chef-shadow.png" alt="" class="m_0_auto">
        </div>
    </div>
@endsection
