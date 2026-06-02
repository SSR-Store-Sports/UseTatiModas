<?php

namespace App\Http\Controllers;

use App\Services\CartService;

class CheckoutController extends Controller
{
    protected $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    public function index()
    {
        $cartItems = $this->cartService->getItems();
        $total = $this->cartService->getTotal();
        $count = $this->cartService->getCount();

        if ($count === 0) {
            return redirect()->route('cart.index')->with('error', 'Seu carrinho está vazio!');
        }

        return view('checkout.index', compact('cartItems', 'total', 'count'));
    }
}
