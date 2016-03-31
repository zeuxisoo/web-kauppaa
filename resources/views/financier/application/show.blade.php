@extends('layout.frontend.financier.application', ['category' => ''])

@section('container_financier_application')
    <div id="admin-dashboard-apply-show" class="admin admin-dashboard admin-dashboard-apply admin-dashboard-apply-show">
        <div class="panel panel-default">
            <div class="panel-heading">{{ trans('financier.application.show.section.action') }}</div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-12">
                        <a href="javascript:history.back()" class="btn btn-xs btn-default">{{ trans('financier.application.show.back_button') }}</a>

                        @if ($investment === null)
                            <a href="{{ route('web.financier.application.investment', ['id' => $apply->id]) }}" class="btn btn-xs btn-info">
                                {{ trans('financier.application.show.investment_button') }}
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">{{ trans('financier.application.show.section.personal') }}</div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-8 col-sm-3"><strong>{{ trans('financier.application.show.label.chinese_name') }}</strong></div>
                    <div class="col-xs-4 col-sm-3 text-right">{{ $apply->chinese_name }}</div>
                    <div class="col-xs-8 col-sm-3"><strong>{{ trans('financier.application.show.label.english_name') }}</strong></div>
                    <div class="col-xs-4 col-sm-3 text-right">{{ $apply->english_name }}</div>
                </div>
                <div class="row">
                    <div class="col-xs-8 col-sm-3"><strong>{{ trans('financier.application.show.label.hkid') }}</strong></div>
                    <div class="col-xs-4 col-sm-3 text-right">{{ $apply->hkid }}</div>
                    <div class="col-xs-8 col-sm-3"><strong>{{ trans('financier.application.show.label.gender') }}</strong></div>
                    <div class="col-xs-4 col-sm-3 text-right">{{ gender($apply->gender) }}</div>
                </div>
                <div class="row">
                    <div class="col-xs-8 col-sm-3"><strong>{{ trans('financier.application.show.label.occupation') }}</strong></div>
                    <div class="col-xs-4 col-sm-3 text-right">{{ occupation($apply->occupation) }}</div>
                    <div class="col-xs-8 col-sm-3"><strong>{{ trans('financier.application.show.label.monthly_income') }}</strong></div>
                    <div class="col-xs-4 col-sm-3 text-right">{{ $apply->monthly_income }}</div>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">{{ trans('financier.application.show.section.property_ownership') }}</div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-8 col-sm-3"><strong>{{ trans('financier.application.show.label.private_residential') }}</strong></div>
                    <div class="col-xs-4 col-sm-3 text-right">{{ yesOrNo($apply->property_ownership_1) }}</div>
                    <div class="col-xs-8 col-sm-3"><strong>{{ trans('financier.application.show.label.home_ownership') }}</strong></div>
                    <div class="col-xs-4 col-sm-3 text-right">{{ yesOrNo($apply->property_ownership_2) }}</div>
                </div>
                <div class="row">
                    <div class="col-xs-8 col-sm-3"><strong>{{ trans('financier.application.show.label.public_home_ownership') }}</strong></div>
                    <div class="col-xs-4 col-sm-3 text-right">{{ yesOrNo($apply->property_ownership_3) }}</div>
                    <div class="col-xs-8 col-sm-3"><strong>{{ trans('financier.application.show.label.village_houses') }}</strong></div>
                    <div class="col-xs-4 col-sm-3 text-right">{{ yesOrNo($apply->property_ownership_4) }}</div>
                </div>
                <div class="row">
                    <div class="col-xs-8 col-sm-3"><strong>{{ trans('financier.application.show.label.no_property') }}</strong></div>
                    <div class="col-xs-4 col-sm-3 text-right">{{ yesOrNo($apply->property_ownership_5) }}</div>
                    <div class="col-xs-8 col-sm-3"><strong>&nbsp;</strong></div>
                    <div class="col-xs-4 col-sm-3 text-right">&nbsp;</div>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">{{ trans('financier.application.show.section.loan') }}</div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-8 col-sm-3"><strong>{{ trans('financier.application.show.label.loan_type') }}</strong></div>
                    <div class="col-xs-4 col-sm-3 text-right">{{ loanType($apply->loan_type) }}</div>
                    <div class="col-xs-8 col-sm-3"><strong>{{ trans('financier.application.show.label.apply_amount') }}</strong></div>
                    <div class="col-xs-4 col-sm-3 text-right">{{ $apply->apply_amount }}</div>
                </div>
                <div class="row">
                    <div class="col-xs-8 col-sm-3"><strong>{{ trans('financier.application.show.label.loan_period') }}</strong></div>
                    <div class="col-xs-4 col-sm-3 text-right">{{ $apply->loan_period }}</div>
                    <div class="col-xs-8 col-sm-3">&nbsp;</div>
                    <div class="col-xs-4 col-sm-3 text-right">&nbsp;</div>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">{{ trans('financier.application.show.section.others') }}</div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-8 col-sm-3"><strong>{{ trans('financier.application.show.label.payroll') }}</strong></div>
                    <div class="col-xs-4 col-sm-3 text-right">{{ payRoll($apply->payroll) }}</div>
                    <div class="col-xs-8 col-sm-3"><strong>{{ trans('financier.application.show.label.mpf') }}</strong></div>
                    <div class="col-xs-4 col-sm-3 text-right">{{ yesOrNo($apply->mpf) }}</div>
                </div>
                <div class="row">
                    <div class="col-xs-8 col-sm-3"><strong>{{ trans('financier.application.show.label.once_bankruptcy') }}</strong></div>
                    <div class="col-xs-4 col-sm-3 text-right">{{ yesOrNo($apply->once_bankruptcy) }}</div>
                    <div class="col-xs-6 col-sm-3">&nbsp;</div>
                    <div class="col-xs-6 col-sm-3 text-right">&nbsp;</div>
                </div>
            </div>
        </div>
    </div>
@stop
