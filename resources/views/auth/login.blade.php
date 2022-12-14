@extends('layouts.login')
@section('content')
    <div style="background-color: #071C4D;">

        <div class="container">

            <!-- Outer Row -->
            <div class="row justify-content-center">

                <div class="col-xl-10 col-lg-12 col-md-9">

                    <div class="card o-hidden border-0 shadow-lg my-5">

                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->

                            <div class="row">
                                <div class="col-lg-6 d-none d-lg-block bg-login-image">
                                </div>
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="mb-4 text-left font-weight-bold" style="color: black;">We Explore
                                                <br> The
                                                New Life<br> Much
                                                Better
                                            </h1>
                                            <div class="card-title">
                                                <img src="{{ url('frontend/images/logo-floater.jpeg') }}" class="p-0"
                                                    alt="Logo FLOATER" />
                                            </div>
                                        </div>
                                        <form class="user" method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div class="form-group">
                                                {{-- mail --}}
                                                <input id="email" type="email"
                                                    class="form-control form-control-user  @error('email') is-invalid @enderror"
                                                    aria-describedby="emailHelp" name="email" value="{{ old('email') }}"
                                                    required autocomplete="email" placeholder="Enter Email Address..."
                                                    autofocus>

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input id="password" type="password"
                                                    class="form-control form-control-user @error('password') is-invalid @enderror"
                                                    name="password" required autocomplete="current-password"
                                                    placeholder="Enter Your Password...">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control">
                                                    <input class="form-check-input" type="checkbox" name="remember"
                                                        id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                    <label class="form-check-label" for="remember">
                                                        Remember Me
                                                    </label>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary btn-user btn-block">
                                                Login
                                            </button>
                                        </form>
                                        <hr>
                                        <div class="text-center">
                                            <a class="small" href="{{ route('register') }}">Create an Account!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
@endsection
