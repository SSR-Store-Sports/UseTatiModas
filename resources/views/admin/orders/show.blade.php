@extends('_layouts.app')

@section('title', 'Pedido #' . str_pad($order->id, 6, '0', STR_PAD_LEFT) . ': UseTatiModas Admin')

@section('content')
<main class="px-4 md:px-8 lg:px-24 py-6 md:py-12">
  <div class="max-w-4xl mx-auto">
    <div class="flex flex-col gap-4">

      <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
        <div class="flex items-center gap-3">
          <a href="{{ route('admin.orders') }}" class="p-2 bg-gray-100 text-gray-600 rounded-md hover:bg-gray-200 transition-colors">
            <x-heroicon-o-arrow-left class="w-4 h-4" />
          </a>
          <h1 class="text-2xl md:text-3xl font-bold tracking-tight text-gray-800">
            Pedido #{{ str_pad($order->id, 6, '0', STR_PAD_LEFT) }}
          </h1>
        </div>
        <a href="{{ route('admin.orders.edit', $order->id) }}" class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600 transition-colors text-sm font-medium flex items-center gap-2">
          <x-heroicon-o-pencil-square class="w-4 h-4" />
          Editar Pedido
        </a>
      </div>

      @if(session('success'))
      <div class="bg-green-50 border border-green-200 rounded-md p-4 text-green-700 text-sm">
        {{ session('success') }}
      </div>
      @endif

      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

        <div class="rounded-md border border-gray-200 bg-white p-6 flex flex-col gap-4">
          <h2 class="text-base font-semibold text-gray-800 border-b border-gray-100 pb-3">Informações do Pedido</h2>

          <div class="grid grid-cols-2 gap-4">
            <div>
              <p class="text-xs font-medium text-gray-500 uppercase tracking-wide">ID</p>
              <p class="text-sm font-mono text-gray-800 mt-1">#{{ str_pad($order->id, 6, '0', STR_PAD_LEFT) }}</p>
            </div>
            <div>
              <p class="text-xs font-medium text-gray-500 uppercase tracking-wide">Status</p>
              <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium mt-1
                @if($order->status == 'delivered') bg-green-100 text-green-700
                @elseif($order->status == 'shipped') bg-blue-100 text-blue-700
                @elseif($order->status == 'processing') bg-yellow-100 text-yellow-700
                @elseif($order->status == 'cancelled') bg-red-100 text-red-700
                @else bg-gray-100 text-gray-700
                @endif">
                @php
                  $labels = ['pending' => 'Pendente', 'processing' => 'Processando', 'shipped' => 'Enviado', 'delivered' => 'Entregue', 'cancelled' => 'Cancelado'];
                @endphp
                {{ $labels[$order->status] ?? $order->status }}
              </span>
            </div>
            <div>
              <p class="text-xs font-medium text-gray-500 uppercase tracking-wide">Total</p>
              <p class="text-lg font-bold text-gold-dark mt-1">R$ {{ number_format($order->total, 2, ',', '.') }}</p>
            </div>
            <div>
              <p class="text-xs font-medium text-gray-500 uppercase tracking-wide">Data</p>
              <p class="text-sm text-gray-800 mt-1">{{ $order->created_at->format('d/m/Y H:i') }}</p>
            </div>
          </div>
        </div>

        <div class="rounded-md border border-gray-200 bg-white p-6 flex flex-col gap-4">
          <h2 class="text-base font-semibold text-gray-800 border-b border-gray-100 pb-3">Cliente</h2>

          <div class="flex flex-col gap-3">
            <div>
              <p class="text-xs font-medium text-gray-500 uppercase tracking-wide">Nome</p>
              <p class="text-sm text-gray-800 mt-1">{{ $order->customer_name ?? $order->user?->name ?? '—' }}</p>
            </div>
            <div>
              <p class="text-xs font-medium text-gray-500 uppercase tracking-wide">E-mail</p>
              <p class="text-sm text-gray-800 mt-1">{{ $order->customer_email ?? $order->user?->email ?? '—' }}</p>
            </div>
          </div>
        </div>

      </div>

      <div class="rounded-md border border-gray-200 bg-white p-6 flex flex-col gap-4">
        <h2 class="text-base font-semibold text-gray-800 border-b border-gray-100 pb-3">Produtos</h2>
        <p class="text-sm text-gray-600">{{ $order->products ?? '—' }}</p>
      </div>

    </div>
  </div>
</main>
@endsection
