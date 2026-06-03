<?php

namespace App\Services;

use App\Models\Product;
use App\Models\Cart;

class CartService
{
    public function add($productId, $quantity = 1)
    {
        $product = Product::find($productId);
        
        if (!$product) {
            return false;
        }

        if (auth()->check()) {
            $cartItem = Cart::where('user_id', auth()->id())
                           ->where('product_id', $productId)
                           ->first();

            if ($cartItem) {
                $cartItem->quantity += $quantity;
                $cartItem->save();
            } else {
                Cart::create([
                    'user_id' => auth()->id(),
                    'product_id' => $productId,
                    'quantity' => $quantity,
                ]);
            }
        } else {
            $cart = session()->get('cart', []);

            if (isset($cart[$productId])) {
                $cart[$productId]['quantity'] += $quantity;
            } else {
                $firstImage = $product->images->first();
                $cart[$productId] = [
                    'name' => $product->name,
                    'price' => $product->price,
                    'quantity' => $quantity,
                    'image' => $firstImage ? $firstImage->url : asset('assets/model_card.png')
                ];
            }

            session()->put('cart', $cart);
        }

        return true;
    }

    public function remove($productId)
    {
        if (auth()->check()) {
            Cart::where('user_id', auth()->id())
                ->where('product_id', $productId)
                ->delete();
            return true;
        }
        
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
        if (auth()->check()) {
            if ($quantity <= 0) {
                return $this->remove($productId);
            }

            $cartItem = Cart::where('user_id', auth()->id())
                           ->where('product_id', $productId)
                           ->first();

            if ($cartItem) {
                $cartItem->quantity = $quantity;
                $cartItem->save();
                return true;
            }
            return false;
        }
        
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
        if (auth()->check()) {
            $cartItems = Cart::where('user_id', auth()->id())
                            ->with('product.images')
                            ->get();

            $items = [];
            foreach ($cartItems as $item) {
                $firstImage = $item->product->images->first();
                $items[$item->product_id] = [
                    'name' => $item->product->name,
                    'price' => $item->product->price,
                    'quantity' => $item->quantity,
                    'image' => $firstImage ? $firstImage->url : asset('assets/model_card.png')
                ];
            }
            return $items;
        }

        return session()->get('cart', []);
    }

    public function getTotal()
    {
        $items = $this->getItems();
        $total = 0;

        foreach ($items as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        return $total;
    }

    public function getCount()
    {
        $items = $this->getItems();
        $count = 0;

        foreach ($items as $item) {
            $count += $item['quantity'];
        }

        return $count;
    }
    
    public function clear()
    {
        if (auth()->check()) {
            Cart::where('user_id', auth()->id())->delete();
        } else {
            session()->forget('cart');
        }
    }

    public function migrateSessionToDatabase()
    {
        if (!auth()->check()) {
            return;
        }

        $sessionCart = session()->get('cart', []);

        if (empty($sessionCart)) {
            return;
        }

        foreach ($sessionCart as $productId => $item) {
            $cartItem = Cart::where('user_id', auth()->id())
                           ->where('product_id', $productId)
                           ->first();

            if ($cartItem) {
                $cartItem->quantity += $item['quantity'];
                $cartItem->save();
            } else {
                Cart::create([
                    'user_id' => auth()->id(),
                    'product_id' => $productId,
                    'quantity' => $item['quantity'],
                ]);
            }
        }

        session()->forget('cart');
    }
}
