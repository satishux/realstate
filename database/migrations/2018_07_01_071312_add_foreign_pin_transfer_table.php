<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignPinTransferTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pin_transfer', function (Blueprint $table) {
            $table->foreign('pin_no')
                ->references('pin_no')->on('pins');

            $table->foreign('pin_type_id')
                ->references('id')->on('pin_types');

            $table->foreign('sender_id')
                    ->references('id')->on('users');

            $table->foreign('reciver_id')
                    ->references('id')->on('users');

        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pin_transfer', function (Blueprint $table) {
            
            $table->dropForeign(['pin_no', 'pin_type_id', 'sender_id', 'reciver_id']);
        });
    }
}
