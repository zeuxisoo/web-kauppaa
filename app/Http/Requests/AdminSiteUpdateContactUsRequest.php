<?php
namespace App\Http\Requests;

use App\Http\Requests\Request;

class AdminSiteUpdateContactUsRequest extends Request {

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'id'          => 'required|exists:sites,id',
            'description' => 'required',
        ];
    }

    public function messages() {
        return [];
    }

}
