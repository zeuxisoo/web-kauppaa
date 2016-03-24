<?php
namespace App\Repositories;

use App\Bases\AppRepository;
use App\Models\User;

class UserRepository extends AppRepository {

    public function __construct(User $user) {
        $this->user = $user;
    }

    public function create($input) {
        return (new User)->create($input);
    }

}
