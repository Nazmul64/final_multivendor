@extends('layouts.auth')

@section('login-auth')
    <div class="account-box">
        <div class="account-logo-box">
            <div class="text-center">
                <a href="index.html">
                    <img src="assets/images/logo-dark.png" alt="" height="30">
                </a>
            </div>
            <h5 class="text-uppercase mb-1 mt-4">Sign In</h5>
            <p class="mb-0">Login to your Admin account</p>
        </div>

        <div class="account-content mt-4">
            <form method="POST" action="{{ route('login') }}">
             @csrf

                <div class="form-group row">
                    <div class="col-12">
                        <label for="emailaddress">Email address</label>
                        <input class="form-control @error('email') is-invalid @enderror " type="email" id="emailaddress"  name="email">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-12">
                        <a href="page-recoverpw.html" class="text-muted float-right"><small>Forgot your
                                password?</small></a>
                        <label for="password">Password</label>
                        <input class="form-control @error('password') is-invalid @enderror " type="password"  id="password"  name="password" placeholder="Enter your password">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-12">

                        <div class="checkbox checkbox-success">
                            <input id="remember" type="checkbox" checked="" name="remember">
                            <label for="remember">
                                Remember me
                            </label>
                        </div>

                    </div>
                </div>

                <div class="form-group row text-center mt-2">
                    <div class="col-12">
                        <button class="btn btn-md btn-block btn-primary waves-effect waves-light" type="submit">Login</button>
                    </div>
                </div>

            </form>

            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center">
                        <button type="button" class="btn mr-1 btn-facebook waves-effect waves-light">
                            <i class="fab fa-facebook-f"></i>
                        </button>
                        <button type="button" class="btn mr-1 btn-googleplus waves-effect waves-light">
                            <i class="fab fa-google"></i>
                        </button>
                        <button type="button" class="btn mr-1 btn-twitter waves-effect waves-light">
                            <i class="fab fa-twitter"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="row mt-4 pt-2">
                <div class="col-sm-12 text-center">
                    <p class="text-muted mb-0">Don't have an account? <a href="{{ route('register') }}"class="text-dark ml-1"><b>Register</b></a></p>
                </div>
            </div>

        </div>
    </div>
@endsection
