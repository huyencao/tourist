<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditTour2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tours', function (Blueprint $table) {
            $table->integer('sale')->nullable()->change();
            $table->integer('total');
            $table->integer('total_sale')->nullable();
            $table->string('vehicle');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tours', function (Blueprint $table) {
            $table->dropColumn('sale');
            $table->dropColumn('total');
            $table->dropColumn('total_sale');
            $table->dropColumn('vehicle');
        });
    }
}
