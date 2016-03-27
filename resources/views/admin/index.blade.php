@extends('layout.backend')

@section('container')
    <div id="admin-index" class="admin admin-index">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Sign in</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" method="POST" action="{{ route('web.admin.home.signin') }}" accept-charset="UTF-8">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="remember" value="0">
                                <div class="form-group">
                                    <input type="username" class="form-control" id="username" name="username" placeholder="Username" value="{{ Input::old('username') }}" autofocus="autofocus">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="remember" name="remember" value="1">&nbsp;
                                        Remember me
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-success btn-block">Sign in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    @include('shared.flash_message')
                </div>
            </div>
        </div>
    </div>
@stop
