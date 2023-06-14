<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookseat', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('departure');
            $table->string('destination');
            $table->date('date');
            $table->time('time');
            $table->integer('passengers');
            $table->string('airline_name')->nullable();
            $table->text('message')->nullable();
            $table->string('passport');
            $table->string('status');
            $table->integer('flight_class_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookseat');
    }
};
