@extends('layout.frontend')

@section('container')
    <div id="user user-home user-home-index">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="panel panel-default">
                        <div class="panel-heading">Applications</div>
                        <div class="panel-body">
                            <div class="row application">
                                <div class="col-md-10">
                                    <div class="title">Name</div>
                                    <div class="status">
                                        <small class="text-muted">
                                            submitted at 2010.12.12, status is <strong>waitting</strong>
                                        </small>
                                    </div>
                                </div>
                                <div class="col-md-2 text-center">
                                    <a href="" class="btn btn-md btn-default">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">News</div>
                        <div class="panel-body">
                            @foreach($news as $row)
                                <div class="media">
                                    <div class="media-body">
                                        <h4 class="media-heading">{{ $row->title }}</h4>
                                        <p>{{ $row->content }}</p>
                                        <small class="text-muted">Post at <time>{{ $row->created_at }}</time></small>
                                    </div>
                                </div>
                                <hr>
                            @endforeach
                        </div>
                    </div>

                    {!! with(new App\Presenters\AlignedPagerPresenter($news))->render() !!}
                </div>
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">Hotline</div>
                        <div class="panel-body text-center">
                            3456-8888
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">Apply count</div>
                        <div class="panel-body text-center">
                            67,890
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">Apply Amount</div>
                        <div class="panel-body text-center">
                            $6,333,567,890
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
