@extends('layout.backend.dashboard')

@inject('carbon', 'Carbon\Carbon')

@section('container_dashboard')
    <h3 class="page-header">{{ trans('admin.home.title') }}</h3>
    <div class="jumbotron">
        <div class="container text-center">
            <h1>{{ trans('admin.home.welcome') }}</h1>
            <p>{{ $carbon->now() }}</p>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">{{ trans('admin.home.shortcut.panel_heading') }}</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-3">{{ trans('layout.backend_dashboard.menu.site.group_name') }}</div>
                <div class="col-md-9">
                    <a href="{{ route('web.admin.site.edit_about_us') }}" class="btn btn-xs btn-default">{{ trans('layout.backend_dashboard.menu.site.edit_about_us') }}</a>
                    <a href="{{ route('web.admin.site.edit_contact_us') }}" class="btn btn-xs btn-default">{{ trans('layout.backend_dashboard.menu.site.edit_contact_us') }}</a>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-3">{{ trans('layout.backend_dashboard.menu.news.group_name') }}</div>
                <div class="col-md-9">
                    <a href="{{ route('web.admin.news.create') }}" class="btn btn-xs btn-default">{{ trans('layout.backend_dashboard.menu.news.create_news') }}</a>
                    <a href="{{ route('web.admin.news.manage') }}" class="btn btn-xs btn-default">{{ trans('layout.backend_dashboard.menu.news.manage_news') }}</a>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-3">{{ trans('layout.backend_dashboard.menu.apply.group_name') }}</div>
                <div class="col-md-9">
                    <a href="{{ route('web.admin.apply.index') }}" class="btn btn-xs btn-default">{{ trans('layout.backend_dashboard.menu.apply.show_apply') }}</a>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-3">{{ trans('layout.backend_dashboard.menu.other.group_name') }}</div>
                <div class="col-md-9">
                    <a href="{{ route('web.admin.home.signout') }}" class="btn btn-xs btn-info">{{ trans('layout.backend.navbar.signout') }}</a>
                </div>
            </div>
        </div>
    </div>
@stop
