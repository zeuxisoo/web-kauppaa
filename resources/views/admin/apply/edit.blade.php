@extends('layout.backend.dashboard')

@section('container_dashboard')
    <div id="admin-dashboard-apply-edit" class="admin admin-dashboard admin-dashboard-apply admin-dashboard-apply-edit">
        <h3 class="page-header">{{ trans('admin.apply.edit.title') }}</h3>

        @include('shared.flash_message')

        <div class="row">
            <div class="col-xs-12">
                <a href="javascript:history.back()" class="btn btn-xs btn-default">Back</a>
                <a href="{{ route('web.admin.apply.show', ['id' => $apply->id]) }}" class="btn btn-xs btn-info">View</a>
            </div>
        </div>

        <br />

        <div class="panel panel-default">
            <div class="panel-body">
                <form class="form-horizontal" method="post" action="{{ route('web.admin.apply.update', ['id' => $apply->id]) }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="financier_id" value="{{ $financier->id }}">
                    <div class="form-group">
                        <label for="status" class="col-xs-3 col-md-2 control-label">Status</label>
                        <div class="col-xs-9 col-md-10">
                            <select name="status" class="form-control">
                                @foreach($status as $name)
                                    @if (strtolower($name) == strtolower($apply->status))
                                        <option value="{{ $name }}" selected="selected">{{ status(strtolower($name)) }}</option>
                                    @else
                                        <option value="{{ $name }}">{{ status(strtolower($name)) }}</option>
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

        @if ($financier !== null)
            <hr />

            <div class="panel panel-info">
                <div class="panel-heading">Financier</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-8 col-sm-3"><strong>{{ trans('admin.apply.show.label.username') }}</strong></div>
                        <div class="col-xs-4 col-sm-3 text-right">{{ $financier->username }}</div>
                        <div class="col-xs-8 col-sm-3"><strong>{{ trans('admin.apply.show.label.email') }}</strong></div>
                        <div class="col-xs-4 col-sm-3 text-right">{{ $financier->email }}</div>
                    </div>
                </div>
            </div>

            <hr />
        @endif

        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-3"><strong>{{ trans('admin.apply.show.label.status') }}</strong></div>
                    <div class="col-xs-9 text-right">{{ status($apply->status) }}</div>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">{{ trans('admin.apply.show.section.personal') }}</div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-8 col-sm-3"><strong>{{ trans('admin.apply.show.label.chinese_name') }}</strong></div>
                    <div class="col-xs-4 col-sm-3 text-right">{{ $apply->chinese_name }}</div>
                    <div class="col-xs-8 col-sm-3"><strong>{{ trans('admin.apply.show.label.english_name') }}</strong></div>
                    <div class="col-xs-4 col-sm-3 text-right">{{ $apply->english_name }}</div>
                </div>
                <div class="row">
                    <div class="col-xs-8 col-sm-3"><strong>{{ trans('admin.apply.show.label.hkid') }}</strong></div>
                    <div class="col-xs-4 col-sm-3 text-right">{{ $apply->hkid }}</div>
                    <div class="col-xs-8 col-sm-3"><strong>{{ trans('admin.apply.show.label.gender') }}</strong></div>
                    <div class="col-xs-4 col-sm-3 text-right">{{ gender($apply->gender) }}</div>
                </div>
                <div class="row">
                    <div class="col-xs-8 col-sm-3"><strong>{{ trans('admin.apply.show.label.occupation') }}</strong></div>
                    <div class="col-xs-4 col-sm-3 text-right">{{ occupation($apply->occupation) }}</div>
                    <div class="col-xs-8 col-sm-3"><strong>{{ trans('admin.apply.show.label.monthly_income') }}</strong></div>
                    <div class="col-xs-4 col-sm-3 text-right">{{ $apply->monthly_income }}</div>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">{{ trans('admin.apply.show.section.property_ownership') }}</div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-8 col-sm-3"><strong>{{ trans('admin.apply.show.label.private_residential') }}</strong></div>
                    <div class="col-xs-4 col-sm-3 text-right">{{ yesOrNo($apply->property_ownership_1) }}</div>
                    <div class="col-xs-8 col-sm-3"><strong>{{ trans('admin.apply.show.label.home_ownership') }}</strong></div>
                    <div class="col-xs-4 col-sm-3 text-right">{{ yesOrNo($apply->property_ownership_2) }}</div>
                </div>
                <div class="row">
                    <div class="col-xs-8 col-sm-3"><strong>{{ trans('admin.apply.show.label.public_home_ownership') }}</strong></div>
                    <div class="col-xs-4 col-sm-3 text-right">{{ yesOrNo($apply->property_ownership_3) }}</div>
                    <div class="col-xs-8 col-sm-3"><strong>{{ trans('admin.apply.show.label.village_houses') }}</strong></div>
                    <div class="col-xs-4 col-sm-3 text-right">{{ yesOrNo($apply->property_ownership_4) }}</div>
                </div>
                <div class="row">
                    <div class="col-xs-8 col-sm-3"><strong>{{ trans('admin.apply.show.label.no_property') }}</strong></div>
                    <div class="col-xs-4 col-sm-3 text-right">{{ yesOrNo($apply->property_ownership_5) }}</div>
                    <div class="col-xs-8 col-sm-3"><strong>&nbsp;</strong></div>
                    <div class="col-xs-4 col-sm-3 text-right">&nbsp;</div>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">{{ trans('admin.apply.show.section.loan') }}</div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-8 col-sm-3"><strong>{{ trans('admin.apply.show.label.loan_type') }}</strong></div>
                    <div class="col-xs-4 col-sm-3 text-right">{{ loanType($apply->loan_type) }}</div>
                    <div class="col-xs-8 col-sm-3"><strong>{{ trans('admin.apply.show.label.apply_amount') }}</strong></div>
                    <div class="col-xs-4 col-sm-3 text-right">{{ $apply->apply_amount }}</div>
                </div>
                <div class="row">
                    <div class="col-xs-8 col-sm-3"><strong>{{ trans('admin.apply.show.label.loan_period') }}</strong></div>
                    <div class="col-xs-4 col-sm-3 text-right">{{ $apply->loan_period }}</div>
                    <div class="col-xs-8 col-sm-3">&nbsp;</div>
                    <div class="col-xs-4 col-sm-3 text-right">&nbsp;</div>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">{{ trans('admin.apply.show.section.others') }}</div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-8 col-sm-3"><strong>{{ trans('admin.apply.show.label.payroll') }}</strong></div>
                    <div class="col-xs-4 col-sm-3 text-right">{{ payRoll($apply->payroll) }}</div>
                    <div class="col-xs-8 col-sm-3"><strong>{{ trans('admin.apply.show.label.mpf') }}</strong></div>
                    <div class="col-xs-4 col-sm-3 text-right">{{ yesOrNo($apply->mpf) }}</div>
                </div>
                <div class="row">
                    <div class="col-xs-8 col-sm-3"><strong>{{ trans('admin.apply.show.label.once_bankruptcy') }}</strong></div>
                    <div class="col-xs-4 col-sm-3 text-right">{{ yesOrNo($apply->once_bankruptcy) }}</div>
                    <div class="col-xs-6 col-sm-3">&nbsp;</div>
                    <div class="col-xs-6 col-sm-3 text-right">&nbsp;</div>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">{{ trans('admin.apply.show.section.upload') }}</div>
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
@stop
