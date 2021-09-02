@extends('layouts.front', ['class' => 'bg-default'])

@section('title', 'Halaman Login')

@section('content')

    <div class="fluid-container py-5" style="background-image: url('https://images.pexels.com/photos/2774556/pexels-photo-2774556.jpeg?crop=entropy&cs=srgb&dl=pexels-luis-quintero-2774556.jpg&fit=crop&fm=jpg&h=853&w=1280');background-repeat:no-repeat;
    background-size:cover;">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="card">
                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="text-center text-muted mb-4">
                            <h5>
                                {{ __('Silahkan masukkan email dan kata sandi untuk masuk ke sistem') }}
                            </h5>
                        </div>
                        <form role="form" method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }} mb-3">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" type="email" name="email" value="{{ old('email') }}" required autofocus>
                                </div>
                                @if ($errors->has('email'))
                                    <div class="alert alert-danger mt-3" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </div>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-lock    "></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="{{ __('Kata Sandi') }}" type="password" required>
                                </div>
                                @if ($errors->has('password'))
                                <div class="alert alert-danger mt-3" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </div>
                                @endif
                            </div>
                            <div class="custom-control custom-control-alternative custom-checkbox">
                                <input class="custom-control-input" name="remember" id="customCheckLogin" type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                                <label class="custom-control-label" for="customCheckLogin">
                                    <span class="text-muted">{{ __('Ingatkan saya') }}</span>
                                </label>
                            </div>
                            <div class="row mt-3">
                                <div class="col-6">
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}">
                                            <small>{{ __('Lupa kata sandi?') }}</small>
                                        </a>
                                    @endif
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-block mt-3">{{ __('Masuk') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
