@extends('_layouts.app')

@section('title', __('my_orders') . ' | UseTatiModas')

@section('content')
<main class="px-4 md:px-8 lg:px-24 py-6 md:py-12">
  <div class="max-w-6xl mx-auto flex flex-col gap-6">

    <div class="flex items-center justify-between border-b border-gray-200 pb-4">
      <div class="flex items-center gap-2">
        <x-heroicon-o-shopping-bag class="w-6 h-6 text-gold-dark" />
        <h1 class="text-2xl md:text-3xl font-bold text-gray-800">@lang('my_orders')</h1>
      </div>
      <span class="text-sm text-gray-500">{{ $orders->total() }} pedido(s)</span>
    </div>

    @forelse ($orders as $order)
    <div class="bg-white rounded-xl shadow-md shadow-gold-medium/20 p-4 md:p-6 flex flex-col gap-4">
      <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-3">
        <div>
          <h2 class="text-base md:text-lg font-bold text-gray-800">
            Pedido #{{ str_pad($order->id, 6, '0', STR_PAD_LEFT) }}
          </h2>
          <p class="text-xs md:text-sm text-gray-500">{{ $order->created_at->format('d/m/Y \à\s H:i') }}</p>
        </div>
        <div class="flex items-center gap-3">
          <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium
              @if($order->status == 'delivered') bg-green-100 text-green-700
              @elseif($order->status == 'shipped') bg-blue-100 text-blue-700
              @elseif($order->status == 'processing') bg-yellow-100 text-yellow-700
              @elseif($order->status == 'cancelled') bg-red-100 text-red-700
              @else bg-gray-100 text-gray-700
              @endif">
            @php
            $statusLabels = [
            'pending' => 'Pendente',
            'processing' => 'Em preparo',
            'shipped' => 'Enviado',
            'delivered' => 'Entregue',
            'cancelled' => 'Cancelado',
            ];
            @endphp
            {{ $statusLabels[$order->status] ?? ucfirst($order->status) }}
          </span>
          <a href="{{ route('orders.show', $order->id) }}"
            class="px-4 py-1.5 bg-gray-900 text-white text-xs font-semibold rounded-md hover:bg-gold-medium transition-colors">
            @lang('view_details')
          </a>
        </div>
      </div>

      <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-2 pt-3 border-t border-gray-100 text-sm">
        <span class="text-gray-500">{{ $order->products ?? 'Produto(s) do pedido' }}</span>
        <span class="font-bold text-gold-dark text-base">R$ {{ number_format($order->total, 2, ',', '.') }}</span>
      </div>
    </div>
    @empty
    <div class="bg-white rounded-xl shadow-md shadow-gold-medium/20 p-12 flex flex-col items-center gap-4 text-center">
      <x-heroicon-o-shopping-bag class="w-16 h-16 text-gray-300" />
      <p class="text-gray-600 font-medium">Você ainda não fez nenhum pedido.</p>
      <a href="/" class="px-6 py-2.5 bg-gray-900 text-white text-sm font-medium rounded-md hover:bg-gold-medium transition-colors">
        Explorar produtos
      </a>
    </div>
    @endforelse

    @if($orders->hasPages())
    <div class="flex justify-center gap-2">
      @if($orders->onFirstPage())
      <span class="px-3 py-2 rounded-md bg-gray-100 text-gray-400 cursor-not-allowed text-sm">@lang('previous')</span>
      @else
      <a href="{{ $orders->previousPageUrl() }}" class="px-3 py-2 rounded-md bg-white border border-gray-200 text-gray-700 hover:bg-gray-50 transition-colors text-sm">@lang('previous')</a>
      @endif

      @foreach($orders->getUrlRange(1, $orders->lastPage()) as $page => $url)
      @if($page == $orders->currentPage())
      <span class="px-3 py-2 rounded-md bg-gray-900 text-white font-medium text-sm">{{ $page }}</span>
      @else
      <a href="{{ $url }}" class="px-3 py-2 rounded-md bg-white border border-gray-200 text-gray-700 hover:bg-gray-50 transition-colors text-sm">{{ $page }}</a>
      @endif
      @endforeach

      @if($orders->hasMorePages())
      <a href="{{ $orders->nextPageUrl() }}" class="px-3 py-2 rounded-md bg-white border border-gray-200 text-gray-700 hover:bg-gray-50 transition-colors text-sm">@lang('next')</a>
      @else
      <span class="px-3 py-2 rounded-md bg-gray-100 text-gray-400 cursor-not-allowed text-sm">@lang('next')</span>
      @endif
    </div>
    @endif

  </div>
</main>
@endsection