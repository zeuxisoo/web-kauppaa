@extends('layout.frontend')

@section('container')
    <div id="user-apply-show" class="user user-apply user-apply-show">
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-3"><strong>Status</strong></div>
                        <div class="col-xs-9 text-right">{{ status($apply->status) }}</div>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">Personal</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-8 col-sm-3"><strong>Chinese name</strong></div>
                        <div class="col-xs-4 col-sm-3 text-right">{{ $apply->chinese_name }}</div>
                        <div class="col-xs-8 col-sm-3"><strong>English name</strong></div>
                        <div class="col-xs-4 col-sm-3 text-right">{{ $apply->english_name }}</div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 col-sm-3"><strong>HKID</strong></div>
                        <div class="col-xs-4 col-sm-3 text-right">{{ $apply->hkid }}</div>
                        <div class="col-xs-8 col-sm-3"><strong>Geneder</strong></div>
                        <div class="col-xs-4 col-sm-3 text-right">{{ gender($apply->gender) }}</div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 col-sm-3"><strong>Occupation</strong></div>
                        <div class="col-xs-4 col-sm-3 text-right">{{ occupation($apply->occupation) }}</div>
                        <div class="col-xs-8 col-sm-3"><strong>Monthly Income</strong></div>
                        <div class="col-xs-4 col-sm-3 text-right">{{ $apply->monthly_income }}</div>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">Property Ownership</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-8 col-sm-3"><strong>Private residential</strong></div>
                        <div class="col-xs-4 col-sm-3 text-right">{{ yesOrNo($apply->property_ownership_1) }}</div>
                        <div class="col-xs-8 col-sm-3"><strong>Home ownership</strong></div>
                        <div class="col-xs-4 col-sm-3 text-right">{{ yesOrNo($apply->property_ownership_2) }}</div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 col-sm-3"><strong>Public home ownership</strong></div>
                        <div class="col-xs-4 col-sm-3 text-right">{{ yesOrNo($apply->property_ownership_3) }}</div>
                        <div class="col-xs-8 col-sm-3"><strong>Village houses</strong></div>
                        <div class="col-xs-4 col-sm-3 text-right">{{ yesOrNo($apply->property_ownership_4) }}</div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 col-sm-3"><strong>No property</strong></div>
                        <div class="col-xs-4 col-sm-3 text-right">{{ yesOrNo($apply->property_ownership_5) }}</div>
                        <div class="col-xs-8 col-sm-3"><strong>&nbsp;</strong></div>
                        <div class="col-xs-4 col-sm-3 text-right">&nbsp;</div>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">Loan</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-8 col-sm-3"><strong>Loan type</strong></div>
                        <div class="col-xs-4 col-sm-3 text-right">{{ loanType($apply->loan_type) }}</div>
                        <div class="col-xs-8 col-sm-3"><strong>Apply amount</strong></div>
                        <div class="col-xs-4 col-sm-3 text-right">{{ $apply->apply_amount }}</div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 col-sm-3"><strong>Loan type</strong></div>
                        <div class="col-xs-4 col-sm-3 text-right">{{ $apply->loan_period }}</div>
                        <div class="col-xs-8 col-sm-3">&nbsp;</div>
                        <div class="col-xs-4 col-sm-3 text-right">&nbsp;</div>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">Others</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-8 col-sm-3"><strong>Pay roll</strong></div>
                        <div class="col-xs-4 col-sm-3 text-right">{{ payRoll($apply->payroll) }}</div>
                        <div class="col-xs-8 col-sm-3"><strong>MPF</strong></div>
                        <div class="col-xs-4 col-sm-3 text-right">{{ yesOrNo($apply->mpf) }}</div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 col-sm-3"><strong>Once bankruptcy</strong></div>
                        <div class="col-xs-4 col-sm-3 text-right">{{ yesOrNo($apply->once_bankruptcy) }}</div>
                        <div class="col-xs-6 col-sm-3">&nbsp;</div>
                        <div class="col-xs-6 col-sm-3 text-right">&nbsp;</div>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">Others</div>
                <div class="panel-body">
                    <div class="row">
                        @foreach($photos as $photo)
                            <div class="col-xs-12 col-sm-4">
                                <div class="alert alert-info text-center">{{ $photo->category }}</div>
                                <a href="{{ asset('/upload/apply/'.$photo->photo) }}" target="_blank" class="thumbnail">
                                    <img src="{{ asset('/upload/apply/'.$photo->photo) }}">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
