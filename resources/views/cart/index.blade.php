@extends('_layouts.app')

@section('title', __('shopping_cart') . ': UseTatiModas')

@section('content')
<main class="px-4 md:px-12 lg:px-24 py-6 md:py-12">
  <div class="max-w-screen-2xl mx-auto">
    <div class="grid grid-rows-[auto_1fr] gap-4 md:gap-6">
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center border-b border-gray-200 pb-3 md:pb-4 gap-2">
      <div class="flex items-center gap-1.5">
        <x-heroicon-o-shopping-cart class="w-5 h-5 text-gold-dark" />
        <h1 class="font-bold text-xl md:text-2xl text-gold-dark">@lang('shopping_cart')</h1>
      </div>
      <span class="text-xs md:text-sm text-gray-500">{{ $count }} @lang('products')</span>
    </div>
    
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 md:gap-8">

      <section class="lg:col-span-2 flex flex-col gap-4">
        @if(count($cartItems) > 0)
          @foreach($cartItems as $productId => $item)
            <div class="bg-white rounded-xl shadow-md hadow-gold-medium/20 p-4 md:p-6 flex flex-col sm:flex-row gap-4 items-start">
              <img src="{{ asset($item['image']) }}" alt="{{ $item['name'] }}" class="w-full sm:w-28 h-48 sm:h-28 object-cover rounded-lg bg-gray-50 border border-gray-200 shrink-0">

              <div class="flex flex-col gap-2 flex-1 w-full">
                <p class="font-medium text-sm md:text-base text-gray-800">{{ $item['name'] }}</p>
                <span class="text-xs text-green-600 font-medium">@lang('free_shipping_short')</span>

                <form action="{{ route('cart.update', $productId) }}" method="POST" class="flex items-center gap-2">
                  @csrf
                  @method('PUT')
                  <label class="text-xs md:text-sm text-gray-500">@lang('quantity')</label>
                  <input type="number" name="quantity" min="0" max="15" value="{{ $item['quantity'] }}"
                    class="w-16 border border-gray-200 rounded-md px-2 py-1 text-xs md:text-sm outline-none focus:border-gold-light focus:ring-1 focus:ring-gold-soft">
                  <button type="submit" class="text-xs text-blue-600 hover:underline">Atualizar</button>
                </form>

                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-2 mt-auto">
                  <p class="text-xs md:text-sm text-gray-500">@lang('subtotal'): <span class="font-semibold text-gray-800">R$ {{ number_format($item['price'] * $item['quantity'], 2, ',', '.') }}</span></p>
                  
                  <form action="{{ route('cart.remove', $productId) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="flex items-center gap-1 text-xs text-red-500 hover:text-red-700 hover:underline transition-all">
                      <x-heroicon-o-minus-circle class="w-4 h-4" />
                      @lang('remove')
                    </button>
                  </form>
                </div>
              </div>
            </div>
          @endforeach
        @else
          <div class="bg-white rounded-xl shadow-md shadow-gold-medium/20 p-8 text-center">
            <x-heroicon-o-shopping-cart class="w-16 h-16 text-gray-300 mx-auto mb-4" />
            <p class="text-gray-600 font-medium mb-2">@lang('empty_cart')</p>
            <a href="/" class="text-gold-dark hover:underline text-sm">@lang('continue_shopping')</a>
          </div>
        @endif
      </section>

      <aside class="lg:col-span-1">
        <div class="bg-white p-4 md:p-5 rounded-xl shadow-md shadow-gold-medium/20 flex flex-col gap-4 sticky top-4">

          <h2 class="font-bold text-base md:text-lg text-gold-dark border-b border-gray-200 pb-3">@lang('checkout')</h2>

          <div class="flex flex-col gap-2 text-xs md:text-sm text-gray-600">
            <div class="flex justify-between">
              <span>@lang('item')</span>
              <span>R$ {{ number_format($total, 2, ',', '.') }}</span>
            </div>
            <div class="flex justify-between">
              <span>@lang('freight')</span>
              <span class="text-green-600 font-medium">@lang('free')</span>
            </div>
          </div>

          <div class="flex justify-between font-semibold text-sm md:text-base border-t border-dashed border-gold-soft pt-3">
            <span>@lang('total')</span>
            <span>R$ {{ number_format($total, 2, ',', '.') }}</span>
          </div>

          <p class="text-xs text-gray-400 text-center">@lang('installments')</p>

          <div class="flex flex-col gap-2">
            @if(count($cartItems) > 0)
              <a href="/checkout" class="bg-gray-900 text-white flex items-center justify-center rounded-md w-full py-3 border-2 border-transparent hover:bg-gold-medium cursor-pointer outline-none transition-all duration-200">
                @lang('checkout')
              </a>
            @else
              <button disabled class="bg-gray-300 text-gray-500 flex items-center justify-center rounded-md w-full py-3 border-2 border-transparent cursor-not-allowed">
                @lang('checkout')
              </button>
            @endif
            
            <a href="/" class="bg-white text-gray-900 flex items-center justify-center rounded-md w-full py-3 border-2 border-gray-900 hover:bg-gray-900 hover:text-white cursor-pointer outline-none transition-all duration-200">
              @lang('continue_shopping')
            </a>
          </div>

          <p class="flex items-center justify-center gap-1 text-xs text-gray-500">
            <x-heroicon-o-check-badge class="w-4 h-4 text-green-500" />
            @lang('secure_purchase')
          </p>

        </div>
      </aside>

    </div>
    </div>
  </div>
</main>

@if(session('success'))
  <script>
    alert('{{ session('success') }}');
  </script>
@endif

@if(session('error'))
  <script>
    alert('{{ session('error') }}');
  </script>
@endif
@endsection

