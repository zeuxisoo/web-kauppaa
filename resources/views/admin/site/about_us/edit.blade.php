@extends('layout.backend.dashboard')

@section('container_dashboard')
    <div id="admin-dashboard-about-us-create" class="admin admin-dashboard admin-dashboard-about-us admin-dashboard-about-us-create">
        <h3 class="page-header">{{ trans('admin.site.edit.about_us.title') }}</h3>

        @include('shared.flash_message')

        <div class="panel panel-default">
            <div class="panel-heading">{{ trans('admin.site.edit.about_us.panel_heading') }}</div>
            <div class="panel-body">
                <form action="{{ route('web.admin.site.update_about_us') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="id" value="1">
                    <div class="form-group">
                        <label for="description" class="col-sm-2 control-label">{{ trans('admin.site.edit.about_us.label.description') }}</label>
                        <div class="col-sm-10">
                            <textarea class="form-control editor-control" rows="5" name="description">{!! $about_us->description !!}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" class="btn btn-default" value="{{ trans('admin.site.edit.about_us.save_button') }}">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
