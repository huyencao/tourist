<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypeTourTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_tour', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tour_id');
            $table->integer('baby_price');
            $table->integer('child_price');
            $table->integer('adult_price');
            $table->string('tour_code');
            $table->timestamp('start_day')->nullable();
            $table->timestamp('end_day')->nullable();
            $table->string('departure_day');
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
        Schema::dropIfExists('type_tour');
    }
}
