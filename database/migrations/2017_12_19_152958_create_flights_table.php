<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('seat_id')->unsigned();
            $table->integer('airport_id')->unsigned();
            $table->integer('reservation_id')->unsigned();
            $table->integer('airplane_id')->unsigned();
            $table->integer('tariff_id')->unsigned();
            $table->foreign('seat_id')->references('id')->on('seats')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('airport_id')->references('id')->on('airports')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('reservation_id')->references('id')->on('reservations')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('airplane_id')->references('id')->on('airplanes')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('tariff_id')->references('id')->on('tariffs')
            ->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('flights');
    }
}
