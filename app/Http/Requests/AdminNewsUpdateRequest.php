<?php
namespace App\Http\Requests;

use App\Http\Requests\Request;

class AdminNewsUpdateRequest extends Request {

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'id'      => 'required|exists:news,id',
            'title'   => 'required',
            'summary' => 'required',
            'content' => 'required',
        ];
    }

    public function messages() {
        return [];
    }

}
