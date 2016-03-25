@extends('layout.frontend.profile')

@section('container_profile')
    <div class="panel panel-default">
        <div class="panel-heading">Edit Profile</div>
        <div class="panel-body">
            <form class="form-horizontal" method="post" action="{{ route('web.user.profile.update.profile') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="username" class="col-sm-2 control-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                        <span class="help-block">
                            <small>
                                Current is <strong>{{ $user->username }}</strong>, Please keep it blank if you don't want to change it.
                            </small>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        <span class="help-block">
                            <small>
                                Current is <strong>{{ $user->email }}</strong>, Please keep it blank if you don't want to change it.
                            </small>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
