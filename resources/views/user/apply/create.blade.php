@extends('layout.frontend')

@section('container')
    <div id="user-apply-create" class="user user-apply user-apply-create">
        <div class="container">
            <div class="page-title">Application form</div>
            <hr>
            <form class="form-horizontal" method="post" action="{{ route('web.user.apply.store') }}" accept-charset="UTF-8" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="panel panel-default">
                    <div class="panel-heading">Part 1</div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="chinese_name" class="col-sm-3 control-label">Chinese name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="chinese_name" name="chinese_name" placeholder="Chinese name" value="{{ Input::old('chinese_name') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="english_name" class="col-sm-3 control-label">English name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="english_name" name="english_name" placeholder="English name" value="{{ Input::old('english_name') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="hkid" class="col-sm-3 control-label">HKID</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="hkid" name="hkid" placeholder="HKID" value="{{ Input::old('hkid') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="gender" class="col-sm-3 control-label">Gender</label>
                            <div class="col-sm-9">
                                <select name="gender" id="gender" class="form-control">
                                    <option value="1" {{ Input::old("gender") == "1" ? "selected='selected'" : "" }}>Male</option>
                                    <option value="2" {{ Input::old("gender") == "2" ? "selected='selected'" : "" }}>Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="occupation" class="col-sm-3 control-label">Occupation</label>
                            <div class="col-sm-9">
                                <select name="occupation" id="occupation" class="form-control">
                                    <option value="1" {{ Input::old("occupation") == "1" ? "selected='selected'" : "" }}>Teacher</option>
                                    <option value="2" {{ Input::old("occupation") == "2" ? "selected='selected'" : "" }}>Designer</option>
                                    <option value="3" {{ Input::old("occupation") == "3" ? "selected='selected'" : "" }}>Sale</option>
                                    <option value="4" {{ Input::old("occupation") == "4" ? "selected='selected'" : "" }}>Clerk</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="monthly_income" class="col-sm-3 control-label">Monthly Income</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="monthly_income" name="monthly_income" placeholder="Monthly Income" value="{{ Input::old('monthly_income') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="property_ownership" class="col-sm-3 control-label">Property Ownership</label>
                            <div class="col-sm-9">
                                <div class="row multi-checkbox">
                                    <div class="col-xs-12">
                                        <input type="checkbox" id="property_ownership_1" name="property_ownership_1" value="1" {{ Input::old("property_ownership_1") == "1" ? "checked='checked'" : "" }}>
                                        <label for="property_ownership_1" class="no-bold">Private residential</label>
                                    </div>
                                    <div class="col-xs-12">
                                        <input type="checkbox" id="property_ownership_2" name="property_ownership_2" value="2" {{ Input::old("property_ownership_2") == "2" ? "checked='checked'" : "" }}>
                                        <label for="property_ownership_2" class="no-bold">Home ownership</label>
                                    </div>
                                    <div class="col-xs-12">
                                        <input type="checkbox" id="property_ownership_3" name="property_ownership_3" value="3" {{ Input::old("property_ownership_3") == "3" ? "checked='checked'" : "" }}>
                                        <label for="property_ownership_3" class="no-bold">Public home ownership</label>
                                    </div>
                                    <div class="col-xs-12">
                                        <input type="checkbox" id="property_ownership_4" name="property_ownership_4" value="4" {{ Input::old("property_ownership_4") == "4" ? "checked='checked'" : "" }}>
                                        <label for="property_ownership_4" class="no-bold">Village houses</label>
                                    </div>
                                    <div class="col-xs-12">
                                        <input type="checkbox" id="property_ownership_5" name="property_ownership_5" value="5" {{ Input::old("property_ownership_5") == "5" ? "checked='checked'" : "" }}>
                                        <label for="property_ownership_5" class="no-bold">No property</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">Part 2</div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="loan_type" class="col-sm-3 control-label">Loan type</label>
                            <div class="col-sm-9">
                                <select name="loan_type" id="loan_type" class="form-control">
                                    <option value="1" {{ Input::old("occupation") == "1" ? "selected='selected'" : "" }}>Type 1</option>
                                    <option value="2" {{ Input::old("occupation") == "2" ? "selected='selected'" : "" }}>Type 2</option>
                                    <option value="3" {{ Input::old("occupation") == "3" ? "selected='selected'" : "" }}>Type 3</option>
                                    <option value="4" {{ Input::old("occupation") == "4" ? "selected='selected'" : "" }}>Type 4</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="apply_amount" class="col-sm-3 control-label">Apply amount</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="apply_amount" name="apply_amount" placeholder="Monthly Income" value="{{ Input::old('apply_amount') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="loan_period" class="col-sm-3 control-label">Loan period</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="loan_period" name="loan_period" placeholder="Monthly Income" value="{{ Input::old('loan_period') }}">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">Part 3</div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label for=""payroll"" class="col-sm-3 control-label">Pay roll</label>
                            <div class="col-sm-9">
                                <select name="payroll" id="payroll" class="form-control">
                                    <option value="1" {{ Input::old("payroll") == "1" ? "selected='selected'" : "" }}>Auto pay</option>
                                    <option value="2" {{ Input::old("payroll") == "2" ? "selected='selected'" : "" }}>Check</option>
                                    <option value="3" {{ Input::old("payroll") == "3" ? "selected='selected'" : "" }}>Cash</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mpf" class="col-sm-3 control-label">MPF</label>
                            <div class="col-sm-9">
                                <select name="mpf" id="mpf" class="form-control">
                                    <option value="1" {{ Input::old("mpf") == "1" ? "selected='selected'" : "" }}>Yes</option>
                                    <option value="2" {{ Input::old("mpf") == "2" ? "selected='selected'" : "" }}>No</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="once_bankruptcy" class="col-sm-3 control-label">Once bankruptcy</label>
                            <div class="col-sm-9">
                                <select name="once_bankruptcy" id="once_bankruptcy" class="form-control">
                                    <option value="1" {{ Input::old("once_bankruptcy") == "1" ? "selected='selected'" : "" }}>Yes</option>
                                    <option value="2" {{ Input::old("once_bankruptcy") == "2" ? "selected='selected'" : "" }}>No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">Part 4</div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="upload_hkid" class="col-sm-3 control-label">Upload HKID</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control filestyle" data-icon="false" data-buttonText="Browse" name="upload_hkid" id="upload_hkid" accept="image/jpeg,image/gif,image/png">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="upload_address" class="col-sm-3 control-label">Upload Address</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control filestyle" data-icon="false" data-buttonText="Browse" name="upload_address" id="upload_address" accept="image/jpeg,image/gif,image/png">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="upload_income" class="col-sm-3 control-label">Upload Income</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control filestyle" data-icon="false" data-buttonText="Browse" name="upload_income" id="upload_income" accept="image/jpeg,image/gif,image/png">
                            </div>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-default btn-info pull-right">Submit</button>
            </form>
        </div>
    </div>
@stop
