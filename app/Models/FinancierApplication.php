<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Apply;

class FinancierApplication extends Model {

    protected $fillable = [
        'user_id', 'apply_id',
    ];

    public function financier() {
        return $this->belongsTo(User::class, 'id');
    }

    public function apply() {
        return $this->belongsTo(Apply::class);
    }

}
