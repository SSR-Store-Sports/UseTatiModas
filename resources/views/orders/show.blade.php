@extends('_layouts.app')

@section('title', 'Pedido #' . str_pad($order->id, 6, '0', STR_PAD_LEFT) . ' | UseTatiModas')

@section('content')
<main class="px-4 md:px-8 lg:px-24 py-6 md:py-12">
  <div class="max-w-4xl mx-auto flex flex-col gap-6">

    <div class="flex items-center justify-between border-b border-gray-200 pb-4">
      <div class="flex items-center gap-2">
        <x-heroicon-o-shopping-bag class="w-6 h-6 text-gold-dark" />
        <h1 class="text-xl md:text-2xl font-bold text-gray-800">
          Pedido #{{ str_pad($order->id, 6, '0', STR_PAD_LEFT) }}
        </h1>
      </div>
      <a href="{{ route('orders.index') }}" class="flex items-center gap-1 text-sm text-gray-500 hover:text-gold-dark transition-colors">
        <x-heroicon-o-arrow-left class="w-4 h-4" />
        @lang('back_to_orders')
      </a>
    </div>

    <div class="bg-white rounded-xl shadow-md shadow-gold-medium/20 p-4 md:p-6 flex flex-col sm:flex-row justify-between gap-4">
      <div class="flex flex-col gap-1">
        <span class="text-xs text-gray-500 uppercase tracking-wide font-medium">@lang('status')</span>
        @php
          $statusLabels = [
            'pending'    => 'Pendente',
            'processing' => 'Em preparo',
            'shipped'    => 'Enviado',
            'delivered'  => 'Entregue',
            'cancelled'  => 'Cancelado',
          ];
        @endphp
        <span class="inline-flex items-center w-fit px-3 py-1 rounded-full text-xs font-medium
          @if($order->status == 'delivered') bg-green-100 text-green-700
          @elseif($order->status == 'shipped') bg-blue-100 text-blue-700
          @elseif($order->status == 'processing') bg-yellow-100 text-yellow-700
          @elseif($order->status == 'cancelled') bg-red-100 text-red-700
          @else bg-gray-100 text-gray-700
          @endif">
          {{ $statusLabels[$order->status] ?? ucfirst($order->status) }}
        </span>
      </div>

      <div class="flex flex-col gap-1">
        <span class="text-xs text-gray-500 uppercase tracking-wide font-medium">@lang('placed_on')</span>
        <span class="text-sm text-gray-800 font-medium">{{ $order->created_at->format('d/m/Y \à\s H:i') }}</span>
      </div>

      @if(auth()->user()->address)
      <div class="flex flex-col gap-1">
        <span class="text-xs text-gray-500 uppercase tracking-wide font-medium">@lang('shipping_address')</span>
        <span class="text-sm text-gray-800">{{ auth()->user()->address->street }}, {{ auth()->user()->address->number }}</span>
        <span class="text-xs text-gray-500">{{ auth()->user()->address->city }}/{{ auth()->user()->address->state }}</span>
      </div>
      @endif
    </div>

    <div class="bg-white rounded-xl shadow-md shadow-gold-medium/20 p-4 md:p-6 flex flex-col gap-4">
      <h2 class="font-semibold text-gray-800 border-b border-gray-100 pb-3">Resumo do Pedido</h2>

      <div class="flex flex-col gap-3 text-sm">
        <div class="flex justify-between text-gray-600">
          <span>Produtos</span>
          <span class="text-gray-800">{{ $order->products ?? '—' }}</span>
        </div>
        <div class="flex justify-between text-gray-600">
          <span>@lang('freight')</span>
          <span class="text-green-600 font-medium">@lang('free')</span>
        </div>
        <div class="flex justify-between font-bold text-base border-t border-dashed border-gray-200 pt-3">
          <span>@lang('total')</span>
          <span class="text-gold-dark">R$ {{ number_format($order->total, 2, ',', '.') }}</span>
        </div>
      </div>
    </div>

    <div class="flex flex-col sm:flex-row gap-3">
      <a href="{{ route('orders.index') }}"
        class="flex-1 flex items-center justify-center gap-2 px-6 py-3 bg-white border-2 border-gray-900 text-gray-900 text-sm font-medium rounded-md hover:bg-gray-900 hover:text-white transition-colors">
        <x-heroicon-o-arrow-left class="w-4 h-4" />
        @lang('back_to_orders')
      </a>
      <a href="https://api.whatsapp.com/send/?phone=5511978936260"
        target="_blank"
        class="flex-1 flex items-center justify-center gap-2 px-6 py-3 bg-gray-900 text-white text-sm font-medium rounded-md hover:bg-gold-medium transition-colors">
        <x-heroicon-o-chat-bubble-left-ellipsis class="w-4 h-4" />
        @lang('need_help_order')
      </a>
    </div>

  </div>
</main>
@endsection
