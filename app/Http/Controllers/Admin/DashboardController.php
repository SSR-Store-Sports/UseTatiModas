<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // Métricas financeiras
        $totalRevenue = Order::whereMonth('created_at', now()->month)
                           ->whereYear('created_at', now()->year)
                           ->sum('total') ?? 0;
        
        $lastMonthRevenue = Order::whereMonth('created_at', now()->subMonth()->month)
                                 ->whereYear('created_at', now()->subMonth()->year)
                                 ->sum('total') ?? 0;
        
        $revenueChange = $lastMonthRevenue > 0 
            ? round((($totalRevenue - $lastMonthRevenue) / $lastMonthRevenue) * 100, 1)
            : 0;

        // Métricas de pedidos
        $ordersMonth = Order::whereMonth('created_at', now()->month)
                           ->whereYear('created_at', now()->year)
                           ->count();
        
        $lastMonthOrders = Order::whereMonth('created_at', now()->subMonth()->month)
                                ->whereYear('created_at', now()->subMonth()->year)
                                ->count();
        
        $ordersChange = $lastMonthOrders > 0 
            ? round((($ordersMonth - $lastMonthOrders) / $lastMonthOrders) * 100, 1)
            : 0;

        // Pedidos do dia
        $ordersDay = Order::whereDate('created_at', today())->count();
        $yesterdayOrders = Order::whereDate('created_at', now()->subDay())->count();
        
        $dayChange = $yesterdayOrders > 0 
            ? round((($ordersDay - $yesterdayOrders) / $yesterdayOrders) * 100, 1)
            : 0;

        // Cancelamentos
        $cancellationsMonth = Order::whereMonth('created_at', now()->month)
                                  ->whereYear('created_at', now()->year)
                                  ->where('status', 'cancelled')
                                  ->count();
        
        $lastMonthCancellations = Order::whereMonth('created_at', now()->subMonth()->month)
                                       ->whereYear('created_at', now()->subMonth()->year)
                                       ->where('status', 'cancelled')
                                       ->count();
        
        $cancellationsChange = $lastMonthCancellations > 0 
            ? round((($cancellationsMonth - $lastMonthCancellations) / $lastMonthCancellations) * 100, 1)
            : 0;

        // Produtos populares (baseado no stock - quanto menor, mais vendido)
        $popularProducts = Product::with('images')
                                 ->orderBy('stock', 'asc')
                                 ->take(5)
                                 ->get();

        // Dados para o gráfico (últimos 7 dias)
        $salesChart = Order::select(
                DB::raw('DATE(created_at) as date'),
                DB::raw('SUM(total) as revenue'),
                DB::raw('COUNT(*) as orders')
            )
            ->where('created_at', '>=', now()->subDays(7))
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        return view('admin.dashboard', compact(
            'totalRevenue', 'revenueChange',
            'ordersMonth', 'ordersChange', 
            'ordersDay', 'dayChange',
            'cancellationsMonth', 'cancellationsChange',
            'popularProducts', 'salesChart'
        ));
    }
}
