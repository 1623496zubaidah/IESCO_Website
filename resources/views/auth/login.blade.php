@extends('frontend.master')

@section('content')


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<div class="container" style="margin:40px!important;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style=" height:550px!important;">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body" style="margin-top:30px!important;">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <div class="form-check" style="margin-left:-150px!important;">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>


                             @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}" style="margin-left:200px!important;color:#A52A2A!important;">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif

                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">

                                <button type="submit" class="btn btn-primary" style="width:350px!important; margin:-50px!important; background:grey!important;border-color:grey!important;">
                                    {{ __('Login') }}
                                </button>

                               
                            </div>
                        </div><br>


<!-- Register buttons -->
  <div class="text-center">
    <p>Not a member ? &nbsp;&nbsp; <a href="{{ route('register') }}" style="color:#A52A2A!important;">Register</a></p>
    <p>or sign up with:</p>
    <a href="{{route('login.facebook')}}" type="button" class="btn btn-primary btn-floating mx-1" style="background:#3B5998!important;border:#3B5998!important;color:white!important;">
      <i class="fa fa-facebook fa-fw" ></i> Facebook
    </a>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href=" {{route('login.google')}}" type="button" class="btn btn-primary btn-floating mx-1" style="background:#dd4b39!important;border:#dd4b39!important; color:white!important;">
      <i class="fa fa-google"></i> &nbsp;&nbsp;&nbsp;Google &nbsp;&nbsp;
    </a>


  </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
