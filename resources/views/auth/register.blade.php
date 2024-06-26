@extends('layouts.app')

@section('content')
    @include('layouts.hero_auth')
    <div class="container pt-5 mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="boxes">
                    <div class="form"method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="card-header text-center mb-4">{{ __('Register') }}</div>
                        <a href="{{ url('/') }}" class=" boxes-logo text-center"><img
                                src="{{ asset('assets/img/logo.png') }}" alt=""></a>
                        <div class="row">
                            <div class="col">
                                <div class="inputBoxes">
                                    <input type="text" class="@error('first_name') is-invalid @enderror" name="first_name"
                                        value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
                                    <span>Frist Name</span>
                                    <i></i>
                                    @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="inputBoxes">
                                    <input type="text" class="@error('last_name') is-invalid @enderror" name="last_name"
                                        value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>
                                    <span>Last Name</span>
                                    <i></i>
                                    @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="inputBoxes">
                            <input type="text" class="@error('name') is-invalid @enderror" name="phone"
                                value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                            <span>Phone</span>
                            <i></i>
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="inputBoxes">
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
                        <div class="row">
                            <div class="col">
                                <div class="inputBoxes">
                                    <input type="text" class="@error('town') is-invalid @enderror" name="town"
                                        value="{{ old('town') }}" required autocomplete="town" autofocus>
                                    <span>Town</span>
                                    <i></i>
                                    @error('town')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="inputBoxes">
                                    <input type="text" class="@error('lacation') is-invalid @enderror" name="lacation"
                                        value="{{ old('lacation') }}" required autocomplete="lacation" autofocus>
                                    <span>Location</span>
                                    <i></i>
                                    @error('lacation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="inputBoxes">
                            <input type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            <span>Password</span>
                            <i></i>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="inputBoxes">
                            <input type="password" name="password_confirmation" required autocomplete="new-password">
                            <span>Password Confirmation</span>
                            <i></i>
                        </div>
                        {{-- <input type="submit" value="Register"> --}}
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                        <div class="links">
                            <a href="#">Forget password</a>
                            <a href="#">Log In</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
