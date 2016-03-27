<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\ApplyPhoto;

class Apply extends Model {

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'user_id', 'code',
        'chinese_name', 'english_name', 'hkid', 'gender', 'occupation', 'monthly_income',
        'property_ownership_1', 'property_ownership_2', 'property_ownership_3', 'property_ownership_4', 'property_ownership_5',
        'loan_type', 'apply_amount', 'loan_period', 'payroll', 'mpf', 'once_bankruptcy', 'status',
    ];

    public function photos() {
        return $this->hasMany(ApplyPhoto::class);
    }

}
