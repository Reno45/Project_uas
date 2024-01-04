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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->string('nama_supplier', 50);
            $table->string('barang', 50);
            $table->string('alamat_supplier', 100);
            $table->foreign('kategori_produk')->references('id')->on('kategori_produks')->restrictOnDelete()->restrictOnUpdate;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
