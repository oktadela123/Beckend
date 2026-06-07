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
    Schema::create('detail_transaksis', function (Blueprint $table) {

        $table->id('detail_id');

        $table->unsignedBigInteger('transaksi_id');

        $table->unsignedBigInteger('produk_id');

        $table->integer('jumlah');

        $table->decimal('subtotal', 12, 2);

        $table->timestamps();

        $table->foreign('transaksi_id')
            ->references('transaksi_id')
            ->on('transaksis')
            ->cascadeOnDelete();

        $table->foreign('produk_id')
            ->references('produk_id')
            ->on('produks')
            ->cascadeOnDelete();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_transaksis');
    }
};
