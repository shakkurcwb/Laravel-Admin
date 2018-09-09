@extends('dashboard')

@section('pageTitle') @lang('Edit user') @stop

@section('content')

    <div class="row">
        <div class="col-md-12">
            @if (!Session::get('original_user'))
                <a class="btn btn-secondary pull-right" href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), '/admin/users/switch/' . $user->id) }}">
                    @lang('Login as this user')
                </a>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form method="POST" action="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), '/admin/users/' . $user->id) }}">
                <input name="_method" type="hidden" value="PATCH">
                {!! csrf_field() !!}

                <div class="raw-margin-top-24">
                    <label for="email">@lang('Email')</label>
                    <input id="email" class="form-control" type="text" name="email" value="{{ $user->email }}">
                </div>

                <div class="raw-margin-top-24">
                    <label for="name">@lang('Name')</label>
                    <input id="name" class="form-control" type="text" name="name" value="{{ $user->name }}">
                </div>

                @include('user.meta')

                <div class="raw-margin-top-24">
                    <label for="roles">@lang('Role')</label>
                    <select class="form-control" name='roles' id='roles'>
                        @foreach (App\Models\Role::get() as $role)
                            <option value="{{ $role->name }}" @if ($user->hasRole($role->name)) checked @endif >@lang($role->label)</option>
                        @endforeach
                    </select>
                </div>

                <div class="raw-margin-top-24">
                    <div class="btn-toolbar justify-content-between">
                        <button class="btn btn-primary" type="submit">@lang('Save')</button>
                        <a class="btn btn-secondary" href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), '/admin/users') }}">
                            @lang('Back')
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>

@stop