<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookseatFlightClassTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('bookseat_flight_class', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bookseat_id');
            $table->unsignedBigInteger('flight_class_id')->default(0);
            $table->timestamps();

            $table->foreign('bookseat_id')->references('id')->on('bookseat')->onDelete('cascade');
            $table->foreign('flight_class_id')->references('id')->on('flight_classes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('bookseat_flight_class');
    }
}
