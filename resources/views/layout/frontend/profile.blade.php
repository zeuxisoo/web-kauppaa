@extends('layout.frontend')

@section('container')
    <div id="user-profile-index" class="user user-profile user-profile-index">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">{{ trans('layout.frontend_profile.menu.title') }}</div>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a href="{{ route('web.account.index') }}">{{ trans('layout.frontend_profile.menu.my_profile') }}</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ route('web.account.edit_profile') }}">{{ trans('layout.frontend_profile.menu.edit_profile') }}</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ route('web.account.edit_password') }}">{{ trans('layout.frontend_profile.menu.edit_password') }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    @yield('container_profile')
                </div>
            </div>
        </div>
    </div>
@stop
