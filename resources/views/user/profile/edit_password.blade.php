@extends('layout.frontend.profile')

@section('container_profile')
    <div class="panel panel-default">
        <div class="panel-heading">Edit Password</div>
        <div class="panel-body">
            <form class="form-horizontal" method="post" action="{{ route('web.user.profile.update.password') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="old_password" class="col-sm-3 control-label">Old password</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="old_password" name="old_password" placeholder="Old password">
                    </div>
                </div>
                <div class="form-group">
                    <label for="new_password" class="col-sm-3 control-label">New password</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="new_password" name="new_password" placeholder="New password">
                    </div>
                </div>
                <div class="form-group">
                    <label for="new_password_confirmation" class="col-sm-3 control-label">Confirm password</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation" placeholder="Confirm password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" class="btn btn-default">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
