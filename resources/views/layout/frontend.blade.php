<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Brand</title>
@if (config('app.debug') === true)
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/js/app.js') }}"></script>
@else
    <link href="{{ elixir('assets/css/app.css') }}" rel="stylesheet">
    <script src="{{ elixir('assets/js/app.js') }}"></script>
@endif
</head>
<body>
<div class="navbar navbar-static-top navbar-default" role="navigation">
    <div class="navbar navbar-default navbar-fixed-top navbar-app" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">{{ trans('layout.frontend.toggle_navigation') }}</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand">Brand</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    @if (Auth::user())
                        @role('user')
                            <li><a href="{{ route('web.user.home.index') }}">{{ trans('layout.frontend.navbar.home') }}</a></li>
                            <li><a href="{{ route('web.user.apply.index') }}">{{ trans('layout.frontend.navbar.apply') }}</a></li>
                        @endrole

                        @role('financier')
                            <li><a href="{{ route('web.financier.home.index') }}">{{ trans('layout.frontend.navbar.home') }}</a></li>
                        @endrole

                        @role('admin')
                            <li><a href="{{ route('web.home.index') }}">{{ trans('layout.frontend.navbar.home') }}</a></li>
                        @endrole
                    @else
                        <li><a href="{{ route('web.home.index') }}">{{ trans('layout.frontend.navbar.home') }}</a></li>
                    @endif

                    <li><a href="{{ route('web.home.about') }}">{{ trans('layout.frontend.navbar.about') }}</a></li>
                </ul>

                <ul class="nav navbar-nav pull-right">
                    @if (Auth::user())
                        <li>
                            <a href="{{ route('web.account.index') }}">
                                <strong>{{{ ucfirst(Auth::user()->username) }}}</strong>
                            </a>
                        </li>
                        <li><a href="{{ route('web.home.signout') }}">{{ trans('layout.frontend.navbar.signout') }}</a></li>
                    @else
                        <li><a href="{{ route('web.home.signin') }}">{{ trans('layout.frontend.navbar.signin') }}</a></li>
                        <li><a href="{{ route('web.home.signup') }}">{{ trans('layout.frontend.navbar.signup') }}</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="container">
            @include('shared.flash_message')
        </div>

        @yield('container')

        <div class="col-md-12 footer">
            <hr>
            <span class="pull-left">&copy; 2016</span>
            <span class="pull-right">&nbsp;</span>
        </div>
    </div>
</div>
</body>
</html>
