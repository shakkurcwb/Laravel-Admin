@extends('dashboard')

@section('pageTitle') @lang('Change password') @stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form method="POST" action="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), '/user/password') }}">
                {!! csrf_field() !!}

                <div>
                    <label for="old_password">@lang('Old password')</label>
                    <input id="old_password" class="form-control" type="password" name="old_password">
                </div>

                <div class="raw-margin-top-24">
                    <label for="new_password">@lang('New password')</label>
                    <input id="new_password" class="form-control" type="password" name="new_password">
                </div>

                <div class="raw-margin-top-24">
                    <label for="new_password_confirmation">@lang('Confirm new password')</label>
                    <input id="new_password_confirmation" class="form-control" type="password" name="new_password_confirmation">
                </div>

                <div class="raw-margin-top-24">
                    <div class="btn-toolbar justify-content-between">
                        <button class="btn btn-primary pull-right" type="submit">@lang('Save')</button>
                        <a class="btn btn-secondary pull-left" href="{{ URL::previous() }}">@lang('Back')</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

@stop
