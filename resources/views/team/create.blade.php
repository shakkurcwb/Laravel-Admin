@extends('dashboard')

@section('pageTitle') @lang('Create team') @stop

@section('content')

    <div class="row">
        <div class="col-md-12">
            <form method="post" action="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), 'teams') }}">
                {!! csrf_field() !!}

                    <div>
                        <label for="name">@lang('Name')</label>
                        <input id="name" class="form-control" type="text" name="name" value="">
                    </div>

                    <div class="raw-margin-top-24">
                        <div class="btn-toolbar justify-content-between">
                            <button class="btn btn-primary" type="submit">@lang('Save')</button>
                            <a class="btn btn-secondary" href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), 'teams') }}">
                                @lang('Back')
                            </a>
                        </div>
                    </div>

            </form>
        </div>
    </div>

@stop