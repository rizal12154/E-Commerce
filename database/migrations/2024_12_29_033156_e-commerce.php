<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kategori', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->unique();
            $table->timestamps();
        });

        Schema::create('produk', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->text('deskripsi')->nullable();
            $table->decimal('harga', 10, 2);
            $table->integer('stok');
            $table->foreignId('kategori_id')->constrained('kategori')->onDelete('cascade');
            $table->string('gambar')->nullable();
            $table->timestamps();
        });

        Schema::create('pesanan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->timestamp('tanggal_pesanan')->useCurrent();
            $table->enum('status', ['tertunda', 'dibayar', 'dikirim', 'selesai', 'dibatalkan'])->default('tertunda');
            $table->decimal('total_harga', 10, 2);
            $table->timestamps();
        });

        Schema::create('item_pesanan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pesanan_id')->constrained('pesanan')->onDelete('cascade');
            $table->foreignId('produk_id')->constrained('produk')->onDelete('cascade');
            $table->integer('jumlah');
            $table->decimal('harga', 10, 2);
            $table->decimal('subtotal', 10, 2);
            $table->timestamps();
        });

        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pesanan_id')->constrained('pesanan')->onDelete('cascade');
            $table->enum('metode_pembayaran', ['kartu_kredit', 'paypal', 'transfer_bank']);
            $table->timestamp('tanggal_pembayaran')->nullable();
            $table->decimal('jumlah', 10, 2);
            $table->enum('status', ['tertunda', 'selesai', 'gagal'])->default('tertunda');
            $table->timestamps();
        });

        Schema::create('keranjang', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('produk_id')->constrained('produk')->onDelete('cascade');
            $table->integer('jumlah');
            $table->timestamps();
        });
    }

    public function down(): void {}
};
