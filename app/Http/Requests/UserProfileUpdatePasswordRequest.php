<?php
namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserProfileUpdatePasswordRequest extends Request {

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'old_password'              => 'required',
            'new_password'              => 'required|min:8|confirmed',
            'new_password_confirmation' => 'required|min:8'
        ];
    }

    public function messages() {
        return [
        ];
    }

}
