<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Kauppaa</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<div class="navbar navbar-static-top navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('web.home.index') }}">Kauppaa</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{ route('web.home.index') }}">Home</a></li>
            </ul>
            <ul class="nav navbar-nav pull-right">
                @if (Auth::user())
                    <li>
                        <a href="javascript:void(0)">
                            <strong>{{{ ucfirst(Auth::user()->username) }}}</strong>
                        </a>
                    </li>
                    <li><a href="{{ route('web.home.signout') }}">Sign out</li>
                @else
                    <li><a href="{{ route('web.home.signin') }}">Sign in</a></li>
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
        </div>

        @yield('container')

        <div class="col-md-12 footer">
            <hr>
            <span class="pull-left">&copy; 2014</span>
            <span class="pull-right">&nbsp;</span>
        </div>
    </div>
</div>
</body>
</html>