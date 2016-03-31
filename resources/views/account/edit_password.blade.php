@extends('layout.frontend.account.profile')

@section('container_account_profile')
    <div class="panel panel-default">
        <div class="panel-heading">{{ trans('account.edit_password.title') }}</div>
        <div class="panel-body">
            <form class="form-horizontal" method="post" action="{{ route('web.account.update_password') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="old_password" class="col-sm-3 control-label">{{ trans('account.edit_password.label.old_password') }}</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="old_password" name="old_password" placeholder="{{ trans('account.edit_password.label.old_password') }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="new_password" class="col-sm-3 control-label">{{ trans('account.edit_password.label.new_password') }}</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="new_password" name="new_password" placeholder="{{ trans('account.edit_password.label.new_password') }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="new_password_confirmation" class="col-sm-3 control-label">{{ trans('account.edit_password.label.confirm_password') }}</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation" placeholder="{{ trans('account.edit_password.label.confirm_password') }}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" class="btn btn-default">{{ trans('account.edit_password.update_button') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
