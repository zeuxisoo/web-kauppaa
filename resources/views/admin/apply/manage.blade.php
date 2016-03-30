@extends('layout.backend.dashboard')

@section('container_dashboard')
    <div id="admin-dashboard-apply-manage" class="admin admin-dashboard admin-dashboard-apply admin-dashboard-apply-manage">
        <h3 class="page-header">{{ trans('admin.apply.manage.title', ['status' => $status]) }}</h3>

        @include('shared.flash_message')

        <div class="panel panel-default">
            <div class="panel-heading">{{ trans('admin.apply.manage.panel_heading') }}</div>
            <div class="panel-body">
                @if ($applies->isEmpty() === true)
                    <div class="alert alert-info" role="alert">{{ trans('admin.apply.manage.alert_empty') }}</div>
                @else
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{ trans('admin.apply.manage.label.chinese_name') }}</th>
                                    <th>{{ trans('admin.apply.manage.label.english_name') }}</th>
                                    <th>{{ trans('admin.apply.manage.label.apply_amount') }}</th>
                                    <th>{{ trans('admin.apply.manage.label.created_at') }}</th>
                                    <th>{{ trans('admin.apply.manage.label.status') }}</th>
                                    <th>{{ trans('admin.apply.manage.label.action') }}</th>
                                </tr>
                            </thead>
                            @foreach($applies as $apply)
                                <tbody>
                                    <tr>
                                        <td>{{ $apply->id }}</td>
                                        <td>{{ $apply->chinese_name }}</td>
                                        <td>{{ $apply->english_name }}</td>
                                        <td>{{ $apply->apply_amount }}</td>
                                        <td>{{ $apply->created_at->diffForHumans() }}</td>
                                        <td>{{ status($apply->status) }}</td>
                                        <td>
                                            <a href="{{ route('web.admin.apply.show', ['id' => $apply->id]) }}" class="btn btn-xs btn-default">
                                                {{ trans('admin.apply.manage.row.view') }}
                                            </a>
                                            <a href="{{ route('web.admin.apply.edit', ['id' => $apply->id]) }}" class="btn btn-xs btn-info">
                                                {{ trans('admin.apply.manage.row.edit') }}
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>

                        {!! $applies->render() !!}
                    </div>
                @endif
            </div>
        </div>
    </div>
@stop
