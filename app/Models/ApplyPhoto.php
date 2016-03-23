<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplyPhoto extends Model {

    protected $fillable = [
        'apply_id', 'category', 'photo'
    ];

}
