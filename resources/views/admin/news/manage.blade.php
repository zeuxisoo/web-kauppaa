@extends('layout.backend.dashboard')

@section('container_dashboard')
    <div id="admin-dashboard-news-manage" class="admin admin-dashboard admin-dashboard-news admin-dashboard-news-manage">
        <h3 class="page-header">{{ trans('admin.news.manage.title') }}</h3>

        @include('shared.flash_message')

        <div class="panel panel-default">
            <div class="panel-heading">{{ trans('admin.news.manage.panel_heading') }}</div>
            <div class="panel-body">
                <form action="{{ route('web.admin.news.destroy') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" name="delete" value=""></th>
                                    <th>{{ trans('admin.news.manage.label.title') }}</th>
                                    <th>{{ trans('admin.news.manage.label.created_at') }}</th>
                                    <th>{{ trans('admin.news.manage.label.control') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($news as $row)
                                    <tr>
                                        <td><input type="checkbox" name="ids[]" value="{{ $row->id }}"></td>
                                        <td>{{ $row->title }}</td>
                                        <td>{{ $row->created_at }}</td>
                                        <td>
                                            <a href="{{ route('web.admin.news.edit', ['id' => $row->id]) }}">{{ trans('admin.news.manage.row.edit') }}</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <input type="submit" class="btn btn-md btn-primary" value="{{ trans('admin.news.manage.delete_button') }}">
                </form>
            </div>
        </div>

        {!! $news->render() !!}
    </div>
@stop
