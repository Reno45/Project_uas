<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->string('nama_customer', 100);
            $table->string('alamat', 50);
            $table->string('email', 50);
            $table->string('foto', 50);
            $table->foreign('produk_id')->references('id')->on('produks')->restrictOnDelete()->restrictOnUpdate;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
