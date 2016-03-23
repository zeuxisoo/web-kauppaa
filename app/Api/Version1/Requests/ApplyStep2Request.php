<?php
namespace App\Api\Version1\Requests;

use Illuminate\Contracts\Validation\Validator;
use App\Api\Version1\Bases\ApiRequest;

class ApplyStep2Request extends ApiRequest {

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'apply_id' => 'required|exists:applies,id',
            'category' => 'required|in:hkid,address,income',
            'file'     => 'required|mimes:jpg,jpeg,png,gif',
        ];
    }

    public function messages() {
        return [
            'apply_id.required' => 'You must provide the apply id before submit photo'
        ];
    }

}
