@extends('dashboard')

@section('pageTitle') @lang('Roles') @stop

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="btn-toolbar justify-content-between">
                <a class="btn btn-primary" href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), 'admin/roles/create') }}">
                    @lang('New role')
                </a>
                <form id="" class="raw-margin-left-24" method="post" action="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), 'admin/roles/search') }}">
                    {!! csrf_field() !!}
                    <input class="form-control" name="search"  value="{{ request('search') }}" placeholder="@lang('Search')">
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 raw-margin-top-24">
            @if ($roles->isEmpty())
                <div class="card card-default text-center">
                    <div class="card-body">
                        <span>@lang('Sorry, we could not find any results.')</span>
                    </div>
                </div>
            @else
                <table class="table table-striped">
                    <thead>
                        <th>@lang('Name')</th>
                        <th>@lang('Label')</th>
                        <th class="text-right" width="200px">@lang('Actions')</th>
                    </thead>
                    <tbody>
                        @foreach($roles as $role)
                            <tr>
                                <td>{{ $role->name }}</td>
                                <td>@lang($role->label)</td>
                                <td>
                                    <div class="btn-toolbar justify-content-between">
                                        <a class="btn btn-outline-primary btn-sm raw-margin-right-8" href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), 'admin/roles/' . $role->id . '/edit') }}">
                                            <span class="fa fa-edit"></span> @lang('Edit')
                                        </a>
                                        <form method="post" action="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), 'admin/roles/' . $role->id) }}">
                                            {!! csrf_field() !!}
                                            {!! method_field('DELETE') !!}
                                            <button class="btn btn-outline-danger btn-sm" type="submit" onclick="return confirm('@lang('Are you sure you want to delete this role?')')">
                                                <i class="fa fa-trash"></i> @lang('Delete')
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>

@stop
