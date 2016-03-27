@extends('layout.backend.dashboard')

@inject('carbon', 'Carbon\Carbon')

@section('container_dashboard')
    <h3 class="page-header">Dashboard</h3>
    <div class="jumbotron">
        <div class="container text-center">
            <h1>Welcome!</h1>
            <p>{{ $carbon->now() }}</p>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">Shortcut</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-3">Applies</div>
                <div class="col-md-9">
                    <a href="{{ route('web.admin.apply.index') }}" class="btn btn-xs btn-default">Show applies</a>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-3">Other</div>
                <div class="col-md-9">
                    <a href="{{ route('web.admin.home.signout') }}" class="btn btn-xs btn-info">Logout</a>
                </div>
            </div>
        </div>
    </div>
@stop
