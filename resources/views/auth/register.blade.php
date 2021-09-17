@extends('layouts.front', ['class' => 'bg-default'])

@section('title', 'Register')

@section('content')

    <div class="fluid-container py-5" style="background-image: url('https://images.pexels.com/photos/2774556/pexels-photo-2774556.jpeg?crop=entropy&cs=srgb&dl=pexels-luis-quintero-2774556.jpg&fit=crop&fm=jpg&h=853&w=1280');background-repeat:no-repeat;
    background-size:cover;">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="card">
                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="text-center text-muted mb-4">
                            <h5>
                                {{ __('Make New Account') }}
                            </h5>
                        </div>
                        <form role="form" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group{{ $errors->has('role') ? ' has-danger' : '' }} mb-3">
                                <label for=""></label>
                                <select class="form-control" name="role" id="role">
                                    <option value="">Register as</option>
                                    <option value="1">Presenter</option>
                                    <option value="2">Participant</option>
                                </select>
                                @if ($errors->has('role'))
                                    <div class="alert alert-danger mt-3" role="alert">
                                        <strong>{{ $errors->first('role') }}</strong>
                                    </div>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }} mb-3">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Name') }}" type="name" name="name"
                                        value="{{ old('name') }}" required>
                                </div>
                                @if ($errors->has('name'))
                                    <div class="alert alert-danger mt-3" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </div>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }} mb-3">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Email') }}" type="email" name="email"
                                        value="{{ old('email') }}" required>
                                </div>
                                @if ($errors->has('email'))
                                    <div class="alert alert-danger mt-3" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </div>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('phone') ? ' has-danger' : '' }} mb-3">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-phone" aria-hidden="true"></i></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Phone') }}" type="text" name="phone"
                                        value="{{ old('phone') }}" required>
                                </div>
                                @if ($errors->has('phone'))
                                    <div class="alert alert-danger mt-3" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </div>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-lock    "></i></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                        name="password" placeholder="{{ __('Password') }}" type="password" required>
                                </div>
                                @if ($errors->has('password'))
                                    <div class="alert alert-danger mt-3" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </div>
                                @endif
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success btn-block mt-4">{{ __('Register') }}</button>
                                <a class="btn btn-primary btn-block mt-2" href="{{route('login')}}">{{ __('Login') }}</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
