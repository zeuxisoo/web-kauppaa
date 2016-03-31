<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinancierApplicationTable extends Migration {

    public function up() {
        Schema::create('financier_applications', function(Blueprint $table) {
            $table->increments('id');
            $table->mediumInteger('user_id')->unsigned()->index();
            $table->mediumInteger('apply_id')->unsigned()->index();
            $table->enum('status', ['matched', 'rejected', 'approved', 'completed'])->default('matched');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::drop('financier_applications');
    }
}
