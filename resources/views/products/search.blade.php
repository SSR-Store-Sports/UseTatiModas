@extends('_layouts.app')

@section('title', __('search_products') . ': UseTatiModas')

@section('content')
  <main class="h-full">
    <div class="flex flex-col lg:flex-row px-4 md:px-12 lg:px-24 justify-center gap-4 md:gap-6 lg:gap-8 mt-6 md:mt-12">
      <aside class="w-full lg:w-44 shrink-0">
        <h1 class="text-base md:text-lg font-bold text-gray-800 mb-4 md:mb-6">@lang('search_placeholder')</h1>

        <div class="space-y-4 md:space-y-6">
          <div>
            <h2 class="text-sm md:text-md font-bold text-gray-800 mb-3 md:mb-4">@lang('filters')</h2>
            <div class="space-y-2">
              <label class="flex items-center text-xs md:text-sm text-gray-600">
                <input type="checkbox" class="mr-2 text-[#7A5A12] focus:ring-[#C79B2B] border-gray-300 rounded">
                @lang('on_sale')
              </label>
              <select
                class="w-full text-xs md:text-sm p-2 border border-gray-200 rounded-sm text-gray-600 focus:border-[#C79B2B] outline-none">
                <option value="">@lang('category')</option>
              </select>
            </div>
          </div>

          <div class="border-t border-gray-200 pt-4 md:pt-6">
            <h2 class="text-sm md:text-md font-bold text-gray-800 mb-3 md:mb-4">@lang('by_category')</h2>
            <div class="space-y-2">
              <a href="#" class="block text-xs md:text-sm text-gray-600 hover:text-[#7A5A12]">@lang('category_item1')</a>
              <a href="#" class="block text-xs md:text-sm text-gray-600 hover:text-[#7A5A12]">@lang('category_item2')</a>
            </div>
          </div>
        </div>
      </aside>

      <main class="flex-1">
        <div
          class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 md:mb-8 pb-3 md:pb-4 border-b border-gray-200 gap-3">
          <span class="text-sm md:text-md text-gray-600">@lang('search_result') <span
              class="font-bold text-[#7A5A12]">'Calças'</span></span>

          <div class="flex items-center gap-2">
            <span class="text-xs md:text-sm text-gray-500">@lang('sort_by'):</span>
            <button class="text-xs md:text-sm font-semibold text-gray-800 hover:text-[#7A5A12]">@lang('relevance')</button>
            <button class="text-xs md:text-sm font-semibold text-gray-500 hover:text-[#7A5A12]">@lang('newest')</button>
          </div>
        </div>

        <section class="grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 md:gap-8 mb-8 md:mb-12">
          @for ($i = 0; $i < 12; $i++)
            <div
              class="flex flex-col w-full bg-white shadow-md rounded-lg gap-2 hover:shadow-2xl hover:shadow-lg shadow-xl/30 cursor-pointer transition-all duration-300 hover:-translate-y-2 group">
              <a href="/product" class="flex flex-col justify-center items-center gap-2">
                <div class="overflow-hidden rounded-lg w-full">
                  <img src="{{ asset('assets/model_card.png') }}" alt=""
                    class="h-48 md:h-64 w-full object-cover rounded-lg transition-transform duration-300 group-hover:scale-110">
                </div>
                <div class="flex gap-2">
                  <span class="h-2 w-4 rounded-full bg-gray-500 border-2 border-[#C79B2B]"></span>
                  <span class="h-2 w-4 rounded-full bg-white border-2 border-[#C79B2B]"></span>
                  <span class="h-2 w-4 rounded-full bg-white border-2 border-[#C79B2B]"></span>
                </div>
              </a>
              <div class="flex flex-col gap-4 justify-center px-4 py-4">
                <a href="/product" class="flex flex-col">
                  <label class="text-black text-left px-2 text-lg font-bold line-clamp-1 cursor-pointer">NC roupa
                    feminina</label>
                  <label class="text-gray-600 text-left px-2 text-sm line-clamp-2 cursor-pointer">Peça de roupa exclusiva
                    com...</label>
                  <label class="text-gray-600 text-left text-sm px-2 line-through truncate cursor-pointer">R$ 3.500</label>
                  <label class="text-black text-left text-2xl px-2 cursor-pointer">R$ 3.000</label>
                </a>
                <div class="flex flex-col md:flex-row gap-2">
                  <button
                    class="bg-gray-500 text-white flex items-center justify-center rounded-md w-full py-2 gap-2 border-2 border-transparent hover:bg-white hover:border-[#7A5A12] hover:text-[#7A5A12] cursor-pointer outline-none transition-all duration-200">
                    <x-heroicon-o-shopping-bag class="h-4 w-4" />
                    <span class="text-sm">@lang('buy')</span>
                  </button>
                  <button
                    class="bg-white text-[#C79B2B] flex items-center justify-center rounded-md w-full py-2 gap-2 border-2 border-[#C79B2B] hover:bg-gray-1000 hover:text-white cursor-pointer outline-none transition-all duration-200">
                    <x-heroicon-o-shopping-cart class="h-4 w-4" />
                    <span class="text-sm">@lang('cart')</span>
                  </button>
                </div>
              </div>
            </div>
          @endfor
        </section>

        <div class="flex flex-wrap gap-2 mb-8 md:mb-12 justify-center">
          <button
            class="group text-white bg-[#7A5A12] flex items-center justify-center rounded-sm h-10 md:h-12 px-3 md:px-4 gap-2 border-2 border-[#7A5A12] hover:bg-gray-100 hover:border-2 hover:border-[#7A5A12] hover:text-[#7A5A12] cursor-pointer text-center outline-none transition-all duration-200 text-xs md:text-sm"
            disabled>
            <span>@lang('previous')</span>
          </button>
          <button
            class="group bg-[#F9E446] text-white flex items-center justify-center rounded-sm h-10 md:h-12 px-3 md:px-4 gap-2 border-2 border-[#F9E446] hover:bg-gray-100 hover:border-2 hover:border-[#7A5A12] hover:text-[#7A5A12] cursor-pointer text-center outline-none transition-all duration-200 text-xs md:text-sm">
            <span>1</span>
          </button>
          <button
            class="group bg-white text-[#7A5A12] flex items-center justify-center rounded-sm h-10 md:h-12 px-3 md:px-4 gap-2 border-2 border-[#7A5A12] hover:bg-gray-100 hover:border-2 hover:border-[#7A5A12] hover:text-[#7A5A12] cursor-pointer text-center outline-none transition-all duration-200 text-xs md:text-sm">
            <span>2</span>
          </button>
          <button
            class="group bg-white text-[#7A5A12] flex items-center justify-center rounded-sm h-10 md:h-12 px-3 md:px-4 gap-2 border-2 border-[#7A5A12] hover:bg-gray-100 hover:border-2 hover:border-[#7A5A12] hover:text-[#7A5A12] cursor-pointer text-center outline-none transition-all duration-200 text-xs md:text-sm">
            <span>3</span>
          </button>
          <button
            class="group bg-white text-[#7A5A12] flex items-center justify-center rounded-sm h-10 md:h-12 px-3 md:px-4 gap-2 border-2 border-[#7A5A12] hover:bg-gray-100 hover:border-2 hover:border-[#7A5A12] hover:text-[#7A5A12] cursor-pointer text-center outline-none transition-all duration-200 text-xs md:text-sm">
            <span>...</span>
          </button>
          <button
            class="group bg-white text-[#7A5A12] flex items-center justify-center rounded-sm h-10 md:h-12 px-3 md:px-4 gap-2 border-2 border-[#7A5A12] hover:bg-gray-100 hover:border-2 hover:border-[#7A5A12] hover:text-[#7A5A12] cursor-pointer text-center outline-none transition-all duration-200 text-xs md:text-sm">
            <span>7</span>
          </button>
          <button
            class="group text-white bg-[#7A5A12] flex items-center justify-center rounded-sm h-10 md:h-12 px-3 md:px-4 gap-2 border-2 border-[#7A5A12] hover:bg-gray-100 hover:border-2 hover:border-[#7A5A12] hover:text-[#7A5A12] cursor-pointer text-center outline-none transition-all duration-200 text-xs md:text-sm">
            <span>@lang('next')</span>
          </button>
        </div>
      </main>
    </div>

    <x-discounts />
  </main>
@endsection