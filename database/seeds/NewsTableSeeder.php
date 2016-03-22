<?php

use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;
use App\Models\News;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = FakerFactory::create();

        foreach(range(1, 10) as $index) {
            (new News)->create([
                'title'   => $faker->sentence,
                'content' => $faker->paragraph,
            ]);
            sleep(1);
        }
    }
}
