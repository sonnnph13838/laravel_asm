<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_booking', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->integer('id_room');
            $table->date('checkin_date');
            $table->date('checkout_date');
            $table->integer('adults');
            $table->integer('children');
            $table->json('id_service');
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
        Schema::dropIfExists('list_booking');
    }
};
