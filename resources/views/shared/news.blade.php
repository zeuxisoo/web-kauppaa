<div class="panel panel-default">
    <div class="panel-heading">News</div>
    <div class="panel-body">
        @foreach($news as $row)
            <div class="media">
                <div class="media-body">
                    <a href="{{ route('web.news.show', ['id' => $row->id]) }}">
                        <h4 class="media-heading">{{ $row->title }}</h4>
                    </a>
                    <p>{{ $row->summary }}</p>
                    <small class="text-muted">Post at <time>{{ $row->created_at }}</time></small>
                </div>
            </div>
            <hr>
        @endforeach
    </div>
</div>

{!! with(new App\Presenters\AlignedPagerPresenter($news))->render() !!}
