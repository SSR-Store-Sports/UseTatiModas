<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // $product = Product::create([
        //     'name' => 'Camisa Preta Choque 4',
        //     'slug' => Str::slug('Camisa Feminina Preta Ultra Plus 4'),
        //     'sku' => 'CAM-PRETA-004',
        //     'description' => 'Camiseta básica preta feminina em algodão premium.',
        //     'price' => 62.00,
        //     'old_price' => 120.00,
        //     'category_id' => null,
        //     'supplier_id' => null,
        //     'material' => '100% Algodão',
        //     'free_shipping' => true,
        //     'stock' => 10,
        //     'rating' => 4.5,
        //     'reviews_count' => 120,
        //     'status' => 'active',
        //     'published_at' => now(),
        // ]);

        // ProductImage::create([
        //     'product_id' => $product->id,
        //     'image' => 'assets/model_card.png',
        //     'is_primary' => true,
        //     'sort_order' => 1,
        // ]);

        $name = 'Calças 3';
        Category::create([
            'name' => 'Calças 3',
            'slug' => Str::upper(Str::slug($name, '-')),
            'description' => "Categoria para encontrar calças",
            'status' => 'active'
        ]);
    }
}