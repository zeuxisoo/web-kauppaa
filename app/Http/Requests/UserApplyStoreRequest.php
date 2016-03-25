<?php
namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserApplyStoreRequest extends Request {

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'chinese_name'         => 'required',
            'english_name'         => 'required',
            'hkid'                 => 'required',
            'gender'               => 'required',
            'occupation'           => 'required',
            'monthly_income'       => 'required',
            'property_ownership_1' => 'required_without:property_ownership_2,property_ownership_3,property_ownership_4,property_ownership_5',
            'property_ownership_2' => 'required_without:property_ownership_1,property_ownership_3,property_ownership_4,property_ownership_5',
            'property_ownership_3' => 'required_without:property_ownership_1,property_ownership_2,property_ownership_4,property_ownership_5',
            'property_ownership_4' => 'required_without:property_ownership_1,property_ownership_2,property_ownership_3,property_ownership_5',
            'property_ownership_5' => 'required_without:property_ownership_1,property_ownership_2,property_ownership_3,property_ownership_4',
            'loan_type'            => 'required',
            'apply_amount'         => 'required',
            'loan_period'          => 'required',
            'payroll'              => 'required',
            'mpf'                  => 'required',
            'once_bankruptcy'      => 'required',
            'upload_hkid'          => 'required|mimes:jpg,jpeg,png,gif',
            'upload_address'       => 'required|mimes:jpg,jpeg,png,gif',
            'upload_income'        => 'required|mimes:jpg,jpeg,png,gif',
        ];
    }

    public function messages() {
        return [
            'property_ownership_1.required_without' => 'Please select at least one property ownership',
            'property_ownership_2.required_without' => 'Please select at least one property ownership',
            'property_ownership_3.required_without' => 'Please select at least one property ownership',
            'property_ownership_4.required_without' => 'Please select at least one property ownership',
            'property_ownership_5.required_without' => 'Please select at least one property ownership',
        ];
    }

}
