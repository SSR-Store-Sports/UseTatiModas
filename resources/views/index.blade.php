@extends('_layouts.app')

@section('title', 'Home: UseTatiModas')

@section('content')
    <main class="h-full">
        <div class="relative overflow-hidden rounded-sm border-b-4 border-t-8 border-pink-600">
            <img src="{{ asset('assets/banner.png') }}" class="h-142 w-full object-cover" alt="Logo">

            <div class="absolute inset-0 shadow-[inset_0_0_50px_rgba(219,39,119,0.5)] pointer-events-none"></div>

            <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-2 z-20">
                <span class="h-2.5 w-2.5 rounded-full bg-pink-600 cursor-pointer"></span>
                <span class="h-2.5 w-2.5 rounded-full bg-white/70 border border-pink-600 cursor-pointer"></span>
                <span class="h-2.5 w-2.5 rounded-full bg-white/70 border border-pink-600 cursor-pointer"></span>
            </div>
        </div>

        <section class="flex flex-col px-24 mt-12 gap-8">
            <div class="flex flex-col gap-2 justify-center shadow-[0_8px_4px_-4px_rgba(236,72,153,0.4)]">
                <label class="flex px-16 items-center gap-2">
                    <x-heroicon-o-fire class="h-8 w-8 text-pink-600 drop-shadow-[0_2px_4px_rgba(236,72,153,0.6)]" />
                    <h1 class="text-pink-600 text-4xl drop-shadow-[0_2px_4px_rgba(236,72,153,0.6)]">PRODUTOS EM DESTAQUE
                    </h1>
                </label>
                <span class="w-full h-0.5 bg-pink-600"></span>
            </div>

            <div class="flex flex-col gap-8 items-center">
                <div class="grid grid-cols-4 gap-8 justify-center items-center">
                    @for ($i = 0; $i < 4; $i++)
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
                                    <label class="text-black text-left px-2 text-lg font-bold">NC roupa feminina...</label>
                                    <label class="text-gray-600 text-left px-2 text-sm">Peça de roupa exclusiva com...</label>
                                    <label class="text-gray-600 text-left text-sm px-2 line-through">R$ 3.500</label>
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
                </div>
                <div class="flex gap-2 mt-4">
                    <span class="h-4 w-4 rounded-full bg-pink-500 border-2 border-pink-500"></span>
                    <span class="h-4 w-4 rounded-full bg-white border-2 border-pink-500"></span>
                    <span class="h-4 w-4 rounded-full bg-white border-2 border-pink-500"></span>
                </div>
            </div>
        </section>

        <section class="flex flex-col px-24 mt-12 mb-12 gap-8">
            <div class="flex flex-col gap-2 justify-center shadow-[0_8px_4px_-4px_rgba(236,72,153,0.4)]">
                <label class="flex px-16 items-center gap-2">
                    <x-heroicon-o-building-storefront
                        class="h-8 w-8 text-pink-600 drop-shadow-[0_2px_4px_rgba(236,72,153,0.6)]" />
                    <h1 class="text-pink-600 text-4xl drop-shadow-[0_2px_4px_rgba(236,72,153,0.6)]">PARCEIROS</h1>
                </label>
                <span class="w-full h-0.5 bg-pink-600"></span>
            </div>

            <div class="grid grid-cols-8 gap-8 mx-16">
                @for($i = 0; $i < 8; $i++)
                    <a href="/parceiros/zara" class="group flex flex-col items-center gap-2 cursor-pointer">
                        <div
                            class="w-20 h-20 rounded-full border-2 border-pink-300 bg-pink-50 flex items-center justify-center shadow-md shadow-pink-500/30 transition-all duration-200 group-hover:border-pink-600 group-hover:shadow-pink-500/60 group-hover:scale-105">
                            <x-heroicon-o-academic-cap class="h-10 w-10 text-pink-500 group-hover:text-pink-600" />
                        </div>
                        <span
                            class="text-xs text-gray-600 group-hover:text-pink-600 transition-colors duration-200 font-medium">Zara</span>
                    </a>
                @endfor
            </div>
        </section>

        <section class="flex flex-col px-24 mt-12 mb-12 gap-8">
            <div class="flex flex-col gap-2 justify-center shadow-[0_8px_4px_-4px_rgba(236,72,153,0.4)]">
                <label class="flex px-16 items-center gap-2">
                    <x-heroicon-o-heart class="h-8 w-8 text-pink-600 drop-shadow-[0_2px_4px_rgba(236,72,153,0.6)]" />
                    <h1 class="text-pink-600 text-4xl drop-shadow-[0_2px_4px_rgba(236,72,153,0.6)]">PARA VOCÊ</h1>
                </label>
                <span class="w-full h-0.5 bg-pink-600"></span>
            </div>

            <div class="grid grid-cols-2 gap-8 mx-16">
                @for($i = 0; $i < 4; $i++)
                    <div class="relative flex flex-row rounded-xl h-40 overflow-hidden shadow-lg shadow-pink-500/30 bg-white">
                        <div class="flex flex-col gap-3 justify-center px-6 py-4 flex-1">
                            <div class="flex flex-col gap-1">
                                <h3
                                    class="text-pink-500 text-xl font-semibold tracking-wide drop-shadow-[0_2px_4px_rgba(236,72,153,0.4)]">
                                    PRODUTOS ESSENCIAIS
                                </h3>
                                <div class="flex flex-row gap-2 items-center">
                                    <span class="w-full h-px bg-pink-300"></span>
                                    <span class="w-1.5 h-1.5 rounded-full bg-pink-500 shrink-0"></span>
                                    <span class="w-full h-px bg-pink-300"></span>
                                </div>
                            </div>
                            <a class="group bg-pink-500 text-white flex items-center justify-center rounded-md w-full py-2 gap-2 border-2 border-transparent hover:bg-white hover:border-pink-600 hover:text-pink-600 cursor-pointer outline-none transition-all duration-200 text-sm"
                                href="/search">
                                <span>Conferir</span>
                                <x-heroicon-o-arrow-right class="h-3.5 w-3.5" />
                            </a>
                        </div>
                        <div class="relative w-8 shrink-0">
                            <svg class="absolute inset-0 h-full w-full" viewBox="0 0 32 160" preserveAspectRatio="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <polygon points="0,0 32,0 32,160 0,160 16,80" fill="rgb(249 168 212)" />
                            </svg>
                        </div>
                        <div class="flex items-center justify-center bg-pink-100 w-32 shrink-0">
                            <x-heroicon-o-academic-cap class="h-16 w-16 text-pink-500" />
                        </div>
                    </div>
                @endfor
            </div>
        </section>

        <section class="flex flex-col px-24 mt-12 mb-12 gap-8">
            <div class="flex flex-col gap-2 justify-center shadow-[0_8px_4px_-4px_rgba(236,72,153,0.4)]">
                <label class="flex px-16 items-center gap-2">
                    <x-heroicon-o-squares-2x2 class="h-8 w-8 text-pink-600 drop-shadow-[0_2px_4px_rgba(236,72,153,0.6)]" />
                    <h1 class="text-pink-600 text-4xl drop-shadow-[0_2px_4px_rgba(236,72,153,0.6)]">PRODUTOS EM GERAL</h1>
                </label>
                <span class="w-full h-0.5 bg-pink-600"></span>
            </div>

            <div class="flex flex-col gap-8 items-center mx-18">
                <div class="grid grid-cols-4 gap-8 justify-center items-center">
                    @for ($i = 0; $i < 15; $i++)
                        <div
                            class="flex flex-col w-full bg-white shadow-pink-500/90 rounded-lg gap-2 hover:shadow-xl/50 shadow-xl/30 hover:cursor-pointer inset-shadow-xs transition-all duration-200">
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
                                    <label class="text-black text-left px-2 text-lg font-bold line-clamp-1">NC roupa feminina
                                        top de linha ultra fina</label>
                                    <label class="text-gray-600 text-left px-2 text-sm line-clamp-2">Peça de roupa exclusiva com
                                        duplo preenchimento e reforço em</label>
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
                </div>

                <div class="flex gap-2 mt-4">
                    <button
                        class="group text-white bg-pink-600 flex items-center justify-center rounded-sm h-12 px-4 pt-3 pb-3 gap-2 border-2 border-pink-600 hover:bg-gray-100 hover:border-2 hover:border-pink-700 hover:text-pink-700 cursor-pointer text-center outline-none transition-all duration-200"
                        disabled>
                        <span>Anterior</span>
                    </button>
                    <button
                        class="group bg-pink-300 text-white flex items-center justify-center rounded-sm h-12 px-4 pt-3 pb-3 gap-2 border-2 border-pink-300 hover:bg-gray-100 hover:border-2 hover:border-pink-700 hover:text-pink-700 cursor-pointer text-center outline-none transition-all duration-200">
                        <span>1</span>
                    </button>
                    <button
                        class="group bg-white text-pink-600 flex items-center justify-center rounded-sm h-12 px-4 pt-3 pb-3 gap-2 border-2 border-pink-600 hover:bg-gray-100 hover:border-2 hover:border-pink-700 hover:text-pink-700 cursor-pointer text-center outline-none transition-all duration-200">
                        <span>2</span>
                    </button>
                    <button
                        class="group bg-white text-pink-600 flex items-center justify-center rounded-sm h-12 px-4 pt-3 pb-3 gap-2 border-2 border-pink-600 hover:bg-gray-100 hover:border-2 hover:border-pink-700 hover:text-pink-700 cursor-pointer text-center outline-none transition-all duration-200">
                        <span>3</span>
                    </button>
                    <button
                        class="group bg-white text-pink-600 flex items-center justify-center rounded-sm h-12 px-4 pt-3 pb-3 gap-2 border-2 border-pink-600 hover:bg-gray-100 hover:border-2 hover:border-pink-700 hover:text-pink-700 cursor-pointer text-center outline-none transition-all duration-200">
                        <span>...</span>
                    </button>
                    <button
                        class="group bg-white text-pink-600 flex items-center justify-center rounded-sm h-12 px-4 pt-3 pb-3 gap-2 border-2 border-pink-600 hover:bg-gray-100 hover:border-2 hover:border-pink-700 hover:text-pink-700 cursor-pointer text-center outline-none transition-all duration-200">
                        <span>7</span>
                    </button>
                    <button
                        class="group text-white bg-pink-600 flex items-center justify-center rounded-sm h-12 px-4 pt-3 pb-3 gap-2 border-2 border-pink-600 hover:bg-gray-100 hover:border-2 hover:border-pink-700 hover:text-pink-700 cursor-pointer text-center outline-none transition-all duration-200">
                        <span>Próximo</span>
                    </button>
                </div>
            </div>
        </section>

        <section class="flex flex-col px-24 mt-12 mb-12 gap-8">
            <div class="flex flex-col gap-2 justify-center shadow-[0_8px_4px_-4px_rgba(236,72,153,0.4)]">
                <label class="flex px-16 items-center gap-2">
                    <x-heroicon-o-sparkles class="h-8 w-8 text-pink-600 drop-shadow-[0_2px_4px_rgba(236,72,153,0.6)]" />
                    <h1 class="text-pink-600 text-4xl drop-shadow-[0_2px_4px_rgba(236,72,153,0.6)]">ACABARAM DE CHEGAR</h1>
                </label>
                <span class="w-full h-0.5 bg-pink-600"></span>
            </div>

            <div class="flex flex-col gap-8 items-center">
                <div class="grid grid-cols-4 gap-8 mx-18 justify-center items-center">
                    @for ($i = 0; $i < 4; $i++)
                        <div
                            class="flex flex-col w-full bg-white shadow-pink-500/90 rounded-lg gap-2 hover:shadow-xl/50 shadow-xl/30 hover:cursor-pointer inset-shadow-xs transition-all duration-200">
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
                                    <label class="text-black text-left px-2 text-lg font-bold line-clamp-1">NC roupa feminina
                                        top de linha ultra fina</label>
                                    <label class="text-gray-600 text-left px-2 text-sm line-clamp-2">Peça de roupa exclusiva com
                                        duplo preenchimento e reforço em</label>
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
                </div>
                <div class="flex gap-2 mt-4">
                    <span class="h-4 w-4 rounded-full bg-pink-500 border-2 border-pink-500"></span>
                    <span class="h-4 w-4 rounded-full bg-white border-2 border-pink-500"></span>
                    <span class="h-4 w-4 rounded-full bg-white border-2 border-pink-500"></span>
                </div>
            </div>
        </section>

        <section class="flex flex-col px-24 mt-12 mb-12 gap-8">
            <div class="flex flex-col gap-2 justify-center shadow-[0_8px_4px_-4px_rgba(236,72,153,0.4)]">
                <label class="flex px-16 items-center gap-2">
                    <x-heroicon-o-chat-bubble-left-right
                        class="h-8 w-8 text-pink-600 drop-shadow-[0_2px_4px_rgba(236,72,153,0.6)]" />
                    <h1 class="text-pink-600 text-4xl drop-shadow-[0_2px_4px_rgba(236,72,153,0.6)]">O QUE FALAM DA GENTE
                    </h1>
                </label>
                <span class="w-full h-0.5 bg-pink-600"></span>
            </div>

            <div class="grid grid-cols-2 gap-8 mx-16">
                @for($i = 0; $i < 4; $i++)
                    <div
                        class="relative flex flex-col rounded-xl overflow-hidden shadow-lg shadow-pink-500/30 bg-white p-6 gap-4">
                        <span class="absolute top-3 right-4 text-6xl text-pink-100 font-serif leading-none select-none">"</span>
                        <div class="flex gap-1">
                            @for ($s = 0; $s < 5; $s++)
                                <x-heroicon-s-star class="h-4 w-4 text-pink-500" />
                            @endfor
                        </div>
                        <p class="text-gray-600 text-sm leading-relaxed line-clamp-3">
                            Amei os produtos! A qualidade é incrível e o atendimento foi super rápido. Com certeza vou comprar
                            novamente.
                        </p>
                        <div class="flex flex-row gap-2 items-center">
                            <span class="w-full h-px bg-pink-200"></span>
                            <span class="w-1.5 h-1.5 rounded-full bg-pink-500 shrink-0"></span>
                            <span class="w-full h-px bg-pink-200"></span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div
                                class="w-10 h-10 rounded-full bg-pink-100 border-2 border-pink-300 flex items-center justify-center shrink-0">
                                <x-heroicon-o-user class="h-5 w-5 text-pink-500" />
                            </div>
                            <div class="flex flex-col">
                                <span class="text-sm font-semibold text-gray-800">Maria Silva</span>
                                <span class="text-xs text-gray-400">Cliente verificada</span>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </section>

        <x-discounts />
    </main>
@endsection