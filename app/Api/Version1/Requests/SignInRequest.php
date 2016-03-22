<?php
namespace App\Api\Version1\Requests;

use Illuminate\Contracts\Validation\Validator;
use App\Api\Version1\Bases\ApiRequest;

class SignInRequest extends ApiRequest {

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'username' => 'required|min:3|exists:users,username',
            'password' => 'required',
        ];
    }

    public function messages() {
        return [];
    }

}
