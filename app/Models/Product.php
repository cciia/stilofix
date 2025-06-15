<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Product extends Model
    {
        /**
         * fillable
         *
         * @var array
         */
        protected $fillable = [
            'nama_produk', 'kategori', 'harga', 'gambar', 'deskripsi', 'status'
        ];

        /**
         * Accessor untuk gambar (menghasilkan URL lengkap)
         *
         * @return Attribute
         */
        protected function gambar(): Attribute
        {
            return Attribute::make(
                get: fn ($gambar) => $gambar ? url('/storage/products/' . $gambar) : null,
            );
        }

    }
