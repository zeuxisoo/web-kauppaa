<?php
namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserProfileUpdateRequest extends Request {

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'username' => 'min:3|unique:users,username',
            'email'    => 'email|unique:users,email',
        ];
    }

    public function messages() {
        return [
        ];
    }

}
