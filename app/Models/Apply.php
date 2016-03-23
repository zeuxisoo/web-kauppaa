<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Apply extends Model {

    protected $fillable = [
        'chinese_name', 'english_name', 'hkid', 'gender', 'occupation', 'monthly_income',
        'property_ownership_1', 'property_ownership_2', 'property_ownership_3', 'property_ownership_4', 'property_ownership_5',
        'loan_type', 'apply_amount', 'loan_period', 'payroll', 'mpf', 'once_bankruptcy', 'status',
    ];

}
