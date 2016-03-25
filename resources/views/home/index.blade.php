@extends('layout.frontend')

@section('container')
    <div id="home-index" class="home home-index">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
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
