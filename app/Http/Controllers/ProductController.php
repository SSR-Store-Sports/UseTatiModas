<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('images')->get();

        return view('index', compact('products'));
    }

    public function search()
    {
        return view('products.search');
    }

    public function show()
    {
        return view('products.product');
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request) {}

    public function edit(Product $product) {}

    public function update(Request $request, Product $product) {}

    public function destroy(Product $product) {}
}
