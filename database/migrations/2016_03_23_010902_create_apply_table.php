<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplyTable extends Migration {

    public function up() {
        Schema::create('applies', function(Blueprint $table) {
            $table->increments('id');
            $table->string('chinese_name', 50);
            $table->string('english_name', 50);
            $table->string('hkid', 10);
            $table->tinyInteger('gender')->default(1);
            $table->tinyInteger('occupation')->default(1);
            $table->mediumInteger('monthly_income');
            $table->tinyInteger('property_ownership_1')->nullable()->default(0);
            $table->tinyInteger('property_ownership_2')->nullable()->default(0);
            $table->tinyInteger('property_ownership_3')->nullable()->default(0);
            $table->tinyInteger('property_ownership_4')->nullable()->default(0);
            $table->tinyInteger('property_ownership_5')->nullable()->default(0);
            $table->tinyInteger('loan_type')->default(1);
            $table->mediumInteger('apply_amount');
            $table->tinyInteger('loan_period');
            $table->tinyInteger('payroll')->default(1);
            $table->tinyInteger('mpf')->default(1);
            $table->tinyInteger('once_bankruptcy')->default(2);
            $table->tinyInteger('status')->default(1); // 1: waiting, 2: reviewing, 3: approved, 4: completed
            $table->timestamps();
        });
    }

    public function down() {
        Schema::drop('applies');
    }

}
