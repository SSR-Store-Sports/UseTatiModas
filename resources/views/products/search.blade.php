@extends('_layouts.app')

@section('title', 'Pesquisa: UseTatiModas')

@section('content')
  <main class="h-full">
    <div class="flex mx-24 justify-center gap-8 mt-12">
      <aside class="w-44 shrink-0">
        <h1 class="text-lg font-bold text-gray-800 mb-6">HOME / CALÇAS</h1>

        <div class="space-y-6">
          <div>
            <h2 class="text-md font-bold text-gray-800 mb-4">Filtros</h2>
            <div class="space-y-2">
              <label class="flex items-center text-sm text-gray-600">
                <input type="checkbox" class="mr-2 text-pink-600 focus:ring-pink-500 border-gray-300 rounded">
                Em promoção
              </label>
              <select class="w-full text-sm p-2 border border-gray-200 rounded-sm text-gray-600 focus:border-pink-500 outline-none">
                <option value="">Categoria</option>
              </select>
            </div>
          </div>

          <div class="border-t border-gray-200 pt-6">
            <h2 class="text-md font-bold text-gray-800 mb-4">Por categoria</h2>
            <div class="space-y-2">
              <a href="#" class="block text-sm text-gray-600 hover:text-pink-600">Calça para Mulheres</a>
              <a href="#" class="block text-sm text-gray-600 hover:text-pink-600">Calça Social</a>
            </div>
          </div>
        </div>
      </aside>

      <main class="flex-1">
        <div class="flex justify-between items-center mb-8 pb-4 border-b border-gray-200">
          <span class="text-md text-gray-600">Resultado da pesquisa para <span class="font-bold text-pink-600">'Calças'</span></span>
          
          <div class="flex items-center gap-2">
            <span class="text-sm text-gray-500">Classificar por:</span>
            <button class="text-sm font-semibold text-gray-800 hover:text-pink-600">Relevância</button>
            <button class="text-sm font-semibold text-gray-500 hover:text-pink-600">Mais recentes</button>
          </div>
        </div>

        <section class="grid grid-cols-4 gap-8 mb-12">
          @for ($i = 0; $i < 12; $i++)
            <div class="flex flex-col w-full bg-white shadow-pink-500/90 rounded-lg gap-2 hover:shadow-xl/50 shadow-xl/30 hover:cursor-pointer inset-shadow-xs transition-all duration-200">
                <div class="flex flex-col justify-center items-center gap-2">
                    <div class="overflow-hidden rounded-lg w-full">
                        <img src="{{ asset('assets/model_card.png') }}" alt=""
                            class="h-64 w-full rounded-lg transition-transform duration-300 hover:scale-110">
                    </div>
                    <div class="flex gap-2">
                        <span class="h-2 w-4 rounded-full bg-pink-500 border-2 border-pink-500"></span>
                        <span class="h-2 w-4 rounded-full bg-white border-2 border-pink-500"></span>
                        <span class="h-2 w-4 rounded-full bg-white border-2 border-pink-500"></span>
                    </div>
                </div>
                <div class="flex flex-col gap-4 justify-center px-4 py-4">
                    <div class="flex flex-col">
                        <label class="text-black text-left px-2 text-lg font-bold line-clamp-1">NC roupa feminina</label>
                        <label class="text-gray-600 text-left px-2 text-sm line-clamp-2">Peça de roupa exclusiva com...</label>
                        <label class="text-gray-600 text-left text-sm px-2 line-through truncate">R$ 3.500</label>
                        <label class="text-black text-left text-2xl px-2">R$ 3.000</label>
                    </div>
                    <div class="flex flex-col gap-2">
                        <a href="/product"
                            class="group bg-pink-500 text-white flex items-center justify-center rounded-sm w-full pt-3 pb-3 gap-2 border-2 border-transparent hover:bg-white hover:border-2 hover:border-pink-600 hover:text-pink-600 cursor-pointer text-center outline-none transition-all duration-200">
                            <span>Comprar</span>
                            <x-heroicon-o-shopping-cart class="h-4 w-4" />
                        </a>
                        <button
                            class="group bg-white text-pink-600 flex items-center justify-center rounded-sm w-full pt-3 pb-3 gap-2 border-2 border-pink-600 hover:bg-gray-100 hover:border-2 hover:border-pink-700 hover:text-pink-700 cursor-pointer text-center outline-none transition-all duration-200">
                            <span>Carrinho</span>
                            <x-heroicon-o-plus-circle class="h-4 w-4" />
                        </button>
                    </div>
                </div>
            </div>
          @endfor
        </section>

        <div class="flex gap-2 mb-12 justify-center">
            <button class="group text-white bg-pink-600 flex items-center justify-center rounded-sm h-12 px-4 pt-3 pb-3 gap-2 border-2 border-pink-600 hover:bg-gray-100 hover:border-2 hover:border-pink-700 hover:text-pink-700 cursor-pointer text-center outline-none transition-all duration-200" disabled>
                <span>Anterior</span>
            </button>
            <button class="group bg-pink-300 text-white flex items-center justify-center rounded-sm h-12 px-4 pt-3 pb-3 gap-2 border-2 border-pink-300 hover:bg-gray-100 hover:border-2 hover:border-pink-700 hover:text-pink-700 cursor-pointer text-center outline-none transition-all duration-200">
                <span>1</span>
            </button>
            <button class="group bg-white text-pink-600 flex items-center justify-center rounded-sm h-12 px-4 pt-3 pb-3 gap-2 border-2 border-pink-600 hover:bg-gray-100 hover:border-2 hover:border-pink-700 hover:text-pink-700 cursor-pointer text-center outline-none transition-all duration-200">
                <span>2</span>
            </button>
            <button class="group bg-white text-pink-600 flex items-center justify-center rounded-sm h-12 px-4 pt-3 pb-3 gap-2 border-2 border-pink-600 hover:bg-gray-100 hover:border-2 hover:border-pink-700 hover:text-pink-700 cursor-pointer text-center outline-none transition-all duration-200">
                <span>3</span>
            </button>
            <button class="group bg-white text-pink-600 flex items-center justify-center rounded-sm h-12 px-4 pt-3 pb-3 gap-2 border-2 border-pink-600 hover:bg-gray-100 hover:border-2 hover:border-pink-700 hover:text-pink-700 cursor-pointer text-center outline-none transition-all duration-200">
                <span>...</span>
            </button>
            <button class="group bg-white text-pink-600 flex items-center justify-center rounded-sm h-12 px-4 pt-3 pb-3 gap-2 border-2 border-pink-600 hover:bg-gray-100 hover:border-2 hover:border-pink-700 hover:text-pink-700 cursor-pointer text-center outline-none transition-all duration-200">
                <span>7</span>
            </button>
            <button class="group text-white bg-pink-600 flex items-center justify-center rounded-sm h-12 px-4 pt-3 pb-3 gap-2 border-2 border-pink-600 hover:bg-gray-100 hover:border-2 hover:border-pink-700 hover:text-pink-700 cursor-pointer text-center outline-none transition-all duration-200">
                <span>Próximo</span>
            </button>
        </div>
      </main>
    </div>

    <x-discounts />
  </main>
@endsection