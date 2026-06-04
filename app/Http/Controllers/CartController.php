<?php

namespace App\Http\Controllers;

use App\Services\CartService;
use Illuminate\Http\Request;

class CartController extends Controller
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

        return view('cart.index', compact('cartItems', 'total', 'count'));
    }

    public function add(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'nullable|integer|min:1|max:15'
        ]);

        $quantity = $request->quantity ?? 1;

        if ($this->cartService->add($request->product_id, $quantity)) {
            return redirect()->back()->with('success', 'Produto adicionado ao carrinho!')->withFragment('');
        }

        return redirect()->back()->with('error', 'Erro ao adicionar produto.');
    }

    public function buyNow(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'nullable|integer|min:1|max:15'
        ]);

        $this->cartService->add($request->product_id, $request->quantity ?? 1);

        return redirect()->route('checkout.index');
    }

    public function remove($productId)
    {
        if ($this->cartService->remove($productId)) {
            return redirect()->back()->with('success', 'Produto removido do carrinho!');
        }

        return redirect()->back()->with('error', 'Produto não encontrado.');
    }

    public function update(Request $request, $productId)
    {
        $request->validate([
            'quantity' => 'required|integer|min:0|max:15'
        ]);

        if ($this->cartService->update($productId, $request->quantity)) {
            return redirect()->back()->with('success', 'Carrinho atualizado!');
        }

        return redirect()->back()->with('error', 'Erro ao atualizar carrinho.');
    }
}
