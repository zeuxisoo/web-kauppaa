<?php
namespace App\Api\Version1\Transformers;

use League\Fractal\TransformerAbstract;
use App\Models\User;

class UserTransformer extends TransformerAbstract {

    public function transform(User $user) {
        return [
            'id'       => $user->id,
            'username' => $user->username,
            'email'    => $user->email,
        ];
    }

}
