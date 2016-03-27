@extends('layout.backend.dashboard')

@section('container_dashboard')
    <div id="admin-dashboard-index" class="admin admin-dashboard admin-dashboard-index">
        <h3 class="page-header">Show Applies</h3>

        @include('shared.flash_message')

        <div class="panel panel-default">
            <div class="panel-heading">Applies</div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Chinese name</th>
                                <th>English name</th>
                                <th>Gender</th>
                                <th>Occupation</th>
                                <th>Monthly Income</th>
                                <th>Apply amount</th>
                                <th>Created at</th>
                                <th>Status</th>
                                <th>Action</th>
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
                                        <a href="{{ route('web.admin.dashboard.show', ['id' => $apply->id]) }}" class="btn btn-xs btn-default">View</a>
                                        <a href="{{ route('web.admin.dashboard.edit', ['id' => $apply->id]) }}" class="btn btn-xs btn-info">Edit</a>
                                    </td>
                                </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
