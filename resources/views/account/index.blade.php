@extends('layout.frontend.account.profile')

@section('container_account_profile')
    <div class="panel panel-default">
        <div class="panel-heading">{{ trans('account.index.title.base_information') }}</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-3"><strong>{{ trans('account.index.label.username') }}</strong></div>
                <div class="col-md-8">{{ $user->username }}</div>
            </div>
            <div class="row">
                <div class="col-md-3"><strong>{{ trans('account.index.label.email') }}</strong></div>
                <div class="col-md-8">{{ $user->email }}</div>
            </div>
            <div class="row">
                <div class="col-md-3"><strong>{{ trans('account.index.label.created_at') }}</strong></div>
                <div class="col-md-8">{{ $user->created_at }}</div>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">{{ trans('account.index.title.apply_information') }}</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-3"><strong>{{ trans('account.index.label.total_apply_amount') }}</strong></div>
                <div class="col-md-8">{{ $user_applies->count() }}</div>
            </div>
        </div>
    </div>
@stop
