@extends('layouts.app')


@section('content')

        <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-4 col-md-6 ml-auto mr-auto mt-auto">
                    <form class="form" method="post" action="{{ route('login') }}">
                        @csrf
                        <div class="card card-login card-white">
                            <h1 class="text-center card-title">{{ __('Log in') }}</h1>
                            <div class="card-body">
                                <div class="form-group mb-0">
                                    <div class="input-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="material-icons">email</i>
                                            </div>
                                        </div>
                                        <input type="email"
                                               class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                               id="exampleEmails" name="email" placeholder="{{ __('Email') }}"
                                               value="admin@black.com" required="">
                                        @include('alerts.feedback', ['field' => 'email'])
                                    </div>
                                </div>
                                <div class="input-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="material-icons">lock_outline</i>
                                        </div>
                                    </div>
                                    <input type="password" placeholder="{{ __('Password') }}" name="password"
                                           class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}">
                                    @include('alerts.feedback', ['field' => 'password'])
                                </div>
                                <div class="form-check mr-auto ml-3 mt-3">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="remember"> Remember me
                                        <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                    </label>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" href=""
                                        class="btn btn-primary btn-lg btn-block mb-3">{{ __('Get Started') }}</button>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-6">
                            <a href="{{ route('password.request') }}"
                               class="text-light">
                                <small>{{ __('Forgot password?') }}</small>
                            </a>
                        </div>
                    </div>
                </div>
@endsection
