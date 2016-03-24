@extends('layout.frontend')

@section('container')
    <div id="user-apply-index" class="user user-apply user-apply-index">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="pull-left page-title">My list</div>
                    <a href="{{ route('web.user.apply.create') }}" class="btn btn-md btn-info pull-right">Apply It</a>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-md-12">
                    @if (empty($applies) === true)
                        <div class="alert alert-info" role="alert">No any submitted application</div>
                    @else
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
                                                <a href="{{ route('web.user.apply.show', ['id' => $apply->id]) }}" class="btn btn-xs btn-default">View</a>
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
