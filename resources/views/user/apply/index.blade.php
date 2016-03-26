@extends('layout.frontend')

@section('container')
    <div id="user-apply-index" class="user user-apply user-apply-index">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="pull-left page-title">{{ trans('user.apply.index.title') }}</div>
                    <a href="{{ route('web.user.apply.create') }}" class="btn btn-md btn-info pull-right">{{ trans('user.apply.index.apply_it') }}</a>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-md-12">
                    @if ($applies->isEmpty() === true)
                        <div class="alert alert-info" role="alert">{{ trans('user.apply.index.alert_empty') }}</div>
                    @else
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ trans('user.apply.index.table.menu.chinese_name') }}</th>
                                        <th>{{ trans('user.apply.index.table.menu.english_name') }}</th>
                                        <th>{{ trans('user.apply.index.table.menu.gender') }}</th>
                                        <th>{{ trans('user.apply.index.table.menu.occupation') }}</th>
                                        <th>{{ trans('user.apply.index.table.menu.monthly_income') }}</th>
                                        <th>{{ trans('user.apply.index.table.menu.apply_amount') }}</th>
                                        <th>{{ trans('user.apply.index.table.menu.created_at') }}</th>
                                        <th>{{ trans('user.apply.index.table.menu.status') }}</th>
                                        <th>{{ trans('user.apply.index.table.menu.action') }}</th>
                                    </tr>
                                </thead>
                                @foreach($applies as $apply)
                                    <tbody>
                                        <tr>
                                            <td>{{ $apply->id }}</td>
                                            <td>{{ $apply->chinese_name }}</td>
                                            <td>{{ $apply->english_name }}</td>
                                            <td>{{ $apply->gender }}</td>
                                            <td>{{ $apply->occupation }}</td>
                                            <td>{{ $apply->monthly_income }}</td>
                                            <td>{{ $apply->apply_amount }}</td>
                                            <td>{{ $apply->created_at->diffForHumans() }}</td>
                                            <td>{{ status($apply->status) }}</td>
                                            <td>
                                                <a href="{{ route('web.user.apply.show', ['id' => $apply->id]) }}" class="btn btn-xs btn-default">{{ trans('user.apply.index.table.row.view_button') }}</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@stop
