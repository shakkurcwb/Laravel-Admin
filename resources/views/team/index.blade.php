@extends('dashboard')

@section('pageTitle') @lang('Teams') @stop

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="btn-toolbar justify-content-between">
                <a class="btn btn-primary raw-margin-right-8" href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), 'teams/create') }}">
                    @lang('Create team')
                </a>
                <form class="form-inline" method="post" action="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), 'teams/search') }}">
                    {!! csrf_field() !!}
                    <input class="form-control mr-sm-2" name="search" type="search" value="{{ request('search') }}" aria-label="Search">
                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">@lang('Search')</button>
                </form>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 raw-margin-top-24">
            @if ($teams->isEmpty())
                <div class="card card-default text-center">
                    <div class="card-body">
                        <span>@lang('Sorry, we could not find any results.')</span>
                    </div>
                </div>
            @else
                <table class="table table-striped">
                    <thead>
                        <th>@lang('Name')</th>
                        <th class="text-right" width="200px">@lang('Actions')</th>
                    </thead>
                    <tbody>
                        @foreach($teams as $team)
                            <tr>
                                <td>{{ $team->name }}</td>
                                <td>
                                    <div class="btn-toolbar justify-content-between">
                                        <a class="btn btn-outline-primary btn-sm raw-margin-right-8" href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), 'teams/' . $team->id . '/edit') }}">
                                            <i class="fa fa-edit"></i> @lang('Edit')
                                        </a>
                                        <form class="form" method="post" action="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), 'teams/' . $team->id) }}">
                                            {!! csrf_field() !!}
                                            {!! method_field('DELETE') !!}
                                            <button class="btn btn-outline-danger btn-sm" type="submit" onclick="return confirm('@lang('Are you sure you want to delete this team?')')">
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