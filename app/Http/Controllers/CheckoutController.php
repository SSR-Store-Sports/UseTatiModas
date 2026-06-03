<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Services\CartService;
use Illuminate\Http\Request;

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

        $user = auth()->user()->load('address');

        return view('checkout.index', compact('cartItems', 'total', 'count', 'user'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'payment' => 'required|in:pix,credit,boleto',
            'delivery' => 'required|in:standard,express',
        ]);

        $cartItems = $this->cartService->getItems();
        $total = $this->cartService->getTotal();

        if (empty($cartItems)) {
            return redirect()->route('cart.index')->with('error', 'Seu carrinho está vazio!');
        }

        $deliveryFee = $request->delivery === 'express' ? 15.00 : 0;
        $finalTotal = $total + $deliveryFee;

        $productNames = collect($cartItems)->map(fn($item) => $item['name'] . ' (x' . $item['quantity'] . ')')->implode(', ');

        $order = Order::create([
            'user_id'       => auth()->id(),
            'customer_name' => auth()->user()->name,
            'products'      => $productNames,
            'total'         => $finalTotal,
            'status'        => 'pending',
        ]);

        $this->cartService->clear();

        return redirect()->route('checkout.confirmation', [
            'order'   => $order->id,
            'payment' => $request->payment,
        ]);
    }

    public function confirmation(Request $request)
    {
        $order = Order::where('user_id', auth()->id())->findOrFail($request->order);
        $payment = $request->payment;

        return view('checkout.confirmation', compact('order', 'payment'));
    }
}
