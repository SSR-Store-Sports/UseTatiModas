<?php

namespace App\Services;

use App\Models\Product;

class CartService
{
    public function add($productId, $quantity = 1)
    {
        $product = Product::find($productId);
        
        if (!$product) {
            return false;
        }

        $cart = session()->get('cart', []);

        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += $quantity;
        } else {
            $cart[$productId] = [
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => $quantity,
                'image' => $product->images->first()->image ?? 'assets/model_card.png'
            ];
        }

        session()->put('cart', $cart);
        return true;
    }

    public function remove($productId)
    {
        $cart = session()->get('cart', []);
        
        if (isset($cart[$productId])) {
            unset($cart[$productId]);
            session()->put('cart', $cart);
            return true;
        }
        
        return false;
    }

    public function update($productId, $quantity)
    {
        $cart = session()->get('cart', []);
        
        if (isset($cart[$productId])) {
            if ($quantity <= 0) {
                unset($cart[$productId]);
            } else {
                $cart[$productId]['quantity'] = $quantity;
            }
            session()->put('cart', $cart);
            return true;
        }
        
        return false;
    }

    public function getItems()
    {
        return session()->get('cart', []);
    }

    public function getTotal()
    {
        $cart = session()->get('cart', []);
        $total = 0;

        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        return $total;
    }

    public function getCount()
    {
        $cart = session()->get('cart', []);
        $count = 0;

        foreach ($cart as $item) {
            $count += $item['quantity'];
        }

        return $count;
    }
    
    public function clear()
    {
        session()->forget('cart');
    }
}
