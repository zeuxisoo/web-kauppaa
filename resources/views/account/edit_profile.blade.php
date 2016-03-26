@extends('layout.frontend.profile')

@section('container_profile')
    <div class="panel panel-default">
        <div class="panel-heading">{{ trans('account.edit_profile.title') }}</div>
        <div class="panel-body">
            <form class="form-horizontal" method="post" action="{{ route('web.account.update_profile') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="username" class="col-sm-2 control-label">{{ trans('account.edit_profile.label.username') }}</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="username" name="username" placeholder="{{ trans('account.edit_profile.label.username') }}">
                        <span class="help-block">
                            <small>
                                {!! trans('account.edit_profile.help_text.username', ['username' => $user->username]) !!}
                            </small>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">{{ trans('account.edit_profile.label.email') }}</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" placeholder="{{ trans('account.edit_profile.label.email') }}">
                        <span class="help-block">
                            <small>
                                {!! trans('account.edit_profile.help_text.email', ['email' => $user->email]) !!}
                            </small>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">{{ trans('account.edit_profile.update_button') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
