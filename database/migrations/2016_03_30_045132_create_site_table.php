<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiteTable extends Migration {

    public function up() {
        Schema::create('sites', function(Blueprint $table) {
            $table->increments('id');
            $table->enum('category', ['about_us', 'contact_us']);
            $table->string('description');
            $table->timestamps();
        });

        DB::table('sites')->insert(['id' => 1, 'category' => 'about_us', 'description' => '']);
        DB::table('sites')->insert(['id' => 2, 'category' => 'contact_us', 'description' => '']);
    }

    public function down() {
        Schema::drop('sites');
    }

}
