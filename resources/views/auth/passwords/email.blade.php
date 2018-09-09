@extends('layouts.master')

@section('app-content')

    <div class="form-small">

        <h2 class="text-center">@lang('Forgot password')</h2>

        <form method="POST" action="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), '/password/email') }}">
            {!! csrf_field() !!}

            @include('partials.errors')
            @include('partials.status')

            <div class="col-md-12 raw-margin-top-24">
                <label>@lang('Email')</label>
                <input class="form-control" type="email" name="email" placeholder="@lang('Do you remember, right?')" value="{{ old('email') }}">
            </div>
            <div class="col-md-12 raw-margin-top-24">
                <button class="btn btn-primary btn-block" type="submit" class="button">@lang('Send password reset link')</button>
            </div>
            <div class="col-md-12 raw-margin-top-24">
                <a class="btn btn-link" href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), 'login') }}">
                    @lang('Wait, I remember!')
                </a>
            </div>
        </form>

    </div>

@stop
