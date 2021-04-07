@extends('auth.app')

@section('content')


    <!-- Login 19 start -->
    <div class="login-19" style="background-color: #ccc;font-size: 1.6em">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="login-inner-form">
                        <div class="logo-2">
                            <h4>Reset Password</h4>
                        </div>
                        <div class="details">
                            <h3>Reset Your Password</h3>
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf
                                <input type="hidden" name="token" value="{{ $token }}">
                                <div class="form-group form-box">
                                    <input type="email" name="email" class="input-text" placeholder="Email Address" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                                    <i class="flaticon-mail-2"></i>
                                </div>
                                @error('email')

                                <small>{{ $message }}</small>

                                @enderror

                                <div class="form-group form-box">
                                    <input type="password" name="password" class="input-text" placeholder="Password"  required autocomplete="new-password">
                                    <i class="flaticon-password"></i>
                                </div>
                                @error('password')

                                <small>{{ $message }}</small>

                                @enderror

                                <div class="form-group form-box">
                                    <input type="password" name="password_confirmation" class="input-text" placeholder="Confirm Password"  required autocomplete="new-password">
                                    <i class="flaticon-password"></i>
                                </div>



                                <button type="submit" class="btn-md btn-theme btn-block">Submit</button>

                                <div class="extra-login">
                                    <span>Or Login</span>
                                </div>

                            </form>
                            <button type="submit" class="btn-md btn-theme btn-block"><a href="{{route('login')}}">Login Here</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login 19 end -->























{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Reset Password') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('password.update') }}">--}}
{{--                        @csrf--}}

{{--                        <input type="hidden" name="token" value="{{ $token }}">--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Reset Password') }}--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
@endsection
