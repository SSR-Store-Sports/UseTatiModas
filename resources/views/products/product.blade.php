@extends('_layouts.app')

@section('title', 'Produto: UseTatiModas')

@section('content')
<main class="mx-24 my-12">
    <section class="bg-white rounded-xl shadow-lg shadow-pink-500/20 p-10 flex gap-12">
        <div class="flex flex-col gap-4 w-80">
            <div class="w-80 h-96 bg-pink-50 border-pink-300 rounded-lg flex items-center justify-center shadow-md">
                <img src="{{ asset('assets/model_card.png') }}" alt=""
                    class="h-full w-full rounded-lg transition-transform duration-300 hover:scale-105 cursor-pointer">
            </div>

            <div class="flex gap-3 justify-center">
                @foreach (range(1, 3) as $thumb)
                <div class="w-16 h-16 bg-pink-100 border border-pink-300 rounded-md overflow-hidden">
                    <img src="{{ asset('assets/model_card.png') }}" alt=""
                        class="h-full w-full object-cover hover:scale-110 transition-transform duration-300 cursor-pointer">
                </div>
                @endforeach
            </div>

            <div class="flex flex-col gap-2 border-t border-pink-100 pt-3">
                <label class="text-sm font-medium text-gray-700">Cor</label>
                <div class="flex gap-2">
                    <button class="w-7 h-7 rounded-full bg-black border-2 border-transparent hover:border-pink-500 transition-all" title="Preto"></button>
                    <button class="w-7 h-7 rounded-full bg-white border-2 border-gray-300 hover:border-pink-500 transition-all" title="Branco"></button>
                    <button class="w-7 h-7 rounded-full bg-pink-400 border-2 border-transparent hover:border-pink-600 transition-all" title="Rosa"></button>
                </div>
            </div>

            <div class="flex flex-col gap-2">
                <label class="text-sm font-medium text-gray-700">Tamanho</label>
                <div class="flex gap-2">
                    @foreach (['P', 'M', 'G', 'GG'] as $size)
                    <button class="w-10 h-10 rounded-md border-2 border-pink-300 text-sm font-medium text-gray-700 hover:border-pink-600 hover:text-pink-600 transition-all duration-200">
                        {{ $size }}
                    </button>
                    @endforeach
                </div>
            </div>

        </div>

        <div class="flex flex-col gap-6 flex-1 mx-4">
            <div class="flex flex-col gap-2">
                <h1 class="text-3xl font-bold text-black">
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

            <p class="text-gray-600 leading-relaxed">
                A Camiseta Básica Preta Feminina é a definição de "menos é mais".
                Confeccionada em malha 100% algodão de alta qualidade, ela oferece toque macio e excelente
                respirabilidade, garantindo conforto o dia todo. Com modelagem clássica que valoriza a silhueta sem apertar,
                esta peça possui gola em ribana resistente e costura reforçada, perfeita para transitar entre o trabalho e o lazer.
                O básico indispensável que eleva qualquer look.
            </p>

            <div class="flex flex-col gap-2 border-t border-pink-100 pt-4">
                <div class="flex items-center gap-1">
                    @for ($star = 1; $star
                    <= 5; $star++)
                        <x-heroicon-s-star class="w-5 h-5 {{ $star <= 4 ? 'text-yellow-400' : 'text-gray-300' }}" />
                    @endfor
                    <span class="text-sm text-gray-500 ml-1">(4.0) · 128 avaliações</span>
                </div>

                <div class="flex flex-col gap-1">
                    <span class="text-sm text-gray-400 line-through">R$ 120,00</span>
                    <span class="text-3xl font-bold text-pink-600">R$ 62,00</span>
                    <span class="text-xs text-gray-500">ou 4x de R$ 15,50 sem juros</span>
                    <div class="flex items-center border border-pink-200 rounded-md overflow-hidden w-fit mt-1">
                        <button class="px-2 py-1 text-pink-600 hover:bg-pink-50 transition-all">−</button>

                        <input
                            id="qty"
                            type="number"
                            min="1"
                            max="10"
                            value="1"
                            class="w-8 text-center text-sm outline-none border-x border-pink-200 py-1 [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none">

                        <button class="px-2 py-1 text-pink-600 hover:bg-pink-50 transition-all">+</button>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-3 text-sm text-gray-600 border border-pink-100 rounded-lg p-4 bg-pink-50/40">
                    <div class="flex flex-col gap-1">
                        <span class="text-xs text-gray-400 uppercase">Categoria</span>
                        <span class="font-medium">Moda Feminina</span>
                    </div>
                    <div class="flex flex-col gap-1">
                        <span class="text-xs text-gray-400 uppercase">Material</span>
                        <span class="font-medium">100% Algodão</span>
                    </div>
                    <div class="flex flex-col gap-1">
                        <span class="text-xs text-gray-400 uppercase">Frete</span>
                        <span class="font-medium text-green-600">Grátis</span>
                    </div>
                    <div class="flex flex-col gap-1">
                        <span class="text-xs text-gray-400 uppercase">Estoque</span>
                        <span class="font-medium">12 unidades</span>
                    </div>
                </div>

                <div class="flex gap-4">
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