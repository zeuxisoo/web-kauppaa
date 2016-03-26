@extends('layout.frontend')

@section('container')
    <div id="home-signup" class="home home-signup">
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('home.signup.title') }}</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('web.home.signup') }}" accept-charset="UTF-8">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="remember" value="0">
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label">{{ trans('home.signup.label.username') }}</label>
                            <div class="col-sm-10">
                                <input type="username" class="form-control" id="username" name="username" placeholder="{{ trans('home.signup.label.username') }}" value="{{ Input::old('username') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">{{ trans('home.signup.label.email') }}</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" name="email" placeholder="{{ trans('home.signup.label.email') }}" value="{{ Input::old('email') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-sm-2 control-label">{{ trans('home.signup.label.password') }}</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="password" name="password" placeholder="{{ trans('home.signup.label.password') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-sm-2 control-label">{{ trans('home.signup.label.role') }}</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="role">
                                    <option value="user" {{ (Input::old("role") == "user" ? "selected" : "") }}>{{ trans('home.signup.role.user') }}</option>
                                    <option value="financier" {{ (Input::old("role") == "financier" ? "selected" : "") }}>{{ trans('home.signup.role.financier') }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">{{ trans('home.signup.signup_button') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
