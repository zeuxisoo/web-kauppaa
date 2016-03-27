@extends('layout.backend')

@section('container')
    <div id="index">
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-horizontal" method="post" action="{{ route('web.admin.dashboard.update', ['id' => $apply->id]) }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label for="status" class="col-xs-3 col-md-2 control-label">Status</label>
                            <div class="col-xs-9 col-md-10">
                                <select name="status" class="form-control">
                                    @foreach(range(1, 4) as $key)
                                        @if ($key == $apply->status)
                                            <option value="{{ $key }}" selected="selected">{{ ucfirst(status($key)) }}</option>
                                        @else
                                            <option value="{{ $key }}">{{ ucfirst(status($key)) }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group clear-all-padding">
                            <div class="col-xs-offset-3 col-xs-9 col-md-offset-2 col-md-10">
                                <button type="submit" class="btn btn-default">Update</button>
                            </div>
                        </div>
                    </form>
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
        </div>
    </div>
@stop
