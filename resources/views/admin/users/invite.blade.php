@extends('dashboard')

@section('pageTitle') @lang('Invite user') @stop

@section('content')

    <div class="row">
        <div class="col-md-12">
            <form method="POST" action="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), '/admin/users/invite') }}">
                {!! csrf_field() !!}

                <div>
                    <label for="email">@lang('Email')</label>
                    <input id="email" class="form-control" type="text" name="email">
                </div>

                <div class="raw-margin-top-24">
                    <label for="name">@lang('Name')</label>
                    <input id="name" class="form-control" type="text" name="name">
                </div>

                <div class="raw-margin-top-24">
                    <label for="roles">@lang('Role')</label>
                    <select class="form-control" name='roles' id='roles'>
                        @foreach (App\Models\Role::get() as $role)
                            <option value="{{ $role->name }}">@lang($role->label)</option>
                        @endforeach
                    </select>
                </div>

                <div class="raw-margin-top-24">
                    <div class="btn-toolbar justify-content-between">
                        <button class="btn btn-primary" type="submit">@lang('Invite user')</button>
                        <a class="btn btn-secondary" href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), '/admin/users') }}">
                            @lang('Back')
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>

@stop