<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use App\Models\Apply;
use App\Models\FinancierApplication;

class User extends Authenticatable {

    use EntrustUserTrait {
         EntrustUserTrait::restore as private restoreEntrustUser;
    }

    use SoftDeletes {
        SoftDeletes::restore as private restoreSoftDeletes;
    }

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name', 'username', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function applies() {
        return $this->hasMany(Apply::class);
    }

    public function restore() {
        $this->restoreEntrustUser();
        $this->restoreSoftDeletes();
    }

}
