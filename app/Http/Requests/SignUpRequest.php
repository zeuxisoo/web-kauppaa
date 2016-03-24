<?php
namespace App\Http\Requests;

use App\Http\Requests\Request;

class SignUpRequest extends Request {

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'username' => 'required|min:3|unique:users,username',
            'password' => 'required|min:8',
            'email'    => 'required|email|unique:users,email',
            'role'     => 'required|exists:roles,name'
        ];
    }

    public function messages() {
        return [];
    }

}
