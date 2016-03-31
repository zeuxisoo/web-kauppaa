@extends('layout.frontend.financier.application', ['category' => 'index'])

@section('container_financier_application')
    <div class="panel panel-default">
        <div class="panel-heading">{{ trans('financier.application.index.title') }}</div>
        <div class="panel-body">
            @if ($applies->isEmpty() === true)
                <div class="alert alert-info" role="alert">{{ trans('financier.application.index.alert_empty') }}</div>
            @else
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ trans('financier.application.index.table.menu.chinese_name') }}</th>
                                <th>{{ trans('financier.application.index.table.menu.english_name') }}</th>
                                <th>{{ trans('financier.application.index.table.menu.gender') }}</th>
                                <th>{{ trans('financier.application.index.table.menu.apply_amount') }}</th>
                                <th>{{ trans('financier.application.index.table.menu.created_at') }}</th>
                                <th>{{ trans('financier.application.index.table.menu.action') }}</th>
                            </tr>
                        </thead>
                        @foreach($applies as $apply)
                            <tbody>
                                <tr>
                                    <td>{{ $apply->id }}</td>
                                    <td>{{ $apply->chinese_name }}</td>
                                    <td>{{ $apply->english_name }}</td>
                                    <td>{{ gender($apply->gender) }}</td>
                                    <td>{{ $apply->apply_amount }}</td>
                                    <td>{{ $apply->created_at->diffForHumans() }}</td>
                                    <td>
                                        <a href="{{ route('web.financier.application.show', ['id' => $apply->id]) }}" class="btn btn-xs btn-default">
                                            {{ trans('financier.application.index.table.row.view_button') }}
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>

                {!! $applies->render() !!}
            @endif
        </div>
    </div>
@stop
