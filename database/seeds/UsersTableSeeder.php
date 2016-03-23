<?php
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UsersTableSeeder extends Seeder {

    public function run() {
        $user_role  = Role::whereName('user')->first();
        $admin_role = Role::whereName('administrator')->first();

        (new User)->create([
            'username' => "test",
            'password' => Hash::make("testtest"),
            'email'    => "test@test.com"
        ])->attachRole($user_role);

        sleep(1);

        (new User)->create([
            'username' => "test1",
            'password' => Hash::make("testtest"),
            'email'    => "test1@test1.com"
        ])->attachRole($user_role);

        sleep(1);

        (new User)->create([
            'username' => "test2",
            'password' => Hash::make("testtest"),
            'email'    => "test2@test2.com"
        ])->attachRole($user_role);

        sleep(1);

        (new User)->create([
            'username' => "admin",
            'password' => Hash::make("12345678"),
            'email'    => "admin@admin.com"
        ])->attachRole($admin_role);
    }

}
