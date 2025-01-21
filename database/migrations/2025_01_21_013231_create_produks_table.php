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
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cabang_id')->constrained()->onDelete('cascade');
            $table->string('nama');
            $table->string('unit_satuan')->nullable();
            $table->decimal('harga_normal', 10, 2);
            $table->decimal('harga_user', 10, 2)->nullable();
            $table->decimal('harga_reseller', 10, 2)->nullable();
            $table->foreignId('supplier_id')->constrained()->onDelete('set null');
            $table->timestamps();        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
