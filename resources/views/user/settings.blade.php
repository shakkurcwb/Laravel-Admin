@extends('dashboard')

@section('pageTitle') @lang('Settings') @stop

@section('content')

    <div class="row">
        <div class="col-md-12">
            <form method="POST" action="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), '/user/settings') }}">
                {!! csrf_field() !!}

                <div>
                    <label for="email">@lang('Email')</label>
                    <input id="email" class="form-control" type="text" name="email" value="{{ $user->email }}">
                </div>

                <div class="raw-margin-top-24">
                    <label for="name">@lang('Name')</label>
                    <input id="name" class="form-control" type="text" name="name" value="{{ $user->name }}">
                </div>

                @include('user.meta')

                @if ($user->roles->first()->name === 'admin' || $user->id == 1)
                    <div class="raw-margin-top-24">
                        <label for="roles">@lang('Role')</label>
                        <select class="form-control" name='roles' id='roles'>
                            @foreach (App\Models\Role::get() as $role)
                                <option value="{{ $role->name }}" @if ($user->hasRole($role->name)) checked @endif>@lang($role->label)</option>
                            @endforeach
                        </select>
                    </div>
                @endif

                <div class="raw-margin-top-24">
                    <div class="btn-toolbar justify-content-between">
                        <button class="btn btn-primary" type="submit">@lang('Save')</button>
                        <a class="btn btn-link" href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), '/user/password') }}">
                            @lang('Change password')
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>

@stop
