<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration {

    public function up() {
        Schema::create('news', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('summary');
            $table->string('content');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::drop('news');
    }

}
