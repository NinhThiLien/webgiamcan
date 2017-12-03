<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id_user');
            $table->string('name');
            $table->string('email');
            $table->string('username')->unique();
            $table->string('password');
            $table->integer('id_purpose');
            $table->date('birthday')->nullable();
            $table->string('address')->nullable();
            $table->double('weight')->nullable();
            $table->string('job')->nullable();
            $table->integer('id_authority')->nullable();
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
        Schema::dropIfExists('users');
    }
}
