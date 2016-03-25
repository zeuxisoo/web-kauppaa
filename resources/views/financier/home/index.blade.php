@extends('layout.frontend')

@section('container')
    <div id="user-home-index" class="user user-home user-home-index">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
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
                    @include('shared.sidebar.hotline')
                    @include('shared.sidebar.total_apply_people')
                    @include('shared.sidebar.total_apply_amount')
                </div>
            </div>
        </div>
    </div>
@stop
