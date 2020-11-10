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
            $table->increments('id');
            $table->string('product_name');
            $table->string('slug')->unique();
            $table->double('price');
            $table->float('discount_price');
            $table->string('views')->default(0);
            $table->longText('short_description');
            $table->longText('long_description')->nullable();
            $table->boolean('size_variation')->default(0);
            $table->string('video')->nullable();
            $table->tinyInteger('status');
            $table->string('is_featured');
            $table->string('is_popular');
            $table->boolean('on_sale')->default(0);
            $table->boolean('is_special')->default(0);
            $table->string('sku')->nullable();
            $table->integer('brand_id')->unsigned()->nullable();
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->softDeletes();
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
        Schema::dropIfExists('products');
    }
}
