@extends('layout.frontend')

@section('container')
    <div id="user-apply-create" class="user user-apply user-apply-create">
        <div class="container">
            <div class="page-title">{{ trans('user.apply.create.title') }}</div>
            <hr>
            <form class="form-horizontal" method="post" action="{{ route('web.user.apply.store') }}" accept-charset="UTF-8" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ trans('user.apply.create.part.one') }}</div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="chinese_name" class="col-sm-3 control-label">{{ trans('user.apply.create.label.chinese_name') }}</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="chinese_name" name="chinese_name" placeholder="{{ trans('user.apply.create.label.chinese_name') }}" value="{{ Input::old('chinese_name') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="english_name" class="col-sm-3 control-label">{{ trans('user.apply.create.label.english_name') }}</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="english_name" name="english_name" placeholder="{{ trans('user.apply.create.label.english_name') }}" value="{{ Input::old('english_name') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="hkid" class="col-sm-3 control-label">{{ trans('user.apply.create.label.hkid') }}</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="hkid" name="hkid" placeholder="{{ trans('user.apply.create.label.hkid') }}" value="{{ Input::old('hkid') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="gender" class="col-sm-3 control-label">{{ trans('user.apply.create.label.gender') }}</label>
                            <div class="col-sm-9">
                                <select name="gender" id="gender" class="form-control">
                                    <option value="1" {{ Input::old("gender") == "1" ? "selected='selected'" : "" }}>{{ trans('user.apply.create.options.gender.male') }}</option>
                                    <option value="2" {{ Input::old("gender") == "2" ? "selected='selected'" : "" }}>{{ trans('user.apply.create.options.gender.female') }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="occupation" class="col-sm-3 control-label">{{ trans('user.apply.create.label.occupation') }}</label>
                            <div class="col-sm-9">
                                <select name="occupation" id="occupation" class="form-control">
                                    <option value="1" {{ Input::old("occupation") == "1" ? "selected='selected'" : "" }}>
                                        {{ trans('user.apply.create.options.occupation.teacher') }}
                                    </option>
                                    <option value="2" {{ Input::old("occupation") == "2" ? "selected='selected'" : "" }}>
                                        {{ trans('user.apply.create.options.occupation.designer') }}
                                    </option>
                                    <option value="3" {{ Input::old("occupation") == "3" ? "selected='selected'" : "" }}>
                                        {{ trans('user.apply.create.options.occupation.sale') }}
                                    </option>
                                    <option value="4" {{ Input::old("occupation") == "4" ? "selected='selected'" : "" }}>
                                        {{ trans('user.apply.create.options.occupation.clerk') }}
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="monthly_income" class="col-sm-3 control-label">{{ trans('user.apply.create.label.monthly_income') }}</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="monthly_income" name="monthly_income" placeholder="{{ trans('user.apply.create.label.monthly_income') }}" value="{{ Input::old('monthly_income') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="property_ownership" class="col-sm-3 control-label">{{ trans('user.apply.create.label.property_ownership') }}</label>
                            <div class="col-sm-9">
                                <div class="row multi-checkbox">
                                    <div class="col-xs-12">
                                        <input type="checkbox" id="property_ownership_1" name="property_ownership_1" value="true" {{ Input::old("property_ownership_1") == "1" ? "checked='checked'" : "" }}>
                                        <label for="property_ownership_1" class="no-bold">{{ trans('user.apply.create.options.property_ownership.private_residential') }}</label>
                                    </div>
                                    <div class="col-xs-12">
                                        <input type="checkbox" id="property_ownership_2" name="property_ownership_2" value="true" {{ Input::old("property_ownership_2") == "2" ? "checked='checked'" : "" }}>
                                        <label for="property_ownership_2" class="no-bold">{{ trans('user.apply.create.options.property_ownership.home_ownership') }}</label>
                                    </div>
                                    <div class="col-xs-12">
                                        <input type="checkbox" id="property_ownership_3" name="property_ownership_3" value="true" {{ Input::old("property_ownership_3") == "3" ? "checked='checked'" : "" }}>
                                        <label for="property_ownership_3" class="no-bold">{{ trans('user.apply.create.options.property_ownership.public_home_ownership') }}</label>
                                    </div>
                                    <div class="col-xs-12">
                                        <input type="checkbox" id="property_ownership_4" name="property_ownership_4" value="true" {{ Input::old("property_ownership_4") == "4" ? "checked='checked'" : "" }}>
                                        <label for="property_ownership_4" class="no-bold">{{ trans('user.apply.create.options.property_ownership.village_houses') }}</label>
                                    </div>
                                    <div class="col-xs-12">
                                        <input type="checkbox" id="property_ownership_5" name="property_ownership_5" value="true" {{ Input::old("property_ownership_5") == "5" ? "checked='checked'" : "" }}>
                                        <label for="property_ownership_5" class="no-bold">{{ trans('user.apply.create.options.property_ownership.no_property') }}</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">{{ trans('user.apply.create.part.two') }}</div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="loan_type" class="col-sm-3 control-label">{{ trans('user.apply.create.label.loan_type') }}</label>
                            <div class="col-sm-9">
                                <select name="loan_type" id="loan_type" class="form-control">
                                    <option value="1" {{ Input::old("occupation") == "1" ? "selected='selected'" : "" }}>
                                        {{ trans('user.apply.create.options.loan_type.one') }}
                                    </option>
                                    <option value="2" {{ Input::old("occupation") == "2" ? "selected='selected'" : "" }}>
                                        {{ trans('user.apply.create.options.loan_type.two') }}
                                    </option>
                                    <option value="3" {{ Input::old("occupation") == "3" ? "selected='selected'" : "" }}>
                                        {{ trans('user.apply.create.options.loan_type.three') }}
                                    </option>
                                    <option value="4" {{ Input::old("occupation") == "4" ? "selected='selected'" : "" }}>
                                        {{ trans('user.apply.create.options.loan_type.four') }}
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="apply_amount" class="col-sm-3 control-label">{{ trans('user.apply.create.label.apply_amount') }}</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="apply_amount" name="apply_amount" placeholder="{{ trans('user.apply.create.label.apply_amount') }}" value="{{ Input::old('apply_amount') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="loan_period" class="col-sm-3 control-label">{{ trans('user.apply.create.label.loan_period') }}</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="loan_period" name="loan_period" placeholder="{{ trans('user.apply.create.label.loan_period') }}" value="{{ Input::old('loan_period') }}">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">{{ trans('user.apply.create.part.three') }}</div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label for=""payroll"" class="col-sm-3 control-label">{{ trans('user.apply.create.label.payroll') }}</label>
                            <div class="col-sm-9">
                                <select name="payroll" id="payroll" class="form-control">
                                    <option value="1" {{ Input::old("payroll") == "1" ? "selected='selected'" : "" }}>
                                        {{ trans('user.apply.create.options.payroll.auto_pay') }}
                                    </option>
                                    <option value="2" {{ Input::old("payroll") == "2" ? "selected='selected'" : "" }}>
                                        {{ trans('user.apply.create.options.payroll.check') }}
                                    </option>
                                    <option value="3" {{ Input::old("payroll") == "3" ? "selected='selected'" : "" }}>
                                        {{ trans('user.apply.create.options.payroll.cash') }}
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mpf" class="col-sm-3 control-label">{{ trans('user.apply.create.label.mpf') }}</label>
                            <div class="col-sm-9">
                                <select name="mpf" id="mpf" class="form-control">
                                    <option value="1" {{ Input::old("mpf") == "1" ? "selected='selected'" : "" }}>
                                        {{ trans('user.apply.create.options.mpf.yes') }}
                                    </option>
                                    <option value="2" {{ Input::old("mpf") == "2" ? "selected='selected'" : "" }}>
                                        {{ trans('user.apply.create.options.mpf.no') }}
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="once_bankruptcy" class="col-sm-3 control-label">{{ trans('user.apply.create.label.once_bankruptcy') }}</label>
                            <div class="col-sm-9">
                                <select name="once_bankruptcy" id="once_bankruptcy" class="form-control">
                                    <option value="1" {{ Input::old("once_bankruptcy") == "1" ? "selected='selected'" : "" }}>
                                        {{ trans('user.apply.create.options.once_bankruptcy.yes') }}
                                    </option>
                                    <option value="2" {{ Input::old("once_bankruptcy") == "2" ? "selected='selected'" : "" }}>
                                        {{ trans('user.apply.create.options.once_bankruptcy.no') }}
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">{{ trans('user.apply.create.part.four') }}</div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="upload_hkid" class="col-sm-3 control-label">{{ trans('user.apply.create.label.upload_hkid') }}</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control filestyle" data-icon="false" data-buttonText="{{ trans('user.apply.create.browser_button') }}" name="upload_hkid" id="upload_hkid" accept="image/jpeg,image/gif,image/png">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="upload_address" class="col-sm-3 control-label">{{ trans('user.apply.create.label.upload_address') }}</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control filestyle" data-icon="false" data-buttonText="{{ trans('user.apply.create.browser_button') }}" name="upload_address" id="upload_address" accept="image/jpeg,image/gif,image/png">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="upload_income" class="col-sm-3 control-label">{{ trans('user.apply.create.label.upload_income') }}</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control filestyle" data-icon="false" data-buttonText="{{ trans('user.apply.create.browser_button') }}" name="upload_income" id="upload_income" accept="image/jpeg,image/gif,image/png">
                            </div>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-default btn-info pull-right">{{ trans('user.apply.create.submit_button') }}</button>
            </form>
        </div>
    </div>
@stop
