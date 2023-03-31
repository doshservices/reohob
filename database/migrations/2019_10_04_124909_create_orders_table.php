<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id');
            $table->double('subtotal')->nullable()->default(0);
            $table->boolean('shipping')->nullable()->default(0);
            $table->double('discount')->nullable()->default(0);
            $table->boolean('shipping_status')->default(0);
            $table->string('status')->default("pending");
            $table->integer('total')->nullable()->default(0);
            // $table->unsignedBigInteger('currency_id')->nullable();
            $table->double('exchange_rate')->nullable();
            $table->string('comment', 300)->nullable();
            $table->boolean('paid')->default(0);
            $table->string('payment_method', 100)->nullable();
            $table->string('shipping_method', 100)->nullable();
            $table->boolean('delivered')->nullable()->default(0);
            $table->string('user_agent', 255)->nullable();
            $table->string('ip', 100)->nullable();
            // $table->string('transaction', 100)->nullable();
            $table->timestamps();
        });

        Schema::table('orders', function (Blueprint $table) {
            // $table->foreign('currency_id')->references('id')->on('currencies')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
