<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class HomeController extends Controller

{

    public function index()
    {
        $products = Product::latest()->take(12)->get(); // Ambil 12 produk terbaru
        return view('home', compact('products'));
    }

}
