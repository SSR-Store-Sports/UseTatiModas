<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Supplier;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->latest()->paginate(10);
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        $suppliers = Supplier::all();
        return view('admin.products.create', compact('categories', 'suppliers'));
    }

    public function store(ProductRequest $request)
    {
        $validatedData = $request->validated(); // já vem validado

        $validatedData['slug']          = Str::slug($validatedData['name']);
        $validatedData['free_shipping'] = $request->boolean('free_shipping');
        $validatedData['rating']        = 0;
        $validatedData['reviews_count'] = 0;
        $validatedData['published_at']  = now();

        Product::create($validatedData);

        return redirect()->route('admin.products')->with('success', 'Produto criado com sucesso!');
    }

    public function show(string $id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.show', compact('product'));
    }

    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.edit', compact('product'));
    }

    public function update(ProductRequest $request, string $id)
    {
        $product = Product::findOrFail($id);
        $validatedData = $request->validated();
        $validatedData['slug'] = Str::slug($validatedData['name']);
        $product->update($validatedData);
        return redirect()->route('admin.products')->with('success', 'Produto atualizado com sucesso!');
    }

    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('admin.products')->with('success', 'Produto excluído com sucesso!');
    }
}
