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
            $table->id('product_id');
            $table->string('title');
            $table->string('sku');
            $table->enum('product_type', ['single','variant'])->default('single');
            $table->bigInteger('category_id');
            $table->string('feature_image');
            $table->string('product_image');
            $table->string('short_description');
            $table->text('long_description');
            $table->enum('status', ['active','inactive'])->default('active');
            $table->float('regular_price')->nullable();
            $table->float('sale_price')->nullable();
            $table->integer('stock')->nullable();
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