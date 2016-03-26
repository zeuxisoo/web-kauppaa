<?php
namespace App\Repositories;

use App\Bases\AppRepository;
use App\Models\Role;

class RoleRepository extends AppRepository {

    public function __construct(Role $role) {
        $this->role = $role;
    }

    public function findByName($name) {
        return $this->role->whereName($name)->first();
    }

}
