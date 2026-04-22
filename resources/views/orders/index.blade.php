@extends('_layouts.app')

@section('title', __('my_orders') . ' | UseTatiModas')

@section('content')
<main class="py-12 px-18">
  <div class="max-w-6xl mx-auto ">
    <div class="flex-col flex mb-8 gap-2 shadow-[0_8px_4px_-4px_rgba(236,72,153,0.4)]">
      <h1 class="text-pink-600 text-4xl drop-shadow-[0_2px_4px_rgba(236,72,153,0.6)]">@lang('my_orders')</h1>
      <span class="w-full  h-0.5 bg-pink-600"></span>
    </div>
    <section class="flex flex-col gap-6">
      @for($i = 0; $i < 2; $i++)
        <div class="bg-white rounded-xl shadow-md shadow-pink-500/20 p-6 transition-colors duration-200">
        <div class="flex justify-between items-center mb-6">
          <div>
            <h2 class="text-lg font-bold text-gray-800">Pedido #PED000013</h2>
            <p class="text-sm text-gray-500">@lang('date'): 05/12/2025</p>
          </div>
          <div class="flex gap-4 items-center">
            <span class="text-sm font-medium text-gray-600 border border-gray-200 px-3 py-1">@lang('preparing')</span>
            <a href="/orders/details" class="bg-pink-500 text-white px-6 py-2 rounded-sm border-2 border-transparent hover:bg-white hover:border-pink-600 hover:text-pink-600 transition-all duration-200 text-sm font-semibold">@lang('view_details')</a>
          </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div class="md:col-span-2">
            <h3 class="text-sm font-bold text-gray-800 mb-4 uppercase tracking-wider">@lang('products')</h3>
            <div class="flex flex-col gap-4">
              @for($j = 0; $j < 2; $j++)
                <div class="flex items-center gap-4 border-b border-gray-100 pb-4">
                <img src="{{ asset('assets/model_card.png') }}" class="w-16 h-16 bg-gray-100 border border-gray-200"></img>
                <div>
                  <p class="font-semibold text-gray-800">Conjunto Delicado</p>
                  <p class="text-sm text-gray-500">@lang('quantity'): 2 | R$ 249,50</p>
                </div>
            </div>
            @endfor
          </div>
        </div>

        <div class="bg-gray-50 p-4 border border-gray-100">
          <h3 class="text-sm font-bold text-gray-800 mb-4 uppercase tracking-wider">@lang('subtotal')</h3>
          <div class="flex justify-between mb-2">
            <span class="text-gray-600">@lang('subtotal'):</span>
            <span class="font-semibold text-gray-800">R$ 749,70</span>
          </div>
          <div class="flex justify-between mb-4">
            <span class="text-gray-600">@lang('freight'):</span>
            <span class="font-semibold text-gray-800">Grátis</span>
          </div>
          <div class="border-t border-gray-200 pt-2 flex justify-between">
            <span class="font-bold text-gray-800">@lang('total'):</span>
            <span class="font-bold text-pink-600">R$ 749,70</span>
          </div>

          <a href="#" class="block mt-6 text-center text-pink-600 hover:text-pink-700 text-sm font-semibold underline">@lang('need_help_order')</a>
        </div>
  </div>
  </div>
  @endfor
  </section>
  </div>
</main>
@endsection