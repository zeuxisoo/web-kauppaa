<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplyPhotoTable extends Migration {

    public function up() {
        Schema::create('apply_photos', function(Blueprint $table) {
            $table->increments('id');
            $table->mediumInteger('apply_id');
            $table->string('category', 30); // hkid, address, income
            $table->string('photo', 60);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::drop('apply_photos');
    }

}
