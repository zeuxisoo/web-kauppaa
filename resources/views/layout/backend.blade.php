<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Kauppaa</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<link href="{{ asset('assets/css/backend.css') }}" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<div class="navbar navbar-static-top navbar-default navbar-inverse" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand">Kauppaa+</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                @if (Auth::user())
                    <li><a href="{{ route('web.admin.dashboard.index') }}">Dashboard</a></li>
                @else
                    <li><a href="{{ route('web.admin.index') }}">Home</a></li>
                @endif
            </ul>

            <ul class="nav navbar-nav pull-right">
                @if (Auth::user())
                    <li>
                        <a href="javascript:void(0)">
                            <strong>{{{ ucfirst(Auth::user()->username) }}}</strong>
                        </a>
                    </li>
                    <li><a href="{{ route('web.home.signout') }}">Sign out</a></li>
                @endif
            </ul>
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
