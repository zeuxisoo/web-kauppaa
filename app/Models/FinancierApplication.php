<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FinancierApplication extends Model {

    protected $fillable = [
        'user_id', 'apply_id',
    ];

}
