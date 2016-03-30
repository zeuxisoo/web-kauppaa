@extends('layout.frontend')

@section('container')
    <div id="home-index" class="home home-index">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="panel panel-default">
                        <div class="panel-heading">About Us</div>
                        <div class="panel-body">
                            {!! $about_us->description !!}
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">Contact Us</div>
                        <div class="panel-body">
                            {!! $contact_us->description !!}
                        </div>
                    </div>
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
