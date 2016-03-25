@extends('layout.frontend')

@section('container')
    <div id="user-profile-index" class="user user-profile user-profile-index">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">Menu</div>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a href="{{ route('web.user.profile.index') }}">My profile</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ route('web.user.profile.edit.profile') }}">Edit profile</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ route('web.user.profile.edit.password') }}">Edit password</a>
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
