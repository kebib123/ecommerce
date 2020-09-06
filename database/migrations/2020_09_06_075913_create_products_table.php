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
            $table->string('slug');
            $table->string('price');
            $table->integer('discount_price');
            $table->string('color');
            $table->string('views');
            $table->longText('short_description');
            $table->longText('long_description');
            $table->string('video')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->boolean('is_featured')->nullable();
            $table->boolean('is_popular')->nullable();
            $table->boolean('hot_deals')->nullable();
            $table->string('size')->nullable();
            $table->boolean('is_special')->default(0);
            $table->string('sku')->nullable();

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
