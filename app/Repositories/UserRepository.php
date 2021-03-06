<?php
namespace App\Repositories;

use App\Bases\AppRepository;
use App\Models\User;

class UserRepository extends AppRepository {

    public function __construct(User $user) {
        $this->user = $user;
    }

    public function create($input, $role) {
        return (new User)->create($input)->attachRole($role);
    }

    public function findById($user_id) {
        return $this->user->find($user_id);
    }

    public function updateMyProfile($user_id, $input) {
        return $this->user->whereId($user_id)->update($input);
    }

    public function updateMyPassword($user_id, $input) {
        return $this->user->whereId($user_id)->update($input);
    }

}
