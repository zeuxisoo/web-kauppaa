<?php
namespace App\Http\Requests;

use App\Http\Requests\Request;

class AdminApplyUpdateRequest extends Request {

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'financier_id' => 'required|exists:financier_applications,user_id',
        ];
    }

    public function messages() {
        return [];
    }

}
