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
        Schema::create('data_penjualans', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->date('tanggal');
            $table->string('nama_produk', 70);
            $table->integer('total_penjualan', 10);
            $table->decimal('total_harga', 15);
            $table->foreign('produk_id')->references('id')->on('produks')->restrictOnDelete()->restrictOnUpdate;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_penjualans');
    }
};