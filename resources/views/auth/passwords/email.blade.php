@extends('auth.app')

@section('content')

    <div class="login-19" style="background-color: #ccc;font-size: 1.6em">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="login-inner-form">
                        <div class="logo-2">
                            <h4>{{ __('Reset Password') }}</h4>
                        </div>
                        <div class="details">
                            @if(Session::has('message'))
                                Session::get('message')
                            @endif
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                            <h3>Reset Your Password</h3>
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="form-group form-box">
                                    <input type="email" name="email" class="input-text" placeholder="Email Address">
                                    <i class="flaticon-mail-2"></i>
                                </div>
                                @error('email')
                                <small>{{ $message }}</small>
                                @enderror


                                <div class="extra-login">
                                    <span>  </span>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn-md btn-theme btn-block">Reset</button>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>








{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Reset Password') }}</div>--}}

{{--                <div class="card-body">--}}


{{--                    <form method="POST" action="{{ route('password.email') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Send Password Reset Link') }}--}}
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
