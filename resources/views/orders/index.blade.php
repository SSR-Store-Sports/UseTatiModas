@extends('_layouts.app')

@section('title', __('my_orders') . ' | UseTatiModas')

@section('content')
<main class="py-6 md:py-12 px-4 md:px-8 lg:px-18">
  <div class="max-w-6xl mx-auto">
    <div class="flex-col flex mb-6 md:mb-8 gap-2 shadow-[0_8px_4px_-4px_rgba(236,72,153,0.4)]">
      <h1 class="text-gold-dark text-2xl md:text-3xl lg:text-4xl drop-shadow-[0_2px_4px_rgba(236,72,153,0.6)]">@lang('my_orders')</h1>
      <span class="w-full h-0.5 bg-gold-dark"></span>
    </div>
    <section class="flex flex-col gap-4 md:gap-6">
      @for($i = 0; $i < 2; $i++)
        <div class="bg-white rounded-lg md:rounded-xl shadow-md shadow-[#C79B2B]/20 p-4 md:p-6 transition-colors duration-200">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-4 md:mb-6 gap-3 md:gap-4">
          <div>
            <h2 class="text-base md:text-lg font-bold text-gray-800">Pedido #PED000013</h2>
            <p class="text-xs md:text-sm text-gray-500">@lang('date'): 05/12/2025</p>
          </div>
          <div class="flex flex-col sm:flex-row gap-2 md:gap-4 items-stretch sm:items-center w-full sm:w-auto">
            <span class="text-xs md:text-sm font-medium text-gray-600 border border-gray-200 px-3 py-1.5 text-center rounded">@lang('preparing')</span>
            <a href="/orders/details" class="bg-gray-500 text-white px-4 md:px-6 py-1.5 md:py-2 rounded-sm border-2 border-transparent hover:bg-white hover:border-gold-dark hover:text-gold-dark transition-all duration-200 text-xs md:text-sm font-semibold text-center">@lang('view_details')</a>
          </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 md:gap-8">
          <div class="lg:col-span-2">
            <h3 class="text-xs md:text-sm font-bold text-gray-800 mb-3 md:mb-4 uppercase tracking-wider">@lang('products')</h3>
            <div class="flex flex-col gap-3 md:gap-4">
              @for($j = 0; $j < 2; $j++)
                <div class="flex items-center gap-3 md:gap-4 border-b border-gray-100 pb-3 md:pb-4">
                <img src="{{ asset('assets/model_card.png') }}" class="w-14 h-14 md:w-16 md:h-16 bg-gray-100 border border-gray-200 flex-shrink-0"></img>
                <div class="flex-1 min-w-0">
                  <p class="font-semibold text-gray-800 text-sm md:text-base truncate">Conjunto Delicado</p>
                  <p class="text-xs md:text-sm text-gray-500">@lang('quantity'): 2 | R$ 249,50</p>
                </div>
            </div>
            @endfor
          </div>
        </div>

        <div class="bg-gray-50 p-4 md:p-5 border border-gray-100 rounded">
          <h3 class="text-xs md:text-sm font-bold text-gray-800 mb-3 md:mb-4 uppercase tracking-wider">@lang('subtotal')</h3>
          <div class="flex justify-between mb-2 text-sm md:text-base">
            <span class="text-gray-600">@lang('subtotal'):</span>
            <span class="font-semibold text-gray-800">R$ 749,70</span>
          </div>
          <div class="flex justify-between mb-3 md:mb-4 text-sm md:text-base">
            <span class="text-gray-600">@lang('freight'):</span>
            <span class="font-semibold text-gray-800">Grátis</span>
          </div>
          <div class="border-t border-gray-200 pt-2 md:pt-3 flex justify-between">
            <span class="font-bold text-gray-800 text-sm md:text-base">@lang('total'):</span>
            <span class="font-bold text-gold-dark text-sm md:text-base">R$ 749,70</span>
          </div>

          <a href="#" class="block mt-4 md:mt-6 text-center text-gold-dark hover:text-gold-dark text-xs md:text-sm font-semibold underline">@lang('need_help_order')</a>
        </div>
  </div>
  </div>
  @endfor
  </section>
  </div>
</main>
@endsection

