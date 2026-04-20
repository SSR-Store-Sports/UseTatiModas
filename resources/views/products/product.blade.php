@extends('_layouts.app')

@section('title', 'Produto: UseTatiModas')

@section('content')
    <main class="mx-24 my-12">
        <section class="bg-white rounded-xl shadow-lg shadow-pink-500/20 p-10 flex gap-12">
            <div class="flex flex-col gap-4">
                <div class="w-80 h-96 bg-pink-50  border-pink-300 rounded-lg flex items-center justify-center shadow-md">
                    <img src="{{ asset('assets/model_card.png') }}" alt=""
                        class="h-full w-full rounded-lg transition-transform duration-300 hover:border-2 hover:border-pink-600 hover:scale-105 focus:border-pink-500 cursor-pointer">
                </div>

                <div class="flex gap-3 justify-center">
                    <div class="w-16 h-16 bg-pink-100 border border-pink-300 rounded-md">
                        <img src="{{ asset('assets/model_card.png') }}" alt=""
                            class="h-full w-full rounded-lg transition-transform duration-300 hover:border-2 hover:border-pink-600 hover:scale-110 focus:border-pink-500 cursor-pointer">
                    </div>
                    <div class="w-16 h-16 bg-pink-100 border border-pink-300 rounded-md">
                        <img src="{{ asset('assets/model_card.png') }}" alt=""
                            class="h-full w-full rounded-lg transition-transform duration-300 hover:border-2 hover:border-pink-600 hover:scale-110 focus:border-pink-500 cursor-pointer">
                    </div>
                    <div class="w-16 h-16 bg-pink-100 border border-pink-300 rounded-md">
                        <img src="{{ asset('assets/model_card.png') }}" alt=""
                            class="h-full w-full rounded-lg transition-transform duration-300 hover:border-2 hover:border-pink-600 hover:scale-110 focus:border-pink-500 cursor-pointer">
                    </div>
                </div>
            </div>

            <div class="flex flex-col gap-6 flex-1 mx-4">
                <div class="flex flex-col gap-2">
                    <h1 class="text-3xl font-bold text-pink-600">
                        Camisa Feminina Preta
                    </h1>

                    <div class="flex gap-6 text-sm">
                        <span class="text-blue-600 border border-blue-600 px-2 py-0.5 rounded">
                            SKU: 0000123
                        </span>
                        <span class="text-gray-500">
                            PUBLICAÇÃO: 11/03/2026
                        </span>
                    </div>
                </div>

                <p class="text-gray-600 leading-relaxed max-w-xl">
                    A Camiseta Básica Preta Feminina é a definição de "menos é mais".
                    Confeccionada em malha 100% algodão de alta qualidade, ela oferece toque macio e excelente
                    respirabilidade,
                    garantindo conforto o dia todo. Com modelagem clássica que valoriza a silhueta sem apertar,
                    esta peça possui gola em ribana resistente e costura reforçada, perfeita para transitar entre o trabalho
                    e o lazer.
                    O básico indispensável que eleva qualquer look: combina com jeans para um visual casual ou com
                    alfaiataria para um toque de sofisticação.
                </p>

                <div class="flex gap-4 mt-4">
                    <a href="/product"
                        class="group bg-pink-500 text-white flex items-center justify-center rounded-sm w-full pt-3 pb-3 gap-2 border-2 border-transparent hover:bg-white hover:border-2 hover:border-pink-600 hover:text-pink-600 cursor-pointer text-center outline-none transition-all duration-200">
                        <span>Comprar</span>
                        <x-heroicon-o-plus-circle class="h-4 w-4" />
                    </a>
                    <button
                        class="group bg-white text-pink-600 flex items-center justify-center rounded-sm w-full pt-3 pb-3 gap-2 border-2 border-pink-600 hover:bg-gray-100 hover:border-2 hover:border-pink-700 hover:text-pink-700 cursor-pointer text-center outline-none transition-all duration-200">
                        <span>Adicionar ao Carrinho</span>
                        <x-heroicon-o-shopping-cart class="h-4 w-4" />
                    </button>
                </div>
            </div>
        </section>

        <section class="mt-16 flex flex-col gap-8 mx-16">
            <div class="flex flex-col gap-2 justify-center shadow-[0_8px_4px_-4px_rgba(236,72,153,0.4)]">
                <h2 class="text-center text-4xl text-pink-600 font-bold">
                    PRODUTOS RELACIONADOS
                </h2>
                <span class="w-full h-0.5 bg-pink-600"></span>
            </div>

            <div class="grid grid-cols-4 gap-8">

                @for ($i = 0; $i < 4; $i++)
                    <div
                        class="flex flex-col bg-white rounded-lg shadow-md shadow-pink-500/30 p-4 items-center gap-3 hover:shadow-lg transition-all duration-200">

                        <div class="w-32 h-40 bg-pink-100 border border-pink-300 rounded-md flex items-center justify-center">
                            <span class="text-gray-400 text-sm">Produto</span>
                        </div>

                        <div class="flex flex-col">
                            <label class="text-black text-left px-2 text-lg font-bold">NC roupa feminina...</label>
                            <label class="text-gray-600 text-left px-2 text-sm">Peça de roupa exclusiva com...</label>
                            <label class="text-gray-600 text-left text-sm px-2 line-through">R$ 3.500</label>
                            <label class="text-black text-left text-2xl px-2">R$ 3.000</label>
                        </div>

                        <button
                            class="group bg-white text-pink-600 flex items-center justify-center rounded-sm w-full pt-3 pb-3 gap-2 border-2 border-pink-600 hover:bg-gray-100 hover:border-2 hover:border-pink-700 hover:text-pink-700 cursor-pointer text-center outline-none transition-all duration-200">
                            <span>Comprar</span>
                            <x-heroicon-o-plus-circle class="h-4 w-4" />
                        </button>

                    </div>
                @endfor

            </div>

        </section>

    </main>
@endsection