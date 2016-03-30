@extends('layout.frontend')

@section('container')
    <div id="financier-application-index" class="financier financier-application financier-application-index">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="pull-left page-title">{{ trans('layout.frontend_financier_application.title') }}</div>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">{{ trans('layout.frontend_financier_application.menu.title') }}</div>
                        <div class="list-group">
                            <a href="{{ route('web.financier.application.index') }}" class="list-group-item">
                                {{ trans('layout.frontend_financier_application.menu.page.all_published') }}
                            </a>
                            <a href="{{ route('web.financier.application.matched') }}" class="list-group-item">
                                {{ trans('layout.frontend_financier_application.menu.page.my_matched') }}
                            </a>
                            <a href="{{ route('web.financier.application.approved') }}" class="list-group-item">
                                {{ trans('layout.frontend_financier_application.menu.page.my_approved') }}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    @yield('container_financier_application')
                </div>
            </div>
        </div>
    </div>
@stop
