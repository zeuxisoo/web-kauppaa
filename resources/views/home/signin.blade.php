@extends('layout.frontend')

@section('container')
    <div id="home-signin" class="home home-signin">
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('home.signin.title') }}</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('web.home.signin') }}" accept-charset="UTF-8">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="remember" value="0">
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label">{{ trans('home.signin.label.username') }}</label>
                            <div class="col-sm-10">
                                <input type="username" class="form-control" id="username" name="username" placeholder="{{ trans('home.signin.label.username') }}" value="{{ Input::old('username') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-sm-2 control-label">{{ trans('home.signin.label.password') }}</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="password" name="password" placeholder="{{ trans('home.signin.label.password') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="remember" name="remember" value="1">&nbsp;
                                        {{ trans('home.signin.label.remember_me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">{{ trans('home.signin.signin_button') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
