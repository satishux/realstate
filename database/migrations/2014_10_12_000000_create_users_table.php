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
            $table->increments('id');
            $table->string('name');
            $table->string('username');
            $table->string('email')->unique();
            $table->date('dob');
            $table->string('gender');
            $table->string('marital_status');
            $table->string('address');
            $table->string('state');
            $table->string('city');
            $table->bigInteger('contact_no');
            $table->string('position');
            $table->string('sponsor_id');
            $table->string('parent_id');
            $table->string('password');
            $table->unsignedInteger('role_id');
            $table->rememberToken();
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
