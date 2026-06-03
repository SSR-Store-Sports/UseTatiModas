<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('images')->get();
        $suppliers = Supplier::where('status', 'active')->get();

        return view('index', compact('products', 'suppliers'));
    }

    public function search(Request $request)
    {
        $query = $request->input('product');
        
        $products = Product::with('images')
            ->when($query, function($q) use ($query) {
                $q->where('name', 'like', '%' . $query . '%')
                  ->orWhere('description', 'like', '%' . $query . '%')
                  ->orWhere('sku', 'like', '%' . $query . '%');
            })
            ->where('status', 'active')
            ->paginate(12);

        return view('products.search', compact('products', 'query'));
    }

    public function show($id)
    {
        $product = Product::with(['images', 'category', 'supplier'])->findOrFail($id);
        
        return view('products.product', compact('product'));
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
