<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUuoUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uuo_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 128);
            $table->string('password', 256);
            $table->string('email');
			$table->string('uniqeid', 64);
			$table->rememberToken();
			$table->integer('count');
            $table->unsignedTinyInteger('delflag');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('uuo_users');
    }
}
