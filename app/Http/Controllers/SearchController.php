<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->get('product');
        $category = $request->get('category');
        $sort = $request->get('sort', 'newest');

        $products = Product::query()
            ->with(['category', 'images'])
            ->when($query, fn($q) => $q->where('name', 'like', "%{$query}%"))
            ->when($category, fn($q) => $q->where('category_id', $category))
            ->when($sort === 'popular', fn($q) => $q->orderBy('stock', 'desc'))
            ->when($sort === 'newest', fn($q) => $q->orderBy('created_at', 'desc'))
            ->when($sort === 'price_asc', fn($q) => $q->orderBy('price', 'asc'))
            ->when($sort === 'price_desc', fn($q) => $q->orderBy('price', 'desc'))
            ->paginate(15);

        return view('products.search', compact('products', 'query', 'category'));
    }
}