<?php
namespace App\Api\Version1\Repositories;

use App\Api\Version1\Bases\ApiRepository;
use App\Models\User;

class UserRepository extends ApiRepository {

    public function __construct(User $user) {
        $this->user = $user;
    }

    public function create($input) {
        return (new $this->user)->create($input);
    }

}
