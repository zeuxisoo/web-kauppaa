@extends('layout.frontend.profile')

@section('container_profile')
    <div class="panel panel-default">
        <div class="panel-heading">Base information</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-3"><strong>Username</strong></div>
                <div class="col-md-8">{{ $user->username }}</div>
            </div>
            <div class="row">
                <div class="col-md-3"><strong>Email</strong></div>
                <div class="col-md-8">{{ $user->email }}</div>
            </div>
            <div class="row">
                <div class="col-md-3"><strong>Created at</strong></div>
                <div class="col-md-8">{{ $user->created_at }}</div>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">Apply information</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-3"><strong>Total apply count</strong></div>
                <div class="col-md-8">{{ $user_applies->count() }}</div>
            </div>
        </div>
    </div>
@stop
