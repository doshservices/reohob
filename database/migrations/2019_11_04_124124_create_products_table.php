<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->unsignedBigInteger('brand_id')->nullable();
            $table->unsignedBigInteger('admin_id')->nullable();
            $table->text('main_image')->nullable();
            $table->string('name');
            $table->boolean('available')->default(false);
            $table->boolean('vat')->default(false);
            $table->text('description')->nullable();
            $table->string('sku')->nullable()->unique();
            $table->double('price');
            $table->double('discount');
            $table->double('quantity');
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::table('products', function (Blueprint $table) {
            // $table->foreign('brand_id')->references('id')->on('brands')->onDelete('set null');
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
