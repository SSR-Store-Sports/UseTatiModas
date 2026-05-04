@extends('_layouts.app')

@section('title', __('dashboard') . ': UseTatiModas')

@section('content')
    <main class="h-full">
        <div class="relative overflow-hidden rounded-sm border-b-4 border-t-8 border-pink-600">
            <img src="{{ asset('assets/banner.png') }}" class="h-64 md:h-142 w-full object-cover" alt="Logo">

            <div class="absolute inset-0 shadow-[inset_0_0_50px_rgba(219,39,119,0.5)] pointer-events-none"></div>

            <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-2 z-20">
                <span class="h-2.5 w-2.5 rounded-full bg-pink-600 cursor-pointer"></span>
                <span class="h-2.5 w-2.5 rounded-full bg-white/70 border border-pink-600 cursor-pointer"></span>
                <span class="h-2.5 w-2.5 rounded-full bg-white/70 border border-pink-600 cursor-pointer"></span>
            </div>
        </div>

        <section class="flex flex-col px-4 md:px-24 mt-12 gap-8">
            <div class="flex flex-col gap-2 justify-center shadow-[0_8px_4px_-4px_rgba(236,72,153,0.4)]">
                <label class="flex px-4 md:px-16 items-center gap-2">
                    <x-heroicon-o-fire class="h-8 w-8 text-pink-600 drop-shadow-[0_2px_4px_rgba(236,72,153,0.6)]" />
                    <h1 class="text-pink-600 text-2xl md:text-4xl drop-shadow-[0_2px_4px_rgba(236,72,153,0.6)]">
                        @lang('featured_products')</h1>
                </label>
                <span class="w-full h-0.5 bg-pink-600"></span>
            </div>

            <div class="flex flex-col gap-8 items-center">
                <div
                    class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-8 justify-center items-center w-full">
                    @for ($i = 0; $i < 4; $i++)
                        <div
                            class="flex flex-col w-full bg-white shadow-pink-500/90 rounded-lg gap-2 hover:shadow-2xl hover:shadow-pink-500/50 shadow-xl/30 cursor-pointer transition-all duration-300 hover:-translate-y-2 group">
                            <a href="/product" class="flex flex-col justify-center items-center gap-2">
                                <div class="overflow-hidden rounded-lg w-full">
                                    <img src="{{ asset('assets/model_card.png') }}" alt=""
                                        class="h-48 md:h-64 w-full object-cover rounded-lg transition-transform duration-300 group-hover:scale-110">
                                </div>
                                <div class="flex gap-2">
                                    <span class="h-2 w-4 rounded-full bg-pink-500 border-2 border-pink-500"></span>
                                    <span class="h-2 w-4 rounded-full bg-white border-2 border-pink-500"></span>
                                    <span class="h-2 w-4 rounded-full bg-white border-2 border-pink-500"></span>
                                </div>
                            </a>
                            <div class="flex flex-col gap-4 justify-center px-4 py-4">
                                <a href="/product" class="flex flex-col">
                                    <label
                                        class="text-black text-left px-2 text-lg font-bold cursor-pointer">@lang('title_product')</label>
                                    <label
                                        class="text-gray-600 text-left px-2 text-sm cursor-pointer">@lang('description_product')</label>
                                    <label class="text-gray-600 text-left text-sm px-2 line-through cursor-pointer">R$
                                        3.500</label>
                                    <label class="text-black text-left text-2xl px-2 cursor-pointer">R$ 3.000</label>
                                </a>
                                <div class="flex flex-col md:flex-row gap-2">
                                    <button
                                        class="bg-pink-500 text-white flex items-center justify-center rounded-md w-full py-2 gap-2 border-2 border-transparent hover:bg-white hover:border-pink-600 hover:text-pink-600 cursor-pointer outline-none transition-all duration-200">
                                        <x-heroicon-o-shopping-bag class="h-4 w-4" />
                                        <span class="text-sm">@lang('buy')</span>
                                    </button>
                                    <button
                                        class="bg-white text-pink-500 flex items-center justify-center rounded-md w-full py-2 gap-2 border-2 border-pink-500 hover:bg-pink-500 hover:text-white cursor-pointer outline-none transition-all duration-200">
                                        <x-heroicon-o-shopping-cart class="h-4 w-4" />
                                        <span class="text-sm">@lang('cart')</span>
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

        <section class="flex flex-col px-4 md:px-24 mt-12 mb-12 gap-8">
            <div class="flex flex-col gap-2 justify-center shadow-[0_8px_4px_-4px_rgba(236,72,153,0.4)]">
                <label class="flex px-4 md:px-16 items-center gap-2">
                    <x-heroicon-o-building-storefront
                        class="h-8 w-8 text-pink-600 drop-shadow-[0_2px_4px_rgba(236,72,153,0.6)]" />
                    <h1 class="text-pink-600 text-2xl md:text-4xl drop-shadow-[0_2px_4px_rgba(236,72,153,0.6)]">
                        @lang('partners')</h1>
                </label>
                <span class="w-full h-0.5 bg-pink-600"></span>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-4 md:grid-cols-6 lg:grid-cols-8 gap-4 md:gap-8 mx-4 md:mx-16">
                @for($i = 0; $i < 8; $i++)
                    <a href="/parceiros/zara" class="group flex flex-col items-center gap-2 cursor-pointer">
                        <div
                            class="w-16 h-16 sm:w-20 sm:h-20 rounded-full border-2 border-pink-300 bg-pink-50 flex items-center justify-center shadow-md shadow-pink-500/30 transition-all duration-200 group-hover:border-pink-600 group-hover:shadow-pink-500/60 group-hover:scale-105">
                            <x-heroicon-o-academic-cap
                                class="h-8 w-8 sm:h-10 sm:w-10 text-pink-500 group-hover:text-pink-600" />
                        </div>
                        <span
                            class="text-xs text-gray-600 group-hover:text-pink-600 transition-colors duration-200 font-medium">Zara</span>
                    </a>
                @endfor
            </div>
        </section>

        <section class="flex flex-col px-4 md:px-24 mt-12 mb-12 gap-8">
            <div class="flex flex-col gap-2 justify-center shadow-[0_8px_4px_-4px_rgba(236,72,153,0.4)]">
                <label class="flex px-4 md:px-16 items-center gap-2">
                    <x-heroicon-o-heart class="h-8 w-8 text-pink-600 drop-shadow-[0_2px_4px_rgba(236,72,153,0.6)]" />
                    <h1 class="text-pink-600 text-2xl md:text-4xl drop-shadow-[0_2px_4px_rgba(236,72,153,0.6)]">
                        @lang('for_you')</h1>
                </label>
                <span class="w-full h-0.5 bg-pink-600"></span>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-8 mx-4 md:mx-16">
                @for($i = 0; $i < 4; $i++)
                    <div
                        class="relative flex flex-row rounded-xl h-32 sm:h-40 overflow-hidden shadow-lg shadow-pink-500/30 bg-white">
                        <div class="flex flex-col gap-2 sm:gap-3 justify-center px-4 sm:px-6 py-3 sm:py-4 flex-1">
                            <div class="flex flex-col gap-1">
                                <h3
                                    class="text-pink-500 text-base sm:text-xl font-semibold tracking-wide drop-shadow-[0_2px_4px_rgba(236,72,153,0.4)]">
                                    @lang('essential_products')
                                </h3>
                                <div class="flex flex-row gap-2 items-center">
                                    <span class="w-full h-px bg-pink-300"></span>
                                    <span class="w-1.5 h-1.5 rounded-full bg-pink-500 shrink-0"></span>
                                    <span class="w-full h-px bg-pink-300"></span>
                                </div>
                            </div>
                            <a class="group bg-pink-500 text-white flex items-center justify-center rounded-md w-full py-1.5 sm:py-2 gap-1 sm:gap-2 border-2 border-transparent hover:bg-white hover:border-pink-600 hover:text-pink-600 cursor-pointer outline-none transition-all duration-200 text-xs sm:text-sm"
                                href="/search">
                                <span>@lang('check_out')</span>
                                <x-heroicon-o-arrow-right class="h-3 w-3 sm:h-3.5 sm:w-3.5" />
                            </a>
                        </div>
                        <div class="relative w-6 sm:w-8 shrink-0">
                            <svg class="absolute inset-0 h-full w-full" viewBox="0 0 32 160" preserveAspectRatio="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <polygon points="0,0 32,0 32,160 0,160 16,80" fill="rgb(249 168 212)" />
                            </svg>
                        </div>
                        <div class="flex items-center justify-center bg-pink-100 w-24 sm:w-32 shrink-0">
                            <x-heroicon-o-academic-cap class="h-12 w-12 sm:h-16 sm:w-16 text-pink-500" />
                        </div>
                    </div>
                @endfor
            </div>
        </section>

        <section class="flex flex-col px-4 md:px-24 mt-12 mb-12 gap-8">
            <div class="flex flex-col gap-2 justify-center shadow-[0_8px_4px_-4px_rgba(236,72,153,0.4)]">
                <label class="flex px-4 md:px-16 items-center gap-2">
                    <x-heroicon-o-squares-2x2 class="h-8 w-8 text-pink-600 drop-shadow-[0_2px_4px_rgba(236,72,153,0.6)]" />
                    <h1 class="text-pink-600 text-2xl md:text-4xl drop-shadow-[0_2px_4px_rgba(236,72,153,0.6)]">
                        @lang('general_products')</h1>
                </label>
                <span class="w-full h-0.5 bg-pink-600"></span>
            </div>

            <div class="flex flex-col gap-8 items-center">
                <div
                    class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-8 justify-center items-center w-full">
                    @for ($i = 0; $i < 15; $i++)
                        <div
                            class="flex flex-col w-full bg-white shadow-pink-500/90 rounded-lg gap-2 hover:shadow-2xl hover:shadow-pink-500/50 shadow-xl/30 cursor-pointer transition-all duration-300 hover:-translate-y-2 group">
                            <a href="/product" class="flex flex-col justify-center items-center gap-2">
                                <div class="overflow-hidden rounded-lg w-full">
                                    <img src="{{ asset('assets/model_card.png') }}" alt=""
                                        class="h-48 md:h-64 w-full object-cover rounded-lg transition-transform duration-300 group-hover:scale-110">
                                </div>
                                <div class="flex gap-2">
                                    <span class="h-2 w-4 rounded-full bg-pink-500 border-2 border-pink-500"></span>
                                    <span class="h-2 w-4 rounded-full bg-white border-2 border-pink-500"></span>
                                    <span class="h-2 w-4 rounded-full bg-white border-2 border-pink-500"></span>
                                </div>
                            </a>
                            <div class="flex flex-col gap-4 justify-center px-4 py-4">
                                <a href="/product" class="flex flex-col">
                                    <label
                                        class="text-black text-left px-2 text-lg font-bold line-clamp-1 cursor-pointer">@lang('title_product')</label>
                                    <label
                                        class="text-gray-600 text-left px-2 text-sm line-clamp-2 cursor-pointer">@lang('description_product')</label>
                                    <label class="text-gray-600 text-left text-sm px-2 line-through truncate cursor-pointer">R$
                                        3.500</label>
                                    <label class="text-black text-left text-2xl px-2 cursor-pointer">R$ 3.000</label>
                                </a>
                                <div class="flex flex-col md:flex-row gap-2">
                                    <button
                                        class="bg-pink-500 text-white flex items-center justify-center rounded-md w-full py-2 gap-2 border-2 border-transparent hover:bg-white hover:border-pink-600 hover:text-pink-600 cursor-pointer outline-none transition-all duration-200">
                                        <x-heroicon-o-shopping-bag class="h-4 w-4" />
                                        <span class="text-sm">@lang('buy')</span>
                                    </button>
                                    <button
                                        class="bg-white text-pink-500 flex items-center justify-center rounded-md w-full py-2 gap-2 border-2 border-pink-500 hover:bg-pink-500 hover:text-white cursor-pointer outline-none transition-all duration-200">
                                        <x-heroicon-o-shopping-cart class="h-4 w-4" />
                                        <span class="text-sm">@lang('cart')</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </section>

        <section class="flex flex-col px-4 md:px-24 mt-12 mb-12 gap-8">
            <div class="flex flex-col gap-2 justify-center shadow-[0_8px_4px_-4px_rgba(236,72,153,0.4)]">
                <label class="flex px-4 md:px-16 items-center gap-2">
                    <x-heroicon-o-sparkles class="h-8 w-8 text-pink-600 drop-shadow-[0_2px_4px_rgba(236,72,153,0.6)]" />
                    <h1 class="text-pink-600 text-2xl md:text-4xl drop-shadow-[0_2px_4px_rgba(236,72,153,0.6)]">
                        @lang('new_arrivals')</h1>
                </label>
                <span class="w-full h-0.5 bg-pink-600"></span>
            </div>

            <div class="flex flex-col gap-8 items-center">
                <div
                    class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-8 justify-center items-center w-full">
                    @for ($i = 0; $i < 4; $i++)
                        <div
                            class="flex flex-col w-full bg-white shadow-pink-500/90 rounded-lg gap-2 hover:shadow-2xl hover:shadow-pink-500/50 shadow-xl/30 cursor-pointer transition-all duration-300 hover:-translate-y-2 group">
                            <a href="/product" class="flex flex-col justify-center items-center gap-2">
                                <div class="overflow-hidden rounded-lg w-full">
                                    <img src="{{ asset('assets/model_card.png') }}" alt=""
                                        class="h-48 md:h-64 w-full object-cover rounded-lg transition-transform duration-300 group-hover:scale-110">
                                </div>
                                <div class="flex gap-2">
                                    <span class="h-2 w-4 rounded-full bg-pink-500 border-2 border-pink-500"></span>
                                    <span class="h-2 w-4 rounded-full bg-white border-2 border-pink-500"></span>
                                    <span class="h-2 w-4 rounded-full bg-white border-2 border-pink-500"></span>
                                </div>
                            </a>
                            <div class="flex flex-col gap-4 justify-center px-4 py-4">
                                <a href="/product" class="flex flex-col">
                                    <label
                                        class="text-black text-left px-2 text-lg font-bold line-clamp-1 cursor-pointer">@lang('title_product')</label>
                                    <label
                                        class="text-gray-600 text-left px-2 text-sm line-clamp-2 cursor-pointer">@lang('description_product')</label>
                                    <label class="text-gray-600 text-left text-sm px-2 line-through truncate cursor-pointer">R$
                                        3.500</label>
                                    <label class="text-black text-left text-2xl px-2 cursor-pointer">R$ 3.000</label>
                                </a>
                                <div class="flex flex-col md:flex-row gap-2">
                                    <button
                                        class="bg-pink-500 text-white flex items-center justify-center rounded-md w-full py-2 gap-2 border-2 border-transparent hover:bg-white hover:border-pink-600 hover:text-pink-600 cursor-pointer outline-none transition-all duration-200">
                                        <x-heroicon-o-shopping-bag class="h-4 w-4" />
                                        <span class="text-sm">@lang('buy')</span>
                                    </button>
                                    <button
                                        class="bg-white text-pink-500 flex items-center justify-center rounded-md w-full py-2 gap-2 border-2 border-pink-500 hover:bg-pink-500 hover:text-white cursor-pointer outline-none transition-all duration-200">
                                        <x-heroicon-o-shopping-cart class="h-4 w-4" />
                                        <span class="text-sm">@lang('cart')</span>
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

        <section class="flex flex-col px-4 md:px-24 mt-12 mb-12 gap-8">
            <div class="flex flex-col gap-2 justify-center shadow-[0_8px_4px_-4px_rgba(236,72,153,0.4)]">
                <label class="flex px-4 md:px-16 items-center gap-2">
                    <x-heroicon-o-chat-bubble-left-right
                        class="h-8 w-8 text-pink-600 drop-shadow-[0_2px_4px_rgba(236,72,153,0.6)]" />
                    <h1 class="text-pink-600 text-2xl md:text-4xl drop-shadow-[0_2px_4px_rgba(236,72,153,0.6)]">
                        @lang('what_they_say')
                    </h1>
                </label>
                <span class="w-full h-0.5 bg-pink-600"></span>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-8 mx-4 md:mx-16">
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
                            @lang('love_products')
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
                                <span class="text-xs text-gray-400">@lang('verified_customer')</span>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </section>

        <x-discounts />
    </main>
@endsection