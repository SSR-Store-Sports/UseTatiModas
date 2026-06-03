@extends('_layouts.app')

@section('title', __('checkout') . ': UseTatiModas')

@section('content')
<main class="px-4 md:px-12 lg:px-24 py-6 md:py-12">
  <div class="max-w-screen-2xl mx-auto">
    <div class="grid grid-rows-[auto_1fr] gap-4 md:gap-6">
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center border-b border-gray-200 pb-3 md:pb-4 gap-2">
      <div class="flex items-center gap-1.5">
        <x-heroicon-o-shopping-bag class="w-5 h-5 text-gold-dark" />
        <h1 class="font-bold text-xl md:text-2xl text-gold-dark">@lang('checkout')</h1>
      </div>
      <a href="{{ route('cart.index') }}" class="text-xs md:text-sm text-gray-500 hover:text-gold-dark transition-colors">
        <x-heroicon-o-arrow-left class="w-4 h-4 inline" /> Voltar ao carrinho
      </a>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 md:gap-8">
      <section class="lg:col-span-2 flex flex-col gap-4">
        <div class="bg-white rounded-xl shadow-md shadow-gold-medium/20 p-4 md:p-6">
          <div class="flex justify-between items-center mb-4">
            <h2 class="font-bold text-base md:text-lg text-gray-800">Endereço de Entrega</h2>
            <button class="text-xs md:text-sm text-gold-dark hover:underline font-medium">Alterar</button>
          </div>
          
          <div class="bg-gray-50 border border-gray-200 rounded-lg p-4">
            <p class="text-sm font-semibold text-gray-800">José Silva</p>
            <p class="text-sm text-gray-600 mt-1">Rua das Flores, 123 - Centro</p>
            <p class="text-sm text-gray-600">São Paulo, SP - CEP 01234-567</p>
            <p class="text-sm text-gray-600 mt-2">Telefone: (11) 99999-9999</p>
          </div>
        </div>

        <div class="bg-white rounded-xl shadow-md shadow-gold-medium/20 p-4 md:p-6">
          <h2 class="font-bold text-base md:text-lg text-gray-800 mb-4">Forma de Entrega</h2>
          
          <div class="flex flex-col gap-3">
            <label class="flex items-center gap-3 p-4 border-2 border-gray-200 rounded-lg cursor-pointer hover:border-gold-medium transition-all has-checked:border-gold-medium has-checked:bg-gold-light/5">
              <input type="radio" name="delivery" value="standard" class="w-4 h-4 accent-gold-medium" checked>
              <div class="flex-1">
                <div class="flex justify-between items-start">
                  <div>
                    <p class="font-semibold text-gray-800">Entrega Padrão</p>
                    <p class="text-sm text-gray-500">Receba em até 7 dias úteis</p>
                  </div>
                  <span class="text-green-600 font-semibold">Grátis</span>
                </div>
              </div>
            </label>

            <label class="flex items-center gap-3 p-4 border-2 border-gray-200 rounded-lg cursor-pointer hover:border-gold-medium transition-all has-checked:border-gold-medium has-checked:bg-gold-light/5">
              <input type="radio" name="delivery" value="express" class="w-4 h-4 accent-gold-medium">
              <div class="flex-1">
                <div class="flex justify-between items-start">
                  <div>
                    <p class="font-semibold text-gray-800">Entrega Expressa</p>
                    <p class="text-sm text-gray-500">Receba em até 2 dias úteis</p>
                  </div>
                  <span class="text-gray-800 font-semibold">R$ 15,00</span>
                </div>
              </div>
            </label>
          </div>
        </div>

        <div class="bg-white rounded-xl shadow-md shadow-gold-medium/20 p-4 md:p-6">
          <h2 class="font-bold text-base md:text-lg text-gray-800 mb-4">Forma de Pagamento</h2>
          
          <div class="flex flex-col gap-3">
            <label class="flex items-center gap-3 p-4 border-2 border-gray-200 rounded-lg cursor-pointer hover:border-gold-medium transition-all has-checked:border-gold-medium has-checked:bg-gold-light/5">
              <input type="radio" name="payment" value="pix" class="w-4 h-4 accent-gold-medium" checked>
              <x-heroicon-o-device-phone-mobile class="w-6 h-6 text-gold-dark" />
              <div class="flex-1">
                <p class="font-semibold text-gray-800">PIX</p>
                <p class="text-sm text-gray-500">Aprovação imediata</p>
              </div>
            </label>

            <label class="flex items-center gap-3 p-4 border-2 border-gray-200 rounded-lg cursor-pointer hover:border-gold-medium transition-all has-checked:border-gold-medium has-checked:bg-gold-light/5">
              <input type="radio" name="payment" value="credit" class="w-4 h-4 accent-gold-medium">
              <x-heroicon-o-credit-card class="w-6 h-6 text-gold-dark" />
              <div class="flex-1">
                <p class="font-semibold text-gray-800">Cartão de Crédito</p>
                <p class="text-sm text-gray-500">Parcele em até 12x sem juros</p>
              </div>
            </label>

            <label class="flex items-center gap-3 p-4 border-2 border-gray-200 rounded-lg cursor-pointer hover:border-gold-medium transition-all has-checked:border-gold-medium has-checked:bg-gold-light/5">
              <input type="radio" name="payment" value="boleto" class="w-4 h-4 accent-gold-medium">
              <x-heroicon-o-document-text class="w-6 h-6 text-gold-dark" />
              <div class="flex-1">
                <p class="font-semibold text-gray-800">Boleto Bancário</p>
                <p class="text-sm text-gray-500">Vencimento em 3 dias úteis</p>
              </div>
            </label>
          </div>
        </div>
      </section>

      <aside class="lg:col-span-1">
        <div class="bg-white p-4 md:p-5 rounded-xl shadow-md shadow-gold-medium/20 flex flex-col gap-4 sticky top-4">
          <h2 class="font-bold text-base md:text-lg text-gold-dark border-b border-gray-200 pb-3">Resumo da Compra</h2>

          <div class="flex flex-col gap-3 max-h-80 overflow-y-auto">
            @foreach($cartItems as $productId => $item)
            <div class="flex gap-3 pb-3 border-b border-gray-100 last:border-0">
              <img src="{{ asset($item['image']) }}" class="w-14 h-14 rounded-md object-cover bg-gray-100 border border-gray-200 shrink-0" alt="{{ $item['name'] }}">
              <div class="flex-1 min-w-0">
                <p class="text-sm font-semibold text-gray-800 line-clamp-2">{{ $item['name'] }}</p>
                <p class="text-xs text-gray-500">Qtd: {{ $item['quantity'] }}</p>
                <p class="text-sm font-bold text-gray-800 mt-1">R$ {{ number_format($item['price'] * $item['quantity'], 2, ',', '.') }}</p>
              </div>
            </div>
            @endforeach
          </div>

          <div class="flex flex-col gap-2 text-xs md:text-sm text-gray-600">
            <div class="flex justify-between">
              <span>Produto</span>
              <span>R$ {{ number_format($total, 2, ',', '.') }}</span>
            </div>
            <div class="flex justify-between">
              <span>Frete</span>
              <span class="text-green-600 font-medium">Grátis</span>
            </div>
          </div>

          <div class="flex justify-between font-semibold text-sm md:text-base border-t border-dashed border-gold-soft pt-3">
            <span>Total</span>
            <span>R$ {{ number_format($total, 2, ',', '.') }}</span>
          </div>

          <p class="text-xs text-gray-400 text-center">@lang('installments')</p>

          <button class="bg-gray-900 text-white flex items-center justify-center rounded-md w-full py-3 border-2 border-transparent hover:bg-gold-medium cursor-pointer outline-none transition-all duration-200">
            Finalizar Pedido
          </button>

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
@endsection
