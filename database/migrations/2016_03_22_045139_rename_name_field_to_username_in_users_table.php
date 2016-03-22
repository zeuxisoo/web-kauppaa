<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameNameFieldToUsernameInUsersTable extends Migration {

    public function up() {
        Schema::table('users', function($table) {
            $table->renameColumn('name', 'username');
            $table->unique('username');
        });
    }

    public function down() {
        Schema::table('users', function($table) {
            $table->renameColumn('username', 'name');
            $table->dropUnique('users_username_unique');
        });
    }

}
