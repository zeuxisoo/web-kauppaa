<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use App\Models\Apply;

class User extends Authenticatable {

    use EntrustUserTrait;

    protected $fillable = [
        'name', 'username', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function applies() {
        return $this->hasMany(Apply::class);
    }

}
