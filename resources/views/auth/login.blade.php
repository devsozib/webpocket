@extends('frontend.layouts.main')
@section('content')
    <div class="content-wrapper">
        <section class="Login-wrap ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                        <div class="login-form-wrap">
                            <div class="login-header">
                                <h3>Login Here</h3>
                                <p>Welcome to Pocket!! Login To Your Account</p>
                            </div>
                            <div class="login-form">
                                <div class="login-body">
                                    @error('password')
                                        <span class="text-danger">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    @error('email')
                                        <span class="text-danger">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <form class="form-wrap" method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <input id="text" class="@error('email') is-invalid @enderror"
                                                        name="email" type="email" placeholder="Email Address"
                                                        value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <input id="pwd" class="@error('password') is-invalid @enderror"
                                                        name="password" required autocomplete="current-password"
                                                        type="password" placeholder="Password">
                                                </div>

                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-6 mb-3">
                                                <div class="checkbox style3">
                                                    <input type="checkbox" name="remember" id="remember"
                                                        {{ old('remember') ? 'checked' : '' }} id="test_1">
                                                    <label for="test_1"> Remember Me
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-end mb-20">
                                                @if (Route::has('password.request'))
                                                    <a href="{{ route('password.request') }}" class="link style1">Forgot
                                                        Password?</a>
                                                @endif
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <button type="submit" class="btn style1"> Login Now </button>
                                                </div>
                                            </div>
                                            {{-- <div class="col-md-12 text-center">
                                                <p class="mb-0">Don’t Have an Account? <a class="link style1"
                                                        href="{{ route('register') }}">Create One</a>
                                                </p>
                                            </div> --}}
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
