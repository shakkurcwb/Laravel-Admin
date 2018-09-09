@extends('layouts.master')

@section('app-content')

    <div class="form-small">

        <h2 class="text-center">@lang('Sign in on system')</h2>

        <form method="POST" action="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), 'login') }}">
            {!! csrf_field() !!}

            <div class="col-md-12 raw-margin-top-24">
                <label>@lang('Email')</label>
                <input class="form-control" type="email" name="email" value="{{ old('email') }}">
            </div>
            <div class="col-md-12 raw-margin-top-24">
                <label>@lang('Password')</label>
                <input class="form-control" type="password" name="password" id="password">
            </div>
            <div class="col-md-12 raw-margin-top-24">
                <label>
                    <input type="checkbox" name="remember"> @lang('Remember me')
                </label>
            </div>
            <div class="col-md-12 raw-margin-top-24">
                <div class="btn-toolbar justify-content-between">
                    <button class="btn btn-primary btn-block" type="submit">@lang('Login')</button>
                </div>
                <ul class="raw-margin-top-24">
                    <li>
                        <a class="btn btn-link" href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), 'password/reset') }}">
                            @lang('Forgot my password')
                        </a>
                    </li>
                    <li>
                        <a class="btn btn-link" href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), 'register') }}">
                            @lang('Sign up')
                        </a>
                    </li>
                </ul>
            </div>
            
        </form>

    </div>

@stop

