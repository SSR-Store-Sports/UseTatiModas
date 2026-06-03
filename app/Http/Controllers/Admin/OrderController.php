<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $orders = Order::when($request->search, fn($q) => $q->where('customer_name', 'like', "%{$request->search}%")->orWhere('id', 'like', "%{$request->search}%"))
            ->when($request->status, fn($q) => $q->where('status', $request->status))
            ->latest()->paginate(10)->withQueryString();
        return view('admin.orders.index', compact('orders'));
    }

    public function show($id)
    {
        $order = Order::findOrFail($id);

        return view('admin.orders.show', compact('order'));
    }

    public function edit($id)
    {
        $order = Order::findOrFail($id);

        return view('admin.orders.edit', compact('order'));
    }

    public function update($id)
    {
        $order = Order::findOrFail($id);
        
        // Atualizar dados do pedido
        // $order->update(request()->all());

        return redirect()->route('admin.orders')->with('success', 'Pedido atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect()->route('admin.orders')->with('success', 'Pedido excluído com sucesso!');
    }
}
