<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->integer('trainings_id')->nullable();
            $table->string('paymentType');
            $table->string('paymentRef')->unique();
            $table->string('paymentStatus');
            $table->string('paymentAmount');
            $table->string('paymentChannel');
            $table->string('paymentDate');
            $table->boolean('paid');
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
        Schema::dropIfExists('payments');
    }
}
