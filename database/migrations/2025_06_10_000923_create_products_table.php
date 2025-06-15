<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

    return new class extends Migration
    {
        public function up(): void
        {
            Schema::create('products', function (Blueprint $table) {
                $table->id();
                $table->string('nama_produk');
                $table->enum('kategori', ['T-shirt', 'Sweater', 'Jacket', 'Pants', 'Skirt', 'Dress']);
                $table->integer('harga');
                $table->string('gambar')->nullable();
                $table->text('deskripsi');
                $table->enum('status', ['Tersedia', 'Tidak Tersedia'])->default('Tersedia');
                $table->timestamps();
            });
        }

        public function down(): void
        {
            Schema::dropIfExists('products');
        }
    };
