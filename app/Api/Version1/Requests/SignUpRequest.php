<?php
namespace App\Api\Version1\Requests;

use Illuminate\Contracts\Validation\Validator;
use App\Api\Version1\Bases\ApiRequest;

class SignUpRequest extends ApiRequest {

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'username' => 'required|min:3|unique:users,username',
            'password' => 'required|min:8',
            'email'    => 'required|email|unique:users,email',
        ];
    }

    public function messages() {
        return [];
    }

}
