<?php
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder {

    public function run() {
        (new User)->create([
            'username' => "test",
            'password' => Hash::make("testtest"),
            'email'    => "test@test.com"
        ]);

        sleep(1);

        (new User)->create([
            'username' => "test1",
            'password' => Hash::make("testtest"),
            'email'    => "test1@test1.com"
        ]);

        sleep(1);

        (new User)->create([
            'username' => "test2",
            'password' => Hash::make("testtest"),
            'email'    => "test2@test2.com"
        ]);
    }

}
