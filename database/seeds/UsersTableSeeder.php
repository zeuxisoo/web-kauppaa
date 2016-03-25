<?php
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UsersTableSeeder extends Seeder {

    public function run() {
        $user_role      = Role::whereName('user')->first();
        $financier_role = Role::whereName('financier')->first();
        $admin_role     = Role::whereName('admin')->first();

        (new User)->create([
            'username' => "user",
            'password' => Hash::make("12345678"),
            'email'    => "user@user.com"
        ])->attachRole($user_role);

        sleep(1);

        (new User)->create([
            'username' => "financier",
            'password' => Hash::make("12345678"),
            'email'    => "financier@financier.com"
        ])->attachRole($financier_role);

        sleep(1);

        (new User)->create([
            'username' => "admin",
            'password' => Hash::make("12345678"),
            'email'    => "admin@admin.com"
        ])->attachRole($admin_role);
    }

}
