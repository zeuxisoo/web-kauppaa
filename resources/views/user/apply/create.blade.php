@extends('layout.frontend')

@section('container')
    <div id="user-apply-create" class="user user-apply user-apply-create">
        <div class="container">
            <div class="page-title">Application form</div>
            <hr>
            <form class="form-horizontal">
                <div class="panel panel-default">
                    <div class="panel-heading">Part 1</div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="chinese_name" class="col-sm-3 control-label">Chinese name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="chinese_name" placeholder="Chinese name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="english_name" class="col-sm-3 control-label">English name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="english_name" placeholder="English name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="hkid" class="col-sm-3 control-label">HKID</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="hkid" placeholder="HKID">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="gender" class="col-sm-3 control-label">Gender</label>
                            <div class="col-sm-9">
                                <select name="gender" class="form-control">
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="occupation" class="col-sm-3 control-label">Occupation</label>
                            <div class="col-sm-9">
                                <select name="occupation" class="form-control">
                                    <option value="1">Teacher</option>
                                    <option value="2">Designer</option>
                                    <option value="3">Sale</option>
                                    <option value="4">Clerk</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="monthly_income" class="col-sm-3 control-label">Monthly Income</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="monthly_income" placeholder="Monthly Income">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="property_ownership" class="col-sm-3 control-label">Property Ownership</label>
                            <div class="col-sm-9">
                                <div class="row multi-checkbox">
                                    <div class="col-xs-12">
                                        <input type="checkbox" name="property_ownership_1" value="1"> Private residential
                                    </div>
                                    <div class="col-xs-12">
                                        <input type="checkbox" name="property_ownership_2" value="2"> Home ownership
                                    </div>
                                    <div class="col-xs-12">
                                        <input type="checkbox" name="property_ownership_3" value="3"> Public home ownership
                                    </div>
                                    <div class="col-xs-12">
                                        <input type="checkbox" name="property_ownership_4" value="4"> Village houses
                                    </div>
                                    <div class="col-xs-12">
                                        <input type="checkbox" name="property_ownership_5" value="5"> No property
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
                                <select name="loan_type" class="form-control">
                                    <option value="1">Type 1</option>
                                    <option value="2">Type 2</option>
                                    <option value="3">Type 3</option>
                                    <option value="4">Type 4</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="apply_amount" class="col-sm-3 control-label">Apply amount</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="apply_amount" placeholder="Monthly Income">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="loan_period" class="col-sm-3 control-label">Loan period</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="loan_period" placeholder="Monthly Income">
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
                                <select name=""payroll"" class="form-control">
                                    <option value="1">Auto pay</option>
                                    <option value="2">Check</option>
                                    <option value="3">Cash</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mpf" class="col-sm-3 control-label">MPF</label>
                            <div class="col-sm-9">
                                <select name="mpf" class="form-control">
                                    <option value="1">Yes</option>
                                    <option value="2">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="once_bankruptcy" class="col-sm-3 control-label">Once bankruptcy</label>
                            <div class="col-sm-9">
                                <select name="once_bankruptcy" class="form-control">
                                    <option value="1">Yes</option>
                                    <option value="2" selected="selected">No</option>
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
                                <input type="file" class="form-control filestyle" data-icon="false" data-buttonText="Browse" name="upload_hkid" accept="image/jpeg,image/gif,image/png">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="upload_address" class="col-sm-3 control-label">Upload Address</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control filestyle" data-icon="false" data-buttonText="Browse" name="upload_address" accept="image/jpeg,image/gif,image/png">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="upload_income" class="col-sm-3 control-label">Upload Income</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control filestyle" data-icon="false" data-buttonText="Browse" name="upload_income" accept="image/jpeg,image/gif,image/png">
                            </div>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-default btn-info pull-right">Submit</button>
            </form>
        </div>
    </div>
@stop
