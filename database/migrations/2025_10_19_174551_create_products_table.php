<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // Define the category_id column first
            $table->unsignedBigInteger('category_id');
            $table->decimal('price');
            $table->integer('stock_quantity');
            $table->string('image_url')->nullable();
            $table->timestamps();

            // Foreign key SETELAH kolom dibuat
            $table->foreign('category_id')
                  ->references('id')
                  ->on('categories')
                  ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
};