@extends('_layouts.app')

@section('title', 'Pesquisa: UseTatiModas')

@section('content')
  <main class="h-full">
    <div class="flex mx-24 justify-center">
      <aside>
        <h1>HOME/CALÇAS</h1>

        <div>
          <h2>Filtros</h2>

          <div>
            <span>Em promoção</span>
            <option value="">Categoria</option>
          </div>

          <span></span>

          <div>
            <span>Por categoria</span>
            <option value="">Calça para Mulheres</option>
            <option value="">Calça Social</option>
          </div>

          <span></span>
        </div>
      </aside>

      <main>
        <span>Resultado da pesquisa para 'Calças'</span>

        <section>
          <div>
            <span>Classificar por</span>
            <button>Relevância</button>
            <button>Mais recentes</button>
          </div>

          <div class="grid grid-cols-2 gap-8 justify-center items-center">
            @for ($i = 0; $i < 15; $i++)
              <div
                class="flex flex-col w-full bg-white shadow-pink-500/90 rounded-lg gap-2 hover:shadow-xl/50 shadow-xl/30 hover:cursor-pointer inset-shadow-xs transition-all duration-200">
                <div class="flex flex-col justify-center items-center gap-2">
                  <div class="overflow-hidden rounded-lg">
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
                    <label class="text-black text-left px-2 text-lg font-bold line-clamp-1">NC roupa feminina top de linha
                      ultra fina</label>
                    <label class="text-gray-600 text-left px-2 text-sm line-clamp-2">Peça de roupa exclusiva com duplo
                      preenchimento e reforço em</label>
                    <label class="text-gray-600 text-left text-sm px-2 line-through truncate">R$ 3.500</label>
                    <label class="text-black text-left text-2xl px-2">R$ 3.000</label>
                  </div>
                  <div class="flex flex-col gap-2">
                    <button
                      class="group bg-pink-500 text-white flex items-center justify-center rounded-sm w-full pt-3 pb-3 gap-2 border-2 border-transparent hover:bg-white hover:border-2 hover:border-pink-600 hover:text-pink-600 cursor-pointer text-center outline-none transition-all duration-200">
                      <span>Comprar</span>
                      <x-heroicon-o-shopping-cart class="h-4 w-4" />
                    </button>
                    <button
                      class="group bg-white text-pink-600 flex items-center justify-center rounded-sm w-full pt-3 pb-3 gap-2 border-2 border-pink-600 hover:bg-gray-100 hover:border-2 hover:border-pink-700 hover:text-pink-700 cursor-pointer text-center outline-none transition-all duration-200">
                      <span>Carrinho</span>
                      <x-heroicon-o-plus-circle class="h-4 w-4" />
                    </button>
                  </div>
                </div>
              </div>
            @endfor
          </div>
        </section>
      </main>
    </div>

    <x-discounts />
  </main>
@endsection