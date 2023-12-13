<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name',355);
            $table->string('product_slug')->nullable();
            $table->string('category_id');
            $table->string('brand_id')->nullable();
            $table->text('description')->nullable();
            $table->decimal('old_price');
            $table->decimal('new_price');
            $table->decimal('tax');
            $table->decimal('discountType');
            $table->string('quantity');
            $table->boolean('status')->default(0);
            $table->boolean('soft_delete')->default(0);
            $table->timestamps();
        });
        Schema::create('products_images', function (Blueprint $table) {
            $table->id();
            $table->string('product_id');
            $table->string('product_images')->nullable();
            $table->boolean('status')->default(0);
            $table->boolean('soft_delete')->default(0);
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
        Schema::dropIfExists('products_images');
    }
};
