@extends('layouts.master')

@section('app-content')

    <div class="col-md-12 form-small text-center">
        <h1 class="text-center">@lang('Activate')</h1>
        <p>@lang('Please, check your email to activate your account.')</p>
        <a class="btn btn-primary btn-block" href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), 'activate/send-token') }}">
            @lang('Request new token')
        </a>
    </div>

@stop

