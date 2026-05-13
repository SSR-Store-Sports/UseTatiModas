@extends('_layouts.app')

@section('title', __('checkout') . ': UseTatiModas')

@section('content')
<main class="px-4 md:px-8 lg:px-24 py-6 md:py-12">
  <div class="max-w-7xl mx-auto">
    <div class="flex-col flex mb-6 md:mb-8 gap-2 shadow-[0_8px_4px_-4px_rgba(236,72,153,0.4)]">
      <h1 class="text-[#7A5A12] text-2xl md:text-3xl lg:text-4xl drop-shadow-[0_2px_4px_rgba(236,72,153,0.6)]">@lang('checkout')</h1>
      <span class="w-full h-0.5 bg-[#7A5A12]"></span>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 md:gap-8">
      <section class="lg:col-span-2 flex flex-col gap-6">
        <div class="bg-white rounded-lg md:rounded-xl shadow-md shadow-[#C79B2B]/20 p-4 md:p-6">
          <h2 class="font-bold text-base md:text-lg text-[#7A5A12] border-b border-gray-200 pb-3 mb-4">@lang('shipping_address')</h2>
          
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="md:col-span-2">
              <label class="text-xs md:text-sm font-medium text-gray-700 mb-2 block">@lang('full_name')</label>
              <input type="text" class="w-full px-4 py-2.5 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-[#F1C24A] hover:bg-white focus:border-[#C79B2B] focus:bg-white focus:ring-2 focus:ring-[#C79B2B]/20" placeholder="José Silva">
            </div>

            <div>
              <label class="text-xs md:text-sm font-medium text-gray-700 mb-2 block">@lang('cpf')</label>
              <input type="text" class="w-full px-4 py-2.5 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-[#F1C24A] hover:bg-white focus:border-[#C79B2B] focus:bg-white focus:ring-2 focus:ring-[#C79B2B]/20" placeholder="000.000.000-00">
            </div>

            <div>
              <label class="text-xs md:text-sm font-medium text-gray-700 mb-2 block">@lang('phone')</label>
              <input type="text" class="w-full px-4 py-2.5 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-[#F1C24A] hover:bg-white focus:border-[#C79B2B] focus:bg-white focus:ring-2 focus:ring-[#C79B2B]/20" placeholder="(11) 99999-9999">
            </div>

            <div class="md:col-span-2">
              <label class="text-xs md:text-sm font-medium text-gray-700 mb-2 block">CEP</label>
              <input type="text" class="w-full px-4 py-2.5 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-[#F1C24A] hover:bg-white focus:border-[#C79B2B] focus:bg-white focus:ring-2 focus:ring-[#C79B2B]/20" placeholder="00000-000">
            </div>

            <div class="md:col-span-2">
              <label class="text-xs md:text-sm font-medium text-gray-700 mb-2 block">@lang('address')</label>
              <input type="text" class="w-full px-4 py-2.5 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-[#F1C24A] hover:bg-white focus:border-[#C79B2B] focus:bg-white focus:ring-2 focus:ring-[#C79B2B]/20" placeholder="Rua das Flores">
            </div>

            <div>
              <label class="text-xs md:text-sm font-medium text-gray-700 mb-2 block">@lang('number')</label>
              <input type="text" class="w-full px-4 py-2.5 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-[#F1C24A] hover:bg-white focus:border-[#C79B2B] focus:bg-white focus:ring-2 focus:ring-[#C79B2B]/20" placeholder="123">
            </div>

            <div>
              <label class="text-xs md:text-sm font-medium text-gray-700 mb-2 block">@lang('complement')</label>
              <input type="text" class="w-full px-4 py-2.5 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-[#F1C24A] hover:bg-white focus:border-[#C79B2B] focus:bg-white focus:ring-2 focus:ring-[#C79B2B]/20" placeholder="Apto 101">
            </div>

            <div>
              <label class="text-xs md:text-sm font-medium text-gray-700 mb-2 block">@lang('neighborhood')</label>
              <input type="text" class="w-full px-4 py-2.5 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-[#F1C24A] hover:bg-white focus:border-[#C79B2B] focus:bg-white focus:ring-2 focus:ring-[#C79B2B]/20" placeholder="Centro">
            </div>

            <div>
              <label class="text-xs md:text-sm font-medium text-gray-700 mb-2 block">@lang('city')</label>
              <input type="text" class="w-full px-4 py-2.5 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-[#F1C24A] hover:bg-white focus:border-[#C79B2B] focus:bg-white focus:ring-2 focus:ring-[#C79B2B]/20" placeholder="São Paulo">
            </div>
          </div>
        </div>

        <div class="bg-white rounded-lg md:rounded-xl shadow-md shadow-[#C79B2B]/20 p-4 md:p-6">
          <h2 class="font-bold text-base md:text-lg text-[#7A5A12] border-b border-gray-200 pb-3 mb-4">@lang('payment_method')</h2>
          
          <div class="flex flex-col gap-3">
            <label class="flex items-center gap-3 p-4 border-2 border-gray-200 rounded-lg cursor-pointer hover:border-[#F1C24A] transition-all duration-200 has-[:checked]:border-[#C79B2B] has-[:checked]:bg-gray-50">
              <input type="radio" name="payment" value="credit" class="w-4 h-4 accent-[#C79B2B]" checked>
              <div class="flex items-center gap-2 flex-1">
                <x-heroicon-o-credit-card class="w-5 h-5 text-[#7A5A12]" />
                <span class="text-sm md:text-base font-medium text-gray-800">@lang('credit_card')</span>
              </div>
            </label>

            <label class="flex items-center gap-3 p-4 border-2 border-gray-200 rounded-lg cursor-pointer hover:border-[#F1C24A] transition-all duration-200 has-[:checked]:border-[#C79B2B] has-[:checked]:bg-gray-50">
              <input type="radio" name="payment" value="pix" class="w-4 h-4 accent-[#C79B2B]">
              <div class="flex items-center gap-2 flex-1">
                <x-heroicon-o-device-phone-mobile class="w-5 h-5 text-[#7A5A12]" />
                <span class="text-sm md:text-base font-medium text-gray-800">PIX</span>
              </div>
            </label>

            <label class="flex items-center gap-3 p-4 border-2 border-gray-200 rounded-lg cursor-pointer hover:border-[#F1C24A] transition-all duration-200 has-[:checked]:border-[#C79B2B] has-[:checked]:bg-gray-50">
              <input type="radio" name="payment" value="boleto" class="w-4 h-4 accent-[#C79B2B]">
              <div class="flex items-center gap-2 flex-1">
                <x-heroicon-o-document-text class="w-5 h-5 text-[#7A5A12]" />
                <span class="text-sm md:text-base font-medium text-gray-800">@lang('boleto')</span>
              </div>
            </label>
          </div>

          <div class="mt-4 pt-4 border-t border-gray-100">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
              <div class="md:col-span-2">
                <label class="text-xs md:text-sm font-medium text-gray-700 mb-2 block">@lang('card_number')</label>
                <input type="text" class="w-full px-4 py-2.5 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-[#F1C24A] hover:bg-white focus:border-[#C79B2B] focus:bg-white focus:ring-2 focus:ring-[#C79B2B]/20" placeholder="0000 0000 0000 0000">
              </div>

              <div class="md:col-span-2">
                <label class="text-xs md:text-sm font-medium text-gray-700 mb-2 block">@lang('cardholder_name')</label>
                <input type="text" class="w-full px-4 py-2.5 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-[#F1C24A] hover:bg-white focus:border-[#C79B2B] focus:bg-white focus:ring-2 focus:ring-[#C79B2B]/20" placeholder="Nome impresso no cartão">
              </div>

              <div>
                <label class="text-xs md:text-sm font-medium text-gray-700 mb-2 block">@lang('expiry_date')</label>
                <input type="text" class="w-full px-4 py-2.5 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-[#F1C24A] hover:bg-white focus:border-[#C79B2B] focus:bg-white focus:ring-2 focus:ring-[#C79B2B]/20" placeholder="MM/AA">
              </div>

              <div>
                <label class="text-xs md:text-sm font-medium text-gray-700 mb-2 block">CVV</label>
                <input type="text" class="w-full px-4 py-2.5 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-[#F1C24A] hover:bg-white focus:border-[#C79B2B] focus:bg-white focus:ring-2 focus:ring-[#C79B2B]/20" placeholder="000">
              </div>
            </div>
          </div>
        </div>
      </section>

      <aside class="lg:col-span-1">
        <div class="bg-white p-4 md:p-5 rounded-lg md:rounded-xl shadow-md shadow-[#C79B2B]/20 flex flex-col gap-4 sticky top-4">
          <h2 class="font-bold text-base md:text-lg text-[#7A5A12] border-b border-gray-200 pb-3">@lang('order_summary')</h2>

          <div class="flex flex-col gap-3 max-h-64 overflow-y-auto">
            @for($i = 0; $i < 2; $i++)
            <div class="flex gap-3 pb-3 border-b border-gray-100">
              <img src="{{ asset('assets/model_card.png') }}" class="w-16 h-16 rounded-md object-cover bg-gray-100 border border-gray-200 flex-shrink-0" alt="Produto">
              <div class="flex-1 min-w-0">
                <p class="text-sm font-semibold text-gray-800 truncate">Conjunto Delicado</p>
                <p class="text-xs text-gray-500">@lang('quantity'): 1</p>
                <p class="text-sm font-bold text-gray-800 mt-1">R$ 62,00</p>
              </div>
            </div>
            @endfor
          </div>

          <div class="flex flex-col gap-2 text-xs md:text-sm text-gray-600 pt-2">
            <div class="flex justify-between">
              <span>@lang('subtotal')</span>
              <span class="font-semibold text-gray-800">R$ 124,00</span>
            </div>
            <div class="flex justify-between">
              <span>@lang('freight')</span>
              <span class="text-green-600 font-medium">@lang('free')</span>
            </div>
            <div class="flex justify-between">
              <span>@lang('discount')</span>
              <span class="text-[#7A5A12] font-medium">- R$ 12,40</span>
            </div>
          </div>

          <div class="flex justify-between font-semibold text-sm md:text-base border-t border-dashed border-[#F9E446] pt-3">
            <span>@lang('total')</span>
            <span class="text-[#7A5A12]">R$ 111,60</span>
          </div>

          <p class="text-xs text-gray-400 text-center">@lang('installments')</p>

          <div class="flex flex-col gap-2">
            <button class="bg-gray-500 text-white flex items-center justify-center rounded-md w-full py-3 border-2 border-transparent hover:bg-white hover:border-[#7A5A12] hover:text-[#7A5A12] cursor-pointer outline-none transition-all duration-200 font-semibold">
              @lang('finalize_order')
            </button>
            <a href="/cart" class="bg-white text-[#7A5A12] flex items-center justify-center rounded-md w-full py-3 border-2 border-[#7A5A12] hover:bg-gray-100 hover:border-[#7A5A12] hover:text-[#7A5A12] cursor-pointer outline-none transition-all duration-200 font-semibold">
              @lang('back_to_cart')
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
</main>
@endsection
