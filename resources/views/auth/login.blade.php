@extends('layouts.app')

@section('content')
    @include('layouts.hero_auth')
    <div class="container pt-5 mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8" style="margin-bottom: 10%">
                <div class="boxes-inbox">
                    <div class="form"method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="card-header text-center mb-4">{{ __('Login') }}</div>
                        <a href="{{ url('/') }}" class=" boxes-inbox-logo text-center"><img
                                src="{{ asset('assets/img/logo.png') }}" alt=""></a>
                        <div class="row">
                            <div class="col">
                                <div class="inputBoxes-inbox">
                                    <input type="email" class="@error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    <span>Email</span>
                                    <i></i>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="inputBoxes-inbox">
                                    <input type="password" class="@error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">
                                    <span>Password</span>
                                    <i></i>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="row mb-1 mt-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        
                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                </div>
                                {{-- <input type="submit" value="Login"> --}}
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                <div class="links">
                                    <a href="#">Forget password</a>
                                    <a href="#">Register</a>
                                </div>
                            </div>
                        </div>




                       
                    </div>
                </div>
            </div>
        @endsection
