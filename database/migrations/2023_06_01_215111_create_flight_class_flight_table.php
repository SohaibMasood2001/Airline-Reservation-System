<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightClassFlightTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('flight_class_flight', function (Blueprint $table) {
            $table->unsignedBigInteger('flight_class_id');
            $table->timestamps();

            $table->foreign('flight_class_id')->references('id')->on('flight_classes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('flight_class_flight');
    }
}
