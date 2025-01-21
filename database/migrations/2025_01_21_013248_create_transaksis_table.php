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
        Schema::create('transaksis', function (Blueprint $table) {
          $table->id();
            $table->foreignId('cabang_id')->constrained()->onDelete('cascade');
            $table->foreignId('produk_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('set null'); // Jika menggunakan otentikasi
            $table->integer('jumlah');
            $table->decimal('total_harga', 10, 2);
            $table->enum('tipe_pembeli', ['normal', 'user', 'reseller']);
            $table->timestamps();        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
