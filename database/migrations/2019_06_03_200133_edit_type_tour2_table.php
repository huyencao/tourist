<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditTypeTour2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('type_tour', function (Blueprint $table) {
            $table->integer('baby_price')->nullable()->change();
            $table->string('time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('type_tour', function (Blueprint $table) {
            $table->dropColumn('baby_price');
            $table->dropColumn('time');
        });
    }
}
