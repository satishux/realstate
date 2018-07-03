<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignPinsTypeToPinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pins', function (Blueprint $table) {
            
            $table->foreign('pin_type_id')
                    ->references('id')->on('pin_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pins', function (Blueprint $table) {
            
            $table->dropForeign(['pin_type_id']);
        });
    }
}
