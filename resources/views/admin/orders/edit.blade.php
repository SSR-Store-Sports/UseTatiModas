@extends('_layouts.app')

@section('title', 'Editar Pedido #' . str_pad($order->id, 6, '0', STR_PAD_LEFT) . ': UseTatiModas Admin')

@section('content')
<main class="px-4 md:px-8 lg:px-24 py-6 md:py-12">
  <div class="max-w-2xl mx-auto">
    <div class="flex flex-col gap-4">

      <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
        <div class="flex items-center gap-3">
          <a href="{{ route('admin.orders.show', $order->id) }}" class="p-2 bg-gray-100 text-gray-600 rounded-md hover:bg-gray-200 transition-colors">
            <x-heroicon-o-arrow-left class="w-4 h-4" />
          </a>
          <h1 class="text-2xl md:text-3xl font-bold tracking-tight text-gray-800">
            Editar Pedido #{{ str_pad($order->id, 6, '0', STR_PAD_LEFT) }}
          </h1>
        </div>
      </div>

      <form action="{{ route('admin.orders.update', $order->id) }}" method="POST" class="flex flex-col gap-4">
        @csrf
        @method('PUT')

        @if ($errors->any())
        <div class="bg-red-50 border border-red-200 rounded-md p-4">
          <ul class="text-red-600 text-sm list-disc list-inside">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif

        <div class="rounded-md border border-gray-200 bg-white p-6 flex flex-col gap-4">
          <h2 class="text-base font-semibold text-gray-800 border-b border-gray-100 pb-3">Informações do Pedido</h2>

          <div class="grid grid-cols-2 gap-4 text-sm">
            <div>
              <p class="text-xs font-medium text-gray-500 uppercase tracking-wide">Cliente</p>
              <p class="text-gray-800 mt-1">{{ $order->customer_name ?? $order->user?->name ?? '—' }}</p>
            </div>
            <div>
              <p class="text-xs font-medium text-gray-500 uppercase tracking-wide">Total</p>
              <p class="font-bold text-gold-dark mt-1">R$ {{ number_format($order->total, 2, ',', '.') }}</p>
            </div>
            <div>
              <p class="text-xs font-medium text-gray-500 uppercase tracking-wide">Data</p>
              <p class="text-gray-800 mt-1">{{ $order->created_at->format('d/m/Y H:i') }}</p>
            </div>
          </div>
        </div>

        <div class="rounded-md border border-gray-200 bg-white p-6 flex flex-col gap-4">
          <h2 class="text-base font-semibold text-gray-800 border-b border-gray-100 pb-3">Atualizar Status</h2>

          <div class="flex flex-col gap-2">
            <label class="text-sm font-medium text-gray-700">Status <span class="text-red-500">*</span></label>
            <select name="status" class="px-4 py-2 rounded-md border border-gray-200 bg-gray-50 text-gray-800 text-sm outline-none transition-all duration-200 hover:border-[#F1C24A] hover:bg-white focus:border-[#C79B2B] focus:bg-white focus:ring-2 focus:ring-[#C79B2B]/20">
              <option value="pending"    {{ old('status', $order->status) == 'pending'    ? 'selected' : '' }}>Pendente</option>
              <option value="processing" {{ old('status', $order->status) == 'processing' ? 'selected' : '' }}>Processando</option>
              <option value="shipped"    {{ old('status', $order->status) == 'shipped'    ? 'selected' : '' }}>Enviado</option>
              <option value="delivered"  {{ old('status', $order->status) == 'delivered'  ? 'selected' : '' }}>Entregue</option>
              <option value="cancelled"  {{ old('status', $order->status) == 'cancelled'  ? 'selected' : '' }}>Cancelado</option>
            </select>
          </div>
        </div>

        <div class="flex items-center gap-2">
          <button type="submit" class="px-4 py-2.5 bg-green-500 text-white rounded-md hover:bg-green-600 transition-colors text-sm font-medium flex items-center gap-2">
            <x-heroicon-o-check class="w-4 h-4" />
            Salvar Alterações
          </button>
          <a href="{{ route('admin.orders.show', $order->id) }}" class="px-4 py-2.5 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300 transition-colors text-sm font-medium flex items-center gap-2">
            <x-heroicon-o-x-mark class="w-4 h-4" />
            Cancelar
          </a>
        </div>

      </form>
    </div>
  </div>
</main>
@endsection
