<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->Increments('product_id')->unsigned();
            $table->string('product_name');
            $table->string('image')->nullable();
            $table->string('product_price');
            $table->string('product_discount')->nullable();
            $table->text('product_desc')->nullable();
            $table->string('product_size');
            $table->integer('product_status');
            $table->timestamps();
            $table->integer('category_id')->unsigned()->nullable();
            $table->foreign('category_id')->references('category_id')->on('category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
