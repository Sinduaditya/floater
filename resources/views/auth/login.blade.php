@extends('layouts.login')
@section('content')
    <main class="login-container vh-100">
        <div class="container-fluid ">
            <div class="page-login d-flex align-item-center">
                <div class="section-left col-12 col-md-6">
                    <h1 class="mb-4">We Explore The New <br> Life Much Better</h1>
                    <img src="{{ url('frontend/images/headerlogin.jpg') }}" alt="logologin" class=" w-100 d-none d-sm-flex">
                </div>
                <div class="section-right col-md-9 col-lg-6 col-xl-5">
                    <div class="card-header" style="background-color: #fff;">
                        <div class="card-body ">
                            <div class="text-center">
                                <img src="frontend/images/logo.png" alt="logo" class="w-40 mb-4">
                            </div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                {{-- EMAIL --}}
                                <div class="form-group">
                                    <label for="email">Email Addres</label>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <br>
                                {{-- PASSWORD --}}
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <br>
                                <div class="form-group form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        Remember Me
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-login btn-block">
                                    Login
                                </button>
                                <br>
                                <p>Belum Punya Akun &nbsp;?
                                    <a class="btn btn-link " style="text-decoration: none;" href="{{ route('register') }}">
                                        Register
                                    </a>
                                </p>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
