<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Aqui você pode buscar dados reais do banco
        // Exemplo:
        // $totalRevenue = Order::whereMonth('created_at', now()->month)->sum('total');
        // $ordersMonth = Order::whereMonth('created_at', now()->month)->count();
        // $ordersDay = Order::whereDate('created_at', today())->count();
        // $cancellationsMonth = Order::whereMonth('created_at', now()->month)->where('status', 'cancelled')->count();
        
        return view('admin.dashboard');
    }
}
