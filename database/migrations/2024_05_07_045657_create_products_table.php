<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');
            $table->string('product_type');
            $table->string('product_number');
            $table->string('product_name');
            $table->string('sku_code');
            $table->string('specification_1');
            $table->string('specification_2')->nullable();
            $table->string('specification_3')->nullable();
            $table->string('specification_4')->nullable();
            $table->string('image_1');
            $table->string('image_2')->nullable();
            $table->string('image_3')->nullable();
            $table->string('image_4')->nullable();
            $table->string('short_description');
            $table->string('description');
            $table->string('meterial');
            $table->string('finish');
            $table->string('lenght')->nullable();
            $table->string('height');
            $table->string('width');
            $table->enum('status', ['1', '0'])->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
