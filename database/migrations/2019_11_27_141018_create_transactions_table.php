<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('order_id');
            $table->integer('user_id');
            $table->string('transaction_id')->unique();     
            $table->string('amount');
            $table->string('paymentType');
            $table->string('paymentRef');
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
        Schema::dropIfExists('transactions');
    }
}
