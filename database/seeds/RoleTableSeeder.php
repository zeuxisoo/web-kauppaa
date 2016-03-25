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
        $role->name         = 'financier';
        $role->display_name = 'Financier';             // optional
        $role->description  = 'Financier user level';  // optional
        $role->save();

        $role               = new Role();
        $role->name         = 'admin';
        $role->display_name = 'Admin';          // optional
        $role->description  = 'Admin level';    // optional
        $role->save();
    }

}
