<?php
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleTableSeeder extends Seeder {

    public function run() {
        $role               = new Role();
        $role->name         = 'user';
        $role->display_name = 'User';               // optional
        $role->description  = 'Normal user level';  // optional
        $role->save();

        $role               = new Role();
        $role->name         = 'administrator';
        $role->display_name = 'Administrator';          // optional
        $role->description  = 'Administrator level';    // optional
        $role->save();
    }

}
