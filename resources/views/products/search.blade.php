@extends('_layouts.app')

@section('title', __('search_products') . ': UseTatiModas')

@section('content')
  <main class="h-full">
    <div class="max-w-screen-2xl mx-auto">
      <div class="flex flex-col lg:flex-row px-4 md:px-12 lg:px-24 justify-center gap-4 md:gap-6 lg:gap-8 mt-6 md:mt-12">
      <aside class="w-full lg:w-44 shrink-0">
        <h1 class="text-base md:text-lg font-bold text-gray-800 mb-4 md:mb-6">@lang('search_placeholder')</h1>

        <div class="space-y-4 md:space-y-6">
          <div>
            <h2 class="text-sm md:text-md font-bold text-gray-800 mb-3 md:mb-4">@lang('filters')</h2>
            <div class="space-y-2">
              <label class="flex items-center text-xs md:text-sm text-gray-600">
                <input type="checkbox" class="mr-2 text-gold-dark focus:ring-gold-medium border-gray-300 rounded">
                @lang('on_sale')
              </label>
              <select
                class="w-full text-xs md:text-sm p-2 border border-gray-200 rounded-sm text-gray-600 focus:border-gold-medium outline-none">
                <option value="">@lang('category')</option>
              </select>
            </div>
          </div>

          <div class="border-t border-gray-200 pt-4 md:pt-6">
            <h2 class="text-sm md:text-md font-bold text-gray-800 mb-3 md:mb-4">@lang('by_category')</h2>
            <div class="space-y-2">
              <a href="#" class="block text-xs md:text-sm text-gray-600 hover:text-gold-dark">@lang('category_item1')</a>
              <a href="#" class="block text-xs md:text-sm text-gray-600 hover:text-gold-dark">@lang('category_item2')</a>
            </div>
          </div>
        </div>
      </aside>

      <main class="flex-1">
        <div
          class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 md:mb-8 pb-3 md:pb-4 border-b border-gray-200 gap-3">
          @if($query)
            <span class="text-sm md:text-md text-gray-600">
              @lang('search_result') <span class="font-bold text-gold-dark">'{{ $query }}'</span>
              <span class="text-xs text-gray-500">({{ $products->total() }} resultados)</span>
            </span>
          @else
            <span class="text-sm md:text-md text-gray-600">Todos os produtos</span>
          @endif

          <div class="flex items-center gap-2">
            <span class="text-xs md:text-sm text-gray-500">@lang('sort_by'):</span>
            <!-- <button
              class="text-xs md:text-sm font-semibold text-gray-800 hover:text-gold-dark">@lang('relevance')</button> -->
            <button class="text-xs md:text-sm font-semibold text-gray-800 hover:text-gold-dark">@lang('newest')</button>
          </div>
        </div>

        <section class="grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 md:gap-8 mb-8 md:mb-12">
          @forelse ($products as $product)
            <div class="flex flex-col w-full bg-white shadow-md rounded-lg gap-2 hover:shadow-2xl shadow-xl/30 cursor-pointer transition-all duration-300 hover:-translate-y-2 group">
              <a href="{{ route('product.show', $product->id) }}" class="flex flex-col justify-center items-center gap-2">
                <div class="overflow-hidden rounded-lg w-full">
                  <img src="{{ $product->images->first() ? asset('storage/' . $product->images->first()->image_path) : asset('assets/model_card.png') }}" 
                    alt="{{ $product->name }}"
                    class="h-48 md:h-64 w-full object-cover rounded-lg transition-transform duration-300 group-hover:scale-110">
                </div>
                <div class="flex gap-2">
                  <span class="h-2 w-4 rounded-full bg-gray-900 border-2 border-gray-900"></span>
                  <span class="h-2 w-4 rounded-full bg-white border-2 border-gray-900"></span>
                  <span class="h-2 w-4 rounded-full bg-white border-2 border-gray-900"></span>
                </div>
              </a>
              <div class="flex flex-col gap-4 justify-center px-4 py-4">
                <a href="{{ route('product.show', $product->id) }}" class="flex flex-col">
                  <label class="text-black text-left px-2 text-lg font-bold line-clamp-1 cursor-pointer">{{ $product->name }}</label>
                  <label class="text-gray-600 text-left px-2 text-sm line-clamp-2 cursor-pointer">{{ $product->description }}</label>
                  @if($product->old_price)
                    <label class="text-gray-600 text-left text-sm px-2 line-through truncate cursor-pointer">R$ {{ number_format($product->old_price, 2, ',', '.') }}</label>
                  @endif
                  <label class="text-black text-left text-2xl px-2 cursor-pointer">R$ {{ number_format($product->price, 2, ',', '.') }}</label>
                </a>
                <div class="flex flex-col md:flex-row gap-2">
                  <a href="{{ route('product.show', $product->id) }}"
                    class="bg-gray-900 text-white flex items-center justify-center rounded-md w-full py-2 gap-2 border-2 border-transparent hover:bg-gold-medium cursor-pointer outline-none transition-all duration-200">
                    <x-heroicon-o-shopping-bag class="h-4 w-4" />
                    <span class="text-sm">@lang('buy')</span>
                  </a>
                  <form action="{{ route('cart.add') }}" method="POST" class="w-full">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <input type="hidden" name="quantity" value="1">
                    <button type="submit"
                      class="bg-white text-gray-900 flex items-center justify-center rounded-md w-full py-2 gap-2 border-2 border-gray-900 hover:bg-gray-900 hover:text-white cursor-pointer outline-none transition-all duration-200">
                      <x-heroicon-o-shopping-cart class="h-4 w-4" />
                      <span class="text-sm">@lang('cart')</span>
                    </button>
                  </form>
                </div>
              </div>
            </div>
          @empty
            <div class="col-span-full flex flex-col items-center justify-center py-12">
              <x-heroicon-o-magnifying-glass class="w-16 h-16 text-gray-300 mb-4" />
              <p class="text-gray-600 font-medium mb-2">Nenhum produto encontrado</p>
              <p class="text-gray-400 text-sm">Tente buscar por outro termo</p>
            </div>
          @endforelse
        </section>

        @if($products->hasPages())
        <div class="flex flex-wrap gap-2 mb-8 md:mb-12 justify-center">
          @if ($products->onFirstPage())
            <span class="group text-gray-400 bg-gray-200 flex items-center justify-center rounded-sm h-10 md:h-12 px-3 md:px-4 gap-2 cursor-not-allowed text-center text-xs md:text-sm">
              <span>@lang('previous')</span>
            </span>
          @else
            <a href="{{ $products->previousPageUrl() }}" class="group text-white bg-gray-900 flex items-center justify-center rounded-sm h-10 md:h-12 px-3 md:px-4 gap-2 border-2 border-gray-900 hover:bg-gold-medium cursor-pointer text-center outline-none transition-all duration-200 text-xs md:text-sm">
              <span>@lang('previous')</span>
            </a>
          @endif

          @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
            @if ($page == $products->currentPage())
              <span class="group bg-gold-medium text-white flex items-center justify-center rounded-sm h-10 md:h-12 px-3 md:px-4 gap-2 border-2 border-gold-medium text-center text-xs md:text-sm font-semibold">
                <span>{{ $page }}</span>
              </span>
            @else
              <a href="{{ $url }}" class="group bg-white text-gray-900 flex items-center justify-center rounded-sm h-10 md:h-12 px-3 md:px-4 gap-2 border-2 border-gray-900 hover:bg-gray-900 hover:text-white cursor-pointer text-center outline-none transition-all duration-200 text-xs md:text-sm">
                <span>{{ $page }}</span>
              </a>
            @endif
          @endforeach

          @if ($products->hasMorePages())
            <a href="{{ $products->nextPageUrl() }}" class="group text-white bg-gray-900 flex items-center justify-center rounded-sm h-10 md:h-12 px-3 md:px-4 gap-2 border-2 border-gray-900 hover:bg-gold-medium cursor-pointer text-center outline-none transition-all duration-200 text-xs md:text-sm">
              <span>@lang('next')</span>
            </a>
          @else
            <span class="group text-gray-400 bg-gray-200 flex items-center justify-center rounded-sm h-10 md:h-12 px-3 md:px-4 gap-2 cursor-not-allowed text-center text-xs md:text-sm">
              <span>@lang('next')</span>
            </span>
          @endif
        </div>
        @endif
      </main>
      </div>
    </div>

    <x-discounts />
  </main>
@endsection