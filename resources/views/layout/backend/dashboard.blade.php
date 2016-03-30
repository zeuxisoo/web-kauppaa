@extends('layout.backend')

@section('container')
    <div id="admin-dashboard-index" class="admin admin-dashboard admin-dashboard-index">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">{{ trans('layout.backend.toggle_navigation') }}</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('web.admin.dashboard.index') }}">Brand</a>
            </div>

            <!-- Navbar -->
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <a href="javascript:void(0)"><i class="fa fa-user fa-fw"></i> {{{ ucfirst(Auth::user()->username) }}}</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ route('web.admin.home.signout') }}"><i class="fa fa-sign-out fa-fw"></i> {{ trans('layout.backend.navbar.signout') }}</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <!-- Menu -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search text-center">
                            <div class="text-muted">
                                Welcome, <a href="javascript:void(0)">{{{ ucfirst(Auth::user()->username) }}}</a>
                            </div>
                        </li>
                        <li>
                            <a href="{{ route('web.admin.dashboard.index') }}"><i class="fa fa-dashboard fa-fw"></i> {{ trans('layout.backend.navbar.home') }}</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-tasks fa-fw"></i> Site<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('web.admin.site.edit_about_us') }}">Edit About Us</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-tasks fa-fw"></i> News<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('web.admin.news.create') }}">Create news</a>
                                </li>
                                <li>
                                    <a href="{{ route('web.admin.news.manage') }}">Manage news</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-tasks fa-fw"></i> Applies<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('web.admin.apply.index') }}">Show applies</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Container -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    @yield('container_dashboard')
                </div>
            </div>
        </div>
    </div>
@stop
