@extends('_layouts.app')

@section('title', 'Produto: UseTatiModas')

@section('content')
<main class="px-24 py-12">

    {{-- CONTAINER PRINCIPAL --}}
    <section class="bg-white rounded-xl shadow-lg shadow-pink-500/20 p-10 flex gap-12">

        {{-- IMAGEM --}}
        <div class="flex flex-col gap-4">
            <div class="w-80 h-96 bg-pink-50 border-2 border-pink-300 rounded-lg flex items-center justify-center shadow-md">
                <span class="text-gray-400">Produto</span>
            </div>

            <div class="flex gap-3 justify-center">
                <div class="w-16 h-16 bg-pink-100 border border-pink-300 rounded-md"></div>
                <div class="w-16 h-16 bg-pink-100 border border-pink-300 rounded-md"></div>
                <div class="w-16 h-16 bg-pink-100 border border-pink-300 rounded-md"></div>
            </div>
        </div>

        {{-- INFORMAÇÕES --}}
        <div class="flex flex-col gap-6 flex-1">

            <div class="flex flex-col gap-2">
                <h1 class="text-3xl font-bold text-pink-600">
                    Camisa Masculina Preta
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
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
            </p>

            {{-- BOTÕES --}}
            <div class="flex gap-4 mt-4">

                <button class="group bg-pink-500 text-white px-6 py-3 rounded-md flex items-center gap-2 border-2 border-transparent hover:bg-white hover:text-pink-600 hover:border-pink-600 transition-all duration-200">
                    <span>Adicionar ao Carrinho</span>
                    <x-heroicon-o-plus-circle class="h-5 w-5"/>
                </button>

                <button class="group bg-white text-pink-600 px-6 py-3 rounded-md flex items-center gap-2 border-2 border-pink-600 hover:bg-pink-50 hover:text-pink-700 hover:border-pink-700 transition-all duration-200">
                    <span>Comprar</span>
                    <x-heroicon-o-shopping-cart class="h-5 w-5"/>
                </button>

            </div>

        </div>
    </section>

    {{-- RELACIONADOS --}}
    <section class="mt-16 flex flex-col gap-8">

        <div class="flex flex-col gap-2 justify-center shadow-[0_8px_4px_-4px_rgba(236,72,153,0.4)]">
            <h2 class="text-center text-2xl text-pink-600 font-bold">
                RELACIONADOS
            </h2>
            <span class="w-full h-0.5 bg-pink-600"></span>
        </div>

        <div class="grid grid-cols-4 gap-8">

            @for ($i = 0; $i < 4; $i++)
                <div class="flex flex-col bg-white rounded-lg shadow-md shadow-pink-500/30 p-4 items-center gap-3 hover:shadow-lg transition-all duration-200">

                    <div class="w-32 h-40 bg-pink-100 border border-pink-300 rounded-md flex items-center justify-center">
                        <span class="text-gray-400 text-sm">Produto</span>
                    </div>

                    <button class="w-full bg-pink-500 text-white py-2 rounded-md border-2 border-transparent hover:bg-white hover:text-pink-600 hover:border-pink-600 transition-all duration-200 text-sm">
                        Comprar
                    </button>

                </div>
            @endfor

        </div>

    </section>

</main>
@endsection