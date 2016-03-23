<?php
namespace App\Api\Version1\Transformers;

use League\Fractal\TransformerAbstract;
use App\Models\Apply;

class ApplyTransformer extends TransformerAbstract {

    public function transform(Apply $apply) {
        return [
            'id'                   => $apply->id,
            'chinese_name'         => $apply->chinese_name,
            'english_name'         => $apply->english_name,
            'hkid'                 => $apply->hkid,
            'gender'               => $apply->gender,
            'occupation'           => $apply->occupation,
            'monthly_income'       => $apply->monthly_income,
            'property_ownership_1' => $apply->property_ownership_1,
            'property_ownership_2' => $apply->property_ownership_2,
            'property_ownership_3' => $apply->property_ownership_3,
            'property_ownership_4' => $apply->property_ownership_4,
            'property_ownership_5' => $apply->property_ownership_5,
            'loan_type'            => $apply->loan_type,
            'apply_amount'         => $apply->apply_amount,
            'loan_period'          => $apply->loan_period,
            'payroll'              => $apply->payroll,
            'mpf'                  => $apply->mpf,
            'once_bankruptcy'      => $apply->once_bankruptcy,
            'status'               => $apply->status,
        ];
    }

}
