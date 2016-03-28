<?php
namespace App\Http\Requests;

use App\Http\Requests\Request;

class AdminNewsCreateRequest extends Request {

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'title'   => 'required',
            'summary' => 'required',
            'content' => 'required',
        ];
    }

    public function messages() {
        return [];
    }

}
