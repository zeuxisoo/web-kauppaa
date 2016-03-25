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
                    <span class="sr-only">Toggle navigation</span>
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
                        <li><a href="{{ route('web.user.home.index') }}">Home</a></li>
                        <li><a href="{{ route('web.user.apply.index') }}">Apply</a></li>
                    @endrole

                    @role('financier')
                        <li><a href="{{ route('web.financier.home.index') }}">Home</a></li>
                    @endrole
                @else
                    <li><a href="{{ route('web.home.index') }}">Home</a></li>
                @endif
                </ul>

                <ul class="nav navbar-nav pull-right">
                    @if (Auth::user())
                        <li>
                            <a href="{{ route('web.account.index') }}">
                                <strong>{{{ ucfirst(Auth::user()->username) }}}</strong>
                            </a>
                        </li>
                        <li><a href="{{ route('web.home.signout') }}">Sign out</a></li>
                    @else
                        <li><a href="{{ route('web.home.signin') }}">Sign in</a></li>
                        <li><a href="{{ route('web.home.signup') }}">Sign up</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="container">
            {{-- Application flash message --}}
            @if (Session::get('errors'))
                <div class="alert alert-error alert-danger">
                    <strong>Error!</strong>&nbsp;

                    @if (is_array(Session::get('errors')))
                        {{ head(Session::get('errors')) }}
                    @else
                        {{ Session::get('errors')->first() }}
                    @endif
                </div>
            @endif

            @if (Session::get('notice'))
                <div class="alert alert-success">
                    <strong>Success!</strong>&nbsp;{{{ Session::get('notice') }}}
                </div>
            @endif
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
