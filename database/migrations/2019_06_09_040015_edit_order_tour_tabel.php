<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditOrderTourTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('order_tours', function (Blueprint $table) {
            $table->dropColumn('user_id');
            $table->string('payment_method')->nullable();
            $table->string('fullname');
            $table->string('phone');
            $table->string('email');
            $table->string('address');
            $table->text('content')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('order_tours', function (Blueprint $table) {
            $table->integer('user_id');
            $table->dropColumn('payment_method');
            $table->dropColumn('fullname');
            $table->dropColumn('phone');
            $table->dropColumn('email');
            $table->dropColumn('address');
            $table->dropColumn('content');
        });
    }
}
