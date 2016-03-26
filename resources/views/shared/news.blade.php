<div class="panel panel-default">
    <div class="panel-heading">{{ trans('shared.news.title') }}</div>
    <div class="panel-body">
        @foreach($news as $row)
            <div class="media">
                <div class="media-body">
                    <a href="{{ route('web.news.show', ['id' => $row->id]) }}">
                        <h4 class="media-heading">{{ $row->title }}</h4>
                    </a>
                    <p>{{ $row->summary }}</p>
                    <small class="text-muted">{!! trans('shared.news.post_at', ['created_at' => $row->created_at]) !!}</small>
                </div>
            </div>
            <hr>
        @endforeach
    </div>
</div>

{!! with(new App\Presenters\AlignedPagerPresenter($news))->render() !!}
