@extends('_layouts.app')

@section('title', __('dashboard') . ': UseTatiModas')

@section('content')
<main class="px-4 md:px-8 lg:px-24 py-6 md:py-12">
  <div class="max-w-7xl mx-auto">
    <div class="mb-6 md:mb-8 lg:flex lg:items-start lg:justify-between lg:gap-8">
      <div class="shrink-0">
      <h1 class="text-2xl md:text-3xl font-bold tracking-tight text-gray-800">
        @php
          $hour = date('H');
          if ($hour < 12) {
            echo 'Bom dia';
          } elseif ($hour < 18) {
            echo 'Boa tarde';
          } else {
            echo 'Boa noite';
          }
        @endphp
        <span class="text-gold-dark">, {{ explode(' ', auth()->user()->name)[0] }}!</span>
      </h1>
      <p class="text-gray-500 text-sm md:text-base mt-1">
        Dashboard: resumo das vendas e estatísticas da loja.
      </p>
      </div>

      <div class="grid grid-cols-2 md:grid-cols-5 gap-3 mt-5 lg:mt-0 lg:flex-1 lg:max-w-4xl">
      <a href="/admin/products" class="bg-white rounded-lg shadow-md shadow-gold-medium/20 px-3 py-3 hover:shadow-lg transition-all duration-200 group">
        <div class="flex items-center justify-center gap-2 text-left">
          <div class="p-2 bg-gray-100 rounded-lg group-hover:bg-gold-dark transition-colors">
            <x-heroicon-o-squares-2x2 class="w-5 h-5 text-gold-dark group-hover:text-white transition-colors" />
          </div>
          <span class="text-xs font-semibold text-gray-800">@lang('products_admin')</span>
        </div>
      </a>

      <a href="/admin/categories" class="bg-white rounded-lg shadow-md shadow-gold-medium/20 px-3 py-3 hover:shadow-lg transition-all duration-200 group">
        <div class="flex items-center justify-center gap-2 text-left">
          <div class="p-2 bg-blue-100 rounded-lg group-hover:bg-blue-600 transition-colors">
            <x-heroicon-o-tag class="w-5 h-5 text-blue-600 group-hover:text-white transition-colors" />
          </div>
          <span class="text-xs font-semibold text-gray-800">@lang('categories')</span>
        </div>
      </a>

      <a href="/admin/orders" class="bg-white rounded-lg shadow-md shadow-gold-medium/20 px-3 py-3 hover:shadow-lg transition-all duration-200 group">
        <div class="flex items-center justify-center gap-2 text-left">
          <div class="p-2 bg-green-100 rounded-lg group-hover:bg-green-600 transition-colors">
            <x-heroicon-o-shopping-cart class="w-5 h-5 text-green-600 group-hover:text-white transition-colors" />
          </div>
          <span class="text-xs font-semibold text-gray-800">Pedidos</span>
        </div>
      </a>

      <a href="/admin/suppliers" class="bg-white rounded-lg shadow-md shadow-gold-medium/20 px-3 py-3 hover:shadow-lg transition-all duration-200 group">
        <div class="flex items-center justify-center gap-2 text-left">
          <div class="p-2 bg-purple-100 rounded-lg group-hover:bg-purple-600 transition-colors">
            <x-heroicon-o-building-storefront class="w-5 h-5 text-purple-600 group-hover:text-white transition-colors" />
          </div>
          <span class="text-xs font-semibold text-gray-800">Fornecedores</span>
        </div>
      </a>

      <a href="/admin/users" class="bg-white rounded-lg shadow-md shadow-gold-medium/20 px-3 py-3 hover:shadow-lg transition-all duration-200 group">
        <div class="flex items-center justify-center gap-2 text-left">
          <div class="p-2 bg-orange-100 rounded-lg group-hover:bg-orange-600 transition-colors">
            <x-heroicon-o-users class="w-5 h-5 text-orange-600 group-hover:text-white transition-colors" />
          </div>
          <span class="text-xs font-semibold text-gray-800">Usuários</span>
        </div>
      </a>
      </div>
    </div>

    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4 mb-6 md:mb-8">
      <div class="bg-white rounded-lg md:rounded-xl shadow-md shadow-gold-medium/20 p-4 md:p-6 transition-all duration-200 hover:shadow-lg">
        <div class="flex items-center justify-between mb-3">
          <h3 class="text-xs md:text-sm font-medium text-gray-600">@lang('total_revenue')</h3>
          <div class="p-2 bg-gray-100 rounded-lg">
            <x-heroicon-o-currency-dollar class="w-5 h-5 text-gold-dark" />
          </div>
        </div>
        <div class="flex flex-col gap-1">
          <span class="text-2xl md:text-3xl font-bold text-gray-800">
            R$ {{ number_format($totalRevenue, 2, ',', '.') }}
          </span>
          <span class="text-xs font-medium
            @if($revenueChange > 0) text-green-600 @elseif($revenueChange < 0) text-red-600 @else text-gray-500 @endif">
            @if($revenueChange != 0)
              {{ $revenueChange > 0 ? '+' : '' }}{{ $revenueChange }}% em relação ao mês anterior
            @else
              0% em relação ao mês anterior
            @endif
          </span>
        </div>
      </div>

      <div class="bg-white rounded-lg md:rounded-xl shadow-md shadow-gold-medium/20 p-4 md:p-6 transition-all duration-200 hover:shadow-lg">
        <div class="flex items-center justify-between mb-3">
          <h3 class="text-xs md:text-sm font-medium text-gray-600">@lang('orders_month')</h3>
          <div class="p-2 bg-blue-100 rounded-lg">
            <x-heroicon-o-shopping-bag class="w-5 h-5 text-blue-600" />
          </div>
        </div>
        <div class="flex flex-col gap-1">
          <span class="text-2xl md:text-3xl font-bold text-gray-800">
            {{ $ordersMonth }}
          </span>
          <span class="text-xs font-medium
            @if($ordersChange > 0) text-green-600 @elseif($ordersChange < 0) text-red-600 @else text-gray-500 @endif">
            @if($ordersChange != 0)
              {{ $ordersChange > 0 ? '+' : '' }}{{ $ordersChange }}% em relação ao mês anterior
            @else
              0% em relação ao mês anterior
            @endif
          </span>
        </div>
      </div>

      <div class="bg-white rounded-lg md:rounded-xl shadow-md shadow-gold-medium/20 p-4 md:p-6 transition-all duration-200 hover:shadow-lg">
        <div class="flex items-center justify-between mb-3">
          <h3 class="text-xs md:text-sm font-medium text-gray-600">@lang('orders_day')</h3>
          <div class="p-2 bg-green-100 rounded-lg">
            <x-heroicon-o-chart-bar class="w-5 h-5 text-green-600" />
          </div>
        </div>
        <div class="flex flex-col gap-1">
          <span class="text-2xl md:text-3xl font-bold text-gray-800">
            {{ $ordersDay }}
          </span>
          <span class="text-xs font-medium
            @if($dayChange > 0) text-green-600 @elseif($dayChange < 0) text-red-600 @else text-gray-500 @endif">
            @if($dayChange != 0)
              {{ $dayChange > 0 ? '+' : '' }}{{ $dayChange }} em relação a ontem
            @else
              0 em relação a ontem
            @endif
          </span>
        </div>
      </div>

      <div class="bg-white rounded-lg md:rounded-xl shadow-md shadow-gold-medium/20 p-4 md:p-6 transition-all duration-200 hover:shadow-lg">
        <div class="flex items-center justify-between mb-3">
          <h3 class="text-xs md:text-sm font-medium text-gray-600">@lang('cancellations_month')</h3>
          <div class="p-2 bg-red-100 rounded-lg">
            <x-heroicon-o-x-circle class="w-5 h-5 text-red-600" />
          </div>
        </div>
        <div class="flex flex-col gap-1">
          <span class="text-2xl md:text-3xl font-bold text-gray-800">
            {{ $cancellationsMonth }}
          </span>
          <span class="text-xs font-medium
            @if($cancellationsChange < 0) text-green-600 @elseif($cancellationsChange > 0) text-red-600 @else text-gray-500 @endif">
            @if($cancellationsChange != 0)
              {{ $cancellationsChange > 0 ? '+' : '' }}{{ $cancellationsChange }}% em relação ao mês anterior
            @else
              0% em relação ao mês anterior
            @endif
          </span>
        </div>
      </div>
    </div>

    <div class="grid grid-cols-1 gap-4 md:gap-6 lg:grid-cols-9">
      <div class="lg:col-span-6 bg-white rounded-lg md:rounded-xl shadow-md shadow-gold-medium/20 p-4 md:p-6">
        <div class="flex items-center justify-between mb-4 md:mb-6">
          <div>
            <h3 class="text-base md:text-lg font-bold text-gray-800">Vendas no Período</h3>
            <p class="text-xs md:text-sm text-gray-500 mt-1">Últimos 30 dias</p>
          </div>
          <div class="p-2 bg-gray-100 rounded-lg">
            <x-heroicon-o-chart-bar-square class="w-5 h-5 text-gold-dark" />
          </div>
        </div>
        
        <div class="h-64 md:h-80 flex items-center justify-center bg-gray-50 rounded-lg border-2 border-dashed border-gray-200">
          @if($salesChart->count() > 0)
            <div class="w-full h-full p-4">
              <canvas id="salesChart" class="w-full h-full"></canvas>
            </div>
          @else
            <div class="text-center">
              <x-heroicon-o-chart-bar class="w-12 h-12 text-gray-400 mx-auto mb-2" />
              <p class="text-sm text-gray-500">Não há dados de vendas</p>
              <p class="text-xs text-gray-400 mt-1">Os dados aparecerão quando houver pedidos</p>
            </div>
          @endif
        </div>
      </div>

      <div class="lg:col-span-3 bg-white rounded-lg md:rounded-xl shadow-md shadow-gold-medium/20 p-4 md:p-6">
        <div class="flex items-center justify-between mb-4 md:mb-6">
          <div>
            <h3 class="text-base md:text-lg font-bold text-gray-800">@lang('popular_products')</h3>
            <p class="text-xs md:text-sm text-gray-500 mt-1">Top 5 vendidos</p>
          </div>
          <div class="p-2 bg-gray-100 rounded-lg">
            <x-heroicon-o-fire class="w-5 h-5 text-gold-dark" />
          </div>
        </div>

        <div class="flex flex-col gap-3">
          @forelse($popularProducts as $index => $product)
          <div class="flex items-center gap-3 p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
            <div class="flex items-center justify-center w-8 h-8 bg-gold-dark text-white rounded-full text-sm font-bold">
              {{ $index + 1 }}
            </div>
            <div class="flex-1 min-w-0">
              <p class="text-sm font-semibold text-gray-800 truncate">{{ $product->name }}</p>
              <p class="text-xs text-gray-500">{{ $product->stock }} em estoque</p>
            </div>
            <div class="text-right">
              <p class="text-sm font-bold text-gold-dark">R$ {{ number_format($product->price, 2, ',', '.') }}</p>
            </div>
          </div>
          @empty
          <div class="text-center py-8">
            <x-heroicon-o-cube class="w-12 h-12 text-gray-300 mx-auto mb-2" />
            <p class="text-sm text-gray-500">Não há produtos cadastrados</p>
            <p class="text-xs text-gray-400">Cadastre produtos para ver os mais populares</p>
          </div>
          @endforelse
        </div>
      </div>
    </div>

  </div>
</main>
@endsection

@if($salesChart->count() > 0)
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const ctx = document.getElementById('salesChart').getContext('2d');
    
    const salesData = @json($salesChart->map(function($item) {
        return [
            'date' => $item->date,
            'revenue' => (float) $item->revenue,
            'orders' => $item->orders
        ];
    }));
    
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: salesData.map(item => {
                const date = new Date(item.date);
                return date.toLocaleDateString('pt-BR', { month: 'short', day: 'numeric' });
            }),
            datasets: [{
                label: 'Receita (R$)',
                data: salesData.map(item => item.revenue),
                borderColor: '#C79B2B',
                backgroundColor: 'rgba(199, 155, 43, 0.1)',
                tension: 0.4,
                fill: true
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        callback: function(value) {
                            return 'R$ ' + value.toLocaleString('pt-BR');
                        }
                    }
                }
            }
        }
    });
});
</script>
@endpush
@endif
