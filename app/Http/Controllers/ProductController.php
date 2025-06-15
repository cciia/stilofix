<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $kategoriList = ['T-shirt', 'Sweater', 'Jacket', 'Pants', 'Skirt', 'Dress'];
    private $statusList = ['Tersedia', 'Tidak Tersedia'];

    public function publicIndex()
    {
        $products = Product::where('status', 'Tersedia')->latest()->get();
        return view('products.index', compact('products'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);

        $relatedProducts = Product::where('id', '!=', $id)
                                ->latest()
                                ->take(4)
                                ->get();

        return view('detail', compact('product', 'relatedProducts'));
    }

    public function index()
    {
        if (auth()->user()->role !== 'admin') {
            abort(403, 'Hanya admin yang bisa mengakses halaman ini.');
        }

        $products = Product::all();
        return view('admin.product.index', [
            'products' => $products,
            'categories' => $this->kategoriList,
            'statusList' => $this->statusList
        ]);
    }

    public function create()
    {
        if (auth()->user()->role !== 'admin') {
            abort(403, 'Hanya admin yang bisa mengakses halaman ini.');
        }

        return view('admin.product.create', [
            'categories' => $this->kategoriList,
            'statusList' => $this->statusList
        ]);
    }

    public function store(Request $request)
    {
        if (auth()->user()->role !== 'admin') {
            abort(403, 'Hanya admin yang bisa mengakses halaman ini.');
        }

        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'kategori' => 'required|in:' . implode(',', $this->kategoriList),
            'harga' => 'required|integer',
            'deskripsi' => 'required|string',
            'status' => 'required|in:' . implode(',', $this->statusList),
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->only('nama_produk', 'kategori', 'harga', 'deskripsi', 'status');

        if ($request->hasFile('gambar')) {
            $filename = $request->file('gambar')->hashName();
            $request->file('gambar')->storeAs('products', $filename, 'public');
            $data['gambar'] = $filename;
        }

        Product::create($data);

        return redirect()->route('admin.products.index')->with('success', 'Produk berhasil ditambahkan!');
    }

    public function edit($id)
    {
        if (auth()->user()->role !== 'admin') {
            abort(403, 'Hanya admin yang bisa mengakses halaman ini.');
        }

        $product = Product::findOrFail($id);
        return view('admin.product.edit', [
            'product' => $product,
            'categories' => $this->kategoriList,
            'statusList' => $this->statusList
        ]);
    }

    public function update(Request $request, $id)
    {
        if (auth()->user()->role !== 'admin') {
            abort(403, 'Hanya admin yang bisa mengakses halaman ini.');
        }

        $product = Product::findOrFail($id);

        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'kategori' => 'required|in:' . implode(',', $this->kategoriList),
            'harga' => 'required|integer',
            'deskripsi' => 'required|string',
            'status' => 'required|in:' . implode(',', $this->statusList),
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->only('nama_produk', 'kategori', 'harga', 'deskripsi', 'status');
        $data['gambar'] = $product->gambar;

        if ($request->hasFile('gambar')) {
            $filename = $request->file('gambar')->hashName();
            $request->file('gambar')->storeAs('products', $filename, 'public');
            $data['gambar'] = $filename;
        }

        $product->update($data);

        return redirect()->route('admin.products.index')->with('success', 'Produk berhasil diperbarui!');
    }

    public function destroy($id)
    {
        if (auth()->user()->role !== 'admin') {
            abort(403, 'Hanya admin yang bisa mengakses halaman ini.');
        }

        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('admin.products.index')->with('success', 'Produk berhasil dihapus!');
    }
}
