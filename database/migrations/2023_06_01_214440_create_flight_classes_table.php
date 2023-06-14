<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightClassesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('flight_classes', function (Blueprint $table) {
            $table->id();
            $table->string('class_name');
            $table->text('description')->nullable();
            $table->integer('capacity');
            $table->decimal('fare', 8, 2);
            $table->text('amenities')->nullable();
            $table->integer('extra_baggage_fee')->nullable();
            $table->boolean('priority_boarding')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('flight_classes');
    }
}
