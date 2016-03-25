<?php
use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;
use App\Models\News;

class NewsTableSeeder extends Seeder {

    public function run() {
        $faker = FakerFactory::create();

        foreach(range(1, 10) as $index) {
            (new News)->create([
                'title'   => $faker->sentence,
                'summary' => $faker->paragraph,
                'content' => $faker->paragraph(100),
            ]);
            sleep(1);
        }
    }

}
