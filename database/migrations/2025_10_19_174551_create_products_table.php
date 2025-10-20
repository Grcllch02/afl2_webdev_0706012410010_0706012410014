<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // PRIMARY KEY - cuma 1 ini aja!
            $table->string('name', 150);
            $table->unsignedBigInteger('category_id'); // WAJIB ada kolom ini dulu!
            $table->decimal('price', 10, 2);
            $table->integer('stock_quantity');
            $table->string('image_url', 255)->nullable();
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