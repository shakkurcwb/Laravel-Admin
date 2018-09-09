@extends('dashboard')

@section('pageTitle') @lang('Edit team') @stop

@section('content')

    <div class="row">
        <div class="col-md-6">
            <form method="post" action="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), 'teams/' . $team->id) }}">
                {!! csrf_field() !!}
                {!! method_field('PATCH') !!}

                <div>
                    <label for="name">@lang('Name')</label>
                    <input id="name" class="form-control" type="text" name="name" value="{{ $team->name }}">
                </div>

                <div class="raw-margin-top-12">
                    <div class="btn-toolbar justify-content-between">
                        <button class="btn btn-primary" type="submit">@lang('Save')</button>
                    </div>
                </div>

            </form>
        </div>
        <div class="col-md-6">
            @if (Auth::user()->isTeamAdmin($team->id))
                <form method="post" action="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), 'teams/' . $team->id . '/invite') }}">
                    {!! csrf_field() !!}

                    <div>
                        <label>@lang('Invite a new member')</label>
                        <input class="form-control" type="email" name="email" placeholder="@lang('Email')">
                    </div>

                    <div class="raw-margin-top-12">
                        <button class="btn btn-primary pull-right" type="submit">@lang('Invite')</button>
                    </div>

                </form>
            @endif
        </div>

        @if (Auth::user()->isTeamAdmin($team->id))
            <div class="col-md-12 raw-margin-top-24">
                <h2 class="text-left">@lang('Members')</h2>
                @if ($team->members->isEmpty())
                    <div class="col-md-12 raw-margin-bottom-24">
                        <div class="well text-center">@lang('Sorry, we could not find any results.')</div>
                    </div>
                @else
                    <table class="table table-striped">
                        <thead>
                            <th>@lang('Name')</th>
                            <th class="text-right">@lang('Actions')</th>
                        </thead>
                        <tbody>
                            @foreach($team->members as $member)
                                <tr>
                                    <td>{{ $member->name }}</td>
                                    <td class="text-right">
                                        @if (! $member->isTeamAdmin($team->id))
                                            <a class="btn btn-outline-danger btn-sm"
                                                href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), 'teams/' . $team->id . '/remove/' . $member->id) }}"
                                                onclick="return confirm('@lang('Are you sure you want to delete this member?')')">
                                                    <i class="fas fa-sign-in-alt"></i> @lang('Remove')
                                            </a>
                                        @else
                                            -
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        @endif

        <div class="col-md-12">
            <div class="btn-toolbar justify-content-end">
                <a class="btn btn-secondary" href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), '/teams') }}">
                    @lang('Back')
                </a>
            </div>
        </div>

    </div>

@stop

