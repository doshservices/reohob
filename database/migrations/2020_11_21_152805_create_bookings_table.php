<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->integer('service_id');
            $table->string('full_name');
            $table->string('phone');
            $table->string('email');
            $table->string('location');
            $table->string('rooms')->nullable();
            $table->string('batteries')->nullable();
            $table->string('tv')->nullable();
            $table->string('ac')->nullable();
            $table->string('message')->nullable();
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
        Schema::dropIfExists('bookings');
    }
}
