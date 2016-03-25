@extends('layout.frontend')

@section('container')
    <div id="user-home-index" class="user user-home user-home-index">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="panel panel-default">
                        <div class="panel-heading">Applications</div>
                        <div class="panel-body">
                            @if ($applies->isEmpty() === true)
                                <div class="alert alert-info" role="alert">No any submitted application</div>
                            @endif

                            @foreach($applies as $apply)
                                <div class="row application">
                                    <div class="col-md-10">
                                        <div class="title">Ref code: {{ $apply->code }}</div>
                                        <div class="status">
                                            <small class="text-muted">
                                                submitted at {{ $apply->created_at }}, status is <strong>{{ status($apply->status) }}</strong>
                                            </small>
                                        </div>
                                    </div>
                                    <div class="col-md-2 text-center">
                                        <a href="{{ route('web.user.apply.show', ['id' => $apply->id]) }}" class="btn btn-md btn-default">View</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    @include('shared.news')
                </div>
                <div class="col-md-3">
                    @include('shared.sidebar.hotline')
                    @include('shared.sidebar.total_apply_people')
                    @include('shared.sidebar.total_apply_amount')
                </div>
            </div>
        </div>
    </div>
@stop
