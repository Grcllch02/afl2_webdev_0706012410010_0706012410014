<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // kalo di migrate ini yan jalan
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('password');
            // kalo misal tidak ada keterangan admin atau user maka dia akan otomatis user
            $table->enum('status', ['admin', 'user'])-> default('user');
            $table->string('phone');
            $table->string('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    // kalo di rollback/hapus maka ini yang jalan untuk hapus tabel dari database
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
