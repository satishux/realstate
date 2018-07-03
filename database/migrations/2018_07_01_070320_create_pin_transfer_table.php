<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePinTransferTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pin_transfer', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('pin_no');
            $table->unsignedInteger('pin_type_id');
            $table->unsignedInteger('sender_id');
            $table->unsignedInteger('reciver_id');
            $table->timestamps();

            // $table->foreign('pin_no')
            //         ->references('pin_no')->on('pins');

            // $table->foreign('sender_id')
            //         ->references('id')->on('users');

            // $table->foreign('reciver_id')
            //         ->references('id')->on('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pin_transfer');
    }
}
