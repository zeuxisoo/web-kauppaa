<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplyTable extends Migration {

    public function up() {
        Schema::create('applies', function(Blueprint $table) {
            $table->increments('id');
            $table->mediumInteger('user_id')->unsigned()->index();
            $table->string('code', 40)->index();
            $table->string('chinese_name', 50);
            $table->string('english_name', 50);
            $table->string('hkid', 10);
            $table->tinyInteger('gender')->unsigned()->default(1);
            $table->tinyInteger('occupation')->unsigned()->default(1);
            $table->mediumInteger('monthly_income')->unsigned();
            $table->boolean('property_ownership_1')->nullable()->default(false);
            $table->boolean('property_ownership_2')->nullable()->default(false);
            $table->boolean('property_ownership_3')->nullable()->default(false);
            $table->boolean('property_ownership_4')->nullable()->default(false);
            $table->boolean('property_ownership_5')->nullable()->default(false);
            $table->tinyInteger('loan_type')->unsigned()->default(1);
            $table->mediumInteger('apply_amount')->unsigned();
            $table->tinyInteger('loan_period')->unsigned();
            $table->tinyInteger('payroll')->unsigned()->default(1);
            $table->tinyInteger('mpf')->unsigned()->default(1);
            $table->tinyInteger('once_bankruptcy')->unsigned()->default(2);
            $table->enum('status', [
                'waiting', 'reviewing', 'published', 'matched', 'approved', 'completed'
            ])->default('waiting');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::drop('applies');
    }

}
