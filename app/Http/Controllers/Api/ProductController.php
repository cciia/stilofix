<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{    
    public function index()
    {
        $products = Product::latest()->paginate(5);
        return new ProductResource(true, 'List Data Products', $products);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_produk' => 'required|string',
            'kategori' => 'required|in:T-shirt,Sweater,Jacket,Pants,Skirt,Dress',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|integer',
            'status' => 'required|in:Tersedia,Tidak Tersedia',
            'gambar' => 'nullable|image|max:2048'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // upload gambar
        $gambar = null;
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambar->storeAs('products', $gambar->hashName());
        }

        $product = Product::create([
            'gambar'        => $gambar ? $gambar->hashName() : null,
            'nama_produk'   => $request->nama_produk,
            'kategori'      => $request->kategori,
            'deskripsi'     => $request->deskripsi,
            'harga'         => $request->harga,
            'status'        => $request->status,
        ]);

        return new ProductResource(true, 'Data Product Berhasil Ditambahkan!', $product);
    }

    public function show($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json([
                'success' => false,
                'message' => 'Produk tidak ditemukan',
            ], 404);
        }

        return new ProductResource(true, 'Detail Data Product!', $product);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nama_produk' => 'required|string',
            'kategori' => 'required|in:T-shirt,Sweater,Jacket,Pants,Skirt,Dress',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|integer',
            'status' => 'required|in:Tersedia,Tidak Tersedia',
            'gambar' => 'nullable|image|max:2048'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $product = Product::find($id);

        if (!$product) {
            return response()->json([
                'success' => false,
                'message' => 'Produk tidak ditemukan'
            ], 404);
        }

        if ($request->hasFile('gambar')) {
            Storage::delete('products/' . basename($product->gambar));
            $gambar = $request->file('gambar');
            $gambar->storeAs('products', $gambar->hashName());
            $product->gambar = $gambar->hashName();
        }

        $product->update([
            'nama_produk'   => $request->nama_produk,
            'kategori'      => $request->kategori,
            'deskripsi'     => $request->deskripsi,
            'harga'         => $request->harga,
            'status'        => $request->status,
            'gambar'        => $product->gambar,
        ]);

        return new ProductResource(true, 'Data Product Berhasil Diubah!', $product);
    }

    public function destroy($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json([
                'success' => false,
                'message' => 'Data Product Tidak Ditemukan!',
            ], 404);
        }

        if ($product->gambar) {
            Storage::delete('products/' . basename($product->gambar));
        }

        $product->delete();

        return new ProductResource(true, 'Data Product Berhasil Dihapus!', null);
    }
}
