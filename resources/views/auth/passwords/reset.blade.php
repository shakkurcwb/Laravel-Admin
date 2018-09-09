@extends('layouts.master')

@section('app-content')

    <div class="form-small">

        <h2 class="text-center">@lang('Forgot password')</h2>

        <form method="POST" action="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), '/password/reset') }}">
            {!! csrf_field() !!}
            
            <input type="hidden" name="token" value="{{ $token }}">

            <div class="col-md-12 raw-margin-top-24">
                <label>@lang('Email')</label>
                <input class="form-control" type="email" name="email" value="{{ old('email') }}">
            </div>
            <div class="col-md-12 raw-margin-top-24">
                <label>@lang('Password')</label>
                <input class="form-control" type="password" name="password">
            </div>
            <div class="col-md-12 raw-margin-top-24">
                <label>@lang('Confirm password')</label>
                <input class="form-control" type="password" name="password_confirmation">
            </div>
            <div class="col-md-12 raw-margin-top-24">
                <button class="btn btn-primary btn-block" type="submit">@lang('Reset password')</button>
            </div>
        </form>
    </div>

@stop