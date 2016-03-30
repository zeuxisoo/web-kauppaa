@extends('layout.frontend')

@section('container')
    <div id="news" class="news news-show">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="panel panel-default">
                        <div class="panel-heading">{{ trans('news.show.title') }}</div>
                        <div class="panel-body">
                            <h3 class="title">{{ $news->title }}</h3>
                            <div class="status">
                                <small class="text-muted">
                                    <i class="glyphicon glyphicon-time"></i> {{ $news->created_at }}
                                </small>
                            </div>
                            <hr>
                            <p>{!! $news->summary !!}</p>
                            <p>{!! $news->content !!}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    @include('shared.sidebar.hotline')
                    @include('shared.sidebar.total_apply_amount')
                    @include('shared.sidebar.total_apply_people')
                </div>
            </div>
        </div>
    </div>
@stop
