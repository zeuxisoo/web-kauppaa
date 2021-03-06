@extends('layout.backend.dashboard')

@section('container_dashboard')
    <div id="admin-dashboard-news-edit" class="admin admin-dashboard admin-dashboard-news admin-dashboard-news-edit">
        <h3 class="page-header">{{ trans('admin.news.edit.title') }}</h3>

        @include('shared.flash_message')

        <div class="panel panel-default">
            <div class="panel-heading">{{ trans('admin.news.edit.panel_heading') }}</div>
            <div class="panel-body">
                <form action="{{ route('web.admin.news.update') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="id" value="{{ $news->id }}">
                    <div class="form-group">
                        <label for="title" class="col-sm-2 control-label">{{ trans('admin.news.edit.label.title') }}</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="title" name="title" value="{{ $news->title }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="summary" class="col-sm-2 control-label">{{ trans('admin.news.edit.label.summary') }}</label>
                        <div class="col-sm-10">
                            <textarea class="form-control editor-control" rows="5" name="summary">{{ $news->summary }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="content" class="col-sm-2 control-label">{{ trans('admin.news.edit.label.content') }}</label>
                        <div class="col-sm-10">
                            <textarea class="form-control editor-control" rows="5" name="content">{{ $news->content }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" class="btn btn-default" value="{{ trans('admin.news.edit.save_button') }}">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
