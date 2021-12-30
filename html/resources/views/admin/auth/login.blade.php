@extends('admin.layout')

@section('title', 'Sign In | Admin Visa Survey')

@section('content')

    <div class="container-fluid no-padding h-100">
        <div class="row flex-row h-100 bg-white">
            <div class="col-xl-8 col-lg-6 col-md-5 no-padding">
                <div class="elisyam-bg background-01">
                    <div class="elisyam-overlay overlay-01"></div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-7 my-auto no-padding">
                <div class="authentication-form mx-auto">
                    <div class="logo-centered">
                        <a href="{{ route('admin.sign_in') }}"><img src="{{ asset('assets/img/logo.png') }}" alt="logo"></a>
                    </div>
                    <h3>Sign In</h3>
                    <form method="POST" action="{{ route('admin.sign_in') }}">
                        @csrf
                        <div class="group material-input">
                            <input id="email_input" type="text" name="email" value="{{ old('email') }}" required autofocus>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label for="email_input">Email</label>
                        </div>
                        <div class="group material-input">
                            <input id="password_input" type="password" name="password" required>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label for="password_input">Password</label>
                        </div>
                        <div class="row">
                            <div class="col text-left">
                                <div class="styled-checkbox">
                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="remember">Remember me</label>
                                </div>
                            </div>
                            <div class="col text-right">
                                <a href="#">Forgot Password ?</a>
                            </div>
                        </div>
                        <div class="sign-btn text-center d-flex justify-content-between">
                            <button type="submit" class="btn btn-lg btn-gradient-01">Sign In</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')


@endsection
