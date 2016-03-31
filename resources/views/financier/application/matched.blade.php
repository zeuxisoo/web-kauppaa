@extends('layout.frontend.financier.application', ['category' => 'matched'])

@section('container_financier_application')
    <div class="panel panel-default">
        <div class="panel-heading">{{ trans('financier.application.matched.title') }}</div>
        <div class="panel-body">
            @if ($investments->isEmpty() === true)
                <div class="alert alert-info" role="alert">{{ trans('financier.application.matched.alert_empty') }}</div>
            @else
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ trans('financier.application.matched.table.menu.chinese_name') }}</th>
                                <th>{{ trans('financier.application.matched.table.menu.english_name') }}</th>
                                <th>{{ trans('financier.application.matched.table.menu.gender') }}</th>
                                <th>{{ trans('financier.application.matched.table.menu.apply_amount') }}</th>
                                <th>{{ trans('financier.application.matched.table.menu.created_at') }}</th>
                                <th>{{ trans('financier.application.matched.table.menu.action') }}</th>
                            </tr>
                        </thead>
                        @foreach($investments as $apply)
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
                                            {{ trans('financier.application.matched.table.row.view_button') }}
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>

                {!! $investments->render() !!}
            @endif
        </div>
    </div>
@stop
