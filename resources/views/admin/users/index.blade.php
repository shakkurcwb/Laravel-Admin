@extends('dashboard')

@section('pageTitle') @lang('Users') @stop

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="btn-toolbar justify-content-between">
                <a class="btn btn-primary" href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), 'admin/users/invite') }}">
                    @lang('Invite a new user')
                </a>
                <form method="post" action="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), 'admin/users/search') }}">
                    {!! csrf_field() !!}
                    <input class="form-control" name="search"  value="{{ request('search') }}" placeholder="@lang('Search')">
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 raw-margin-top-24">
            @if ($users->isEmpty())
                <div class="card card-default text-center">
                    <div class="card-body">
                        <span>@lang('Sorry, we could not find any results.')</span>
                    </div>
                </div>
            @else
                <table class="table table-striped">
                    <thead>
                        <th>@lang('Name')</th>
                        <th>@lang('Email')</th>
                        <th class="text-right" width="200px">@lang('Actions')</th>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>@if ($user->id === Auth::id()) <span class="fas fa-angle-right"></span>  @endif {{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <div class="btn-toolbar justify-content-between">
                                        <a class="btn btn-outline-primary btn-sm raw-margin-right-8" href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), 'admin/users/' . $user->id . '/edit') }}">
                                            <span class="fa fa-edit"></span> @lang('Edit')
                                        </a>
                                        <form method="post" action="{!! LaravelLocalization::getLocalizedURL(app()->getLocale(), 'admin/users/' . $user->id) !!}">
                                            {!! csrf_field() !!}
                                            {!! method_field('DELETE') !!}
                                            <button class="btn btn-outline-danger btn-sm" type="submit" onclick="return confirm('@lang('Are you sure you want to delete this user?')')">
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
