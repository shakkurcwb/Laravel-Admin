@extends('layouts.master')

@section('app-content')

    <div class="form-small">

        <h2 class="text-center">@lang('Sign up')</h2>

        <form method="POST" action="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), '/register') }}">
            {!! csrf_field() !!}

            <div class="col-md-12 raw-margin-top-24">
                <label>@lang('Name')</label>
                <input class="form-control" type="text" name="name" value="{{ old('name') }}" placeholder="@lang('Enter your name here')">
            </div>
            <div class="col-md-12 raw-margin-top-24">
                <label>@lang('Email')</label>
                <input class="form-control" type="email" name="email" value="{{ old('email') }}" placeholder="@lang('Your best email, please')">
            </div>
            <div class="col-md-12 raw-margin-top-24">
                <label>@lang('Password')</label>
                <input class="form-control" type="password" name="password" placeholder="@lang('A strong password, ok?')">
            </div>
            <div class="col-md-12 raw-margin-top-24">
                <label>@lang('Confirm password')</label>
                <input class="form-control" type="password" name="password_confirmation" placeholder="@lang('Repeat it')">
            </div>
            <div class="col-md-12 raw-margin-top-24">
                <div class="btn-toolbar justify-content-between">
                    <button class="btn btn-primary btn-block" type="submit">@lang('Register')</button>
                </div>
                <ul class="raw-margin-top-24">
                    <li>
                        <a class="btn btn-link" href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), 'login') }}">
                            @lang('Already have an account?')
                        </a>
                    </li>
                </ul>
            </div>

        </form>

    </div>

@stop