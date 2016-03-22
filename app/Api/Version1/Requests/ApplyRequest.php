<?php
namespace App\Api\Version1\Requests;

use Illuminate\Contracts\Validation\Validator;
use App\Api\Version1\Bases\ApiRequest;

class ApplyRequest extends ApiRequest {

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
        ];
    }

    public function messages() {
        return [];
    }

}
