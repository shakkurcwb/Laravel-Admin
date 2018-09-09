@extends('dashboard')

@section('pageTitle') @lang('Edit role') @stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form method="POST" action="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), 'admin/roles/' . $role->id) }}">
                <input name="_method" type="hidden" value="PATCH">
                {!! csrf_field() !!}

                <div>
                    <label for="name">@lang('Name')</label>
                    <input id="name" class="form-control" type="text" name="name" value="{{ $role->name }}">
                </div>

                <div class="raw-margin-top-24">
                    <label for="label">@lang('Label')</label>
                    <input id="label" class="form-control" type="text" name="label" value="{{ $role->label }}">
                </div>

                <div class="raw-margin-top-24">
                    <h3>@lang('Permissions')</h3>
                    @foreach(Config::get('permissions', []) as $permission => $name)
                        <div class="checkbox">
                            <label for="{{ $name }}">
                                @if (stristr($role->permissions, $permission))
                                    <input type="checkbox" name="permissions[{{ $permission }}]" id="{{ $name }}" checked>
                                @else
                                    <input type="checkbox" name="permissions[{{ $permission }}]" id="{{ $name }}">
                                @endif
                                @lang($name)
                            </label>
                        </div>
                    @endforeach
                </div>

                <div class="raw-margin-top-24">
                    <div class="btn-toolbar justify-content-between">
                        <button class="btn btn-primary" type="submit">@lang('Save')</button>
                        <a class="btn btn-secondary" href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), 'admin/roles') }}">
                            @lang('Back')
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>

@stop