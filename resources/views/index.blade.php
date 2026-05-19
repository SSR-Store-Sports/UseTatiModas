@extends('_layouts.app')

@section('title', __('dashboard') . ': UseTatiModas')

@section('content')
    <main class="h-full">
        @php
            $heroSlides = [
                ['image' => 'assets/banner_novo_doud.png', 'alt' => 'Novidades da moda'],
                ['image' => 'assets/banner dourado.png', 'alt' => 'Banner dourado'],
                ['image' => 'assets/beleza_gold.png', 'alt' => 'Beleza gold'],
            ];
        @endphp

        <div class="relative overflow-hidden rounded-sm" data-hero-carousel>
            <div class="relative h-64 md:h-142 w-full">
                @foreach ($heroSlides as $index => $slide)
                    <img src="{{ asset($slide['image']) }}"
                        class="absolute inset-0 h-full w-full object-cover transition-opacity duration-700 ease-in-out {{ $index === 0 ? 'opacity-100' : 'opacity-0' }}"
                        alt="{{ $slide['alt'] }}" data-hero-slide aria-hidden="{{ $index === 0 ? 'false' : 'true' }}">
                @endforeach
            </div>
            <div class="absolute inset-0 shadow-[inset_0_0_50px_rgba(199,155,43,0.3)] pointer-events-none"></div>

            <button type="button"
                class="absolute left-3 md:left-6 top-1/2 -translate-y-1/2 z-20 flex h-9 w-9 md:h-11 md:w-11 items-center justify-center rounded-full bg-white/75 text-[#C79B2B] shadow-md transition hover:bg-white focus:outline-none focus:ring-2 focus:ring-[#C79B2B]"
                data-hero-prev aria-label="Banner anterior">
                <x-heroicon-o-chevron-left class="h-5 w-5 md:h-6 md:w-6" />
            </button>

            <button type="button"
                class="absolute right-3 md:right-6 top-1/2 -translate-y-1/2 z-20 flex h-9 w-9 md:h-11 md:w-11 items-center justify-center rounded-full bg-white/75 text-[#C79B2B] shadow-md transition hover:bg-white focus:outline-none focus:ring-2 focus:ring-[#C79B2B]"
                data-hero-next aria-label="Proximo banner">
                <x-heroicon-o-chevron-right class="h-5 w-5 md:h-6 md:w-6" />
            </button>

            <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-2 z-20">
                @foreach ($heroSlides as $index => $slide)
                    <button type="button"
                        class="h-2.5 w-2.5 rounded-full border border-[#C79B2B] transition {{ $index === 0 ? 'bg-[#C79B2B]' : 'bg-white/70' }}"
                        data-hero-dot data-slide-index="{{ $index }}" aria-label="Ir para banner {{ $index + 1 }}"
                        aria-current="{{ $index === 0 ? 'true' : 'false' }}"></button>
                @endforeach
            </div>
        </div>

        <div class="relative overflow-hidden bg-white border-y border-gray-200 py-8">
            <div class="flex gap-8 animate-[scroll_30s_linear_infinite] hover:[animation-play-state:paused]">
                <p class="flex items-center gap-2 text-sm text-gray-700 whitespace-nowrap">
                    <x-heroicon-o-truck class="w-4 h-4 text-[#C79B2B]" />
                    Frete <span class="font-semibold text-gray-900">grátis</span> para todo Brasil
                </p>
                <p class="flex items-center gap-2 text-sm text-gray-700 whitespace-nowrap">
                    <x-heroicon-o-credit-card class="w-4 h-4 text-[#C79B2B]" />
                    <span class="font-semibold text-gray-900">10% OFF</span> no PIX
                </p>
                <p class="flex items-center gap-2 text-sm text-gray-700 whitespace-nowrap">
                    <x-heroicon-o-shield-check class="w-4 h-4 text-[#C79B2B]" />
                    Compra <span class="font-semibold text-gray-900">100% segura</span>
                </p>
                <p class="flex items-center gap-2 text-sm text-gray-700 whitespace-nowrap">
                    <x-heroicon-o-clock class="w-4 h-4 text-[#C79B2B]" />
                    Entrega em até <span class="font-semibold text-gray-900">48h</span>
                </p>
                <p class="flex items-center gap-2 text-sm text-gray-700 whitespace-nowrap">
                    <x-heroicon-o-arrow-path class="w-4 h-4 text-[#C79B2B]" />
                    <span class="font-semibold text-gray-900">30 dias</span> para troca
                </p>
                <p class="flex items-center gap-2 text-sm text-gray-700 whitespace-nowrap">
                    <x-heroicon-o-star class="w-4 h-4 text-[#C79B2B]" />
                    Produtos <span class="font-semibold text-gray-900">premium</span>
                </p>
                <p class="flex items-center gap-2 text-sm text-gray-700 whitespace-nowrap">
                    <x-heroicon-o-heart class="w-4 h-4 text-[#C79B2B]" />
                    Mais de <span class="font-semibold text-gray-900">10mil</span> clientes satisfeitos
                </p>
                <p class="flex items-center gap-2 text-sm text-gray-700 whitespace-nowrap">
                    <x-heroicon-o-bolt class="w-4 h-4 text-[#C79B2B]" />
                    Envio <span class="font-semibold text-gray-900">expresso</span> disponível
                </p>

                <p class="flex items-center gap-2 text-sm text-gray-700 whitespace-nowrap" aria-hidden="true">
                    <x-heroicon-o-truck class="w-4 h-4 text-[#C79B2B]" />
                    Frete <span class="font-semibold text-gray-900">grátis</span> para todo Brasil
                </p>
                <p class="flex items-center gap-2 text-sm text-gray-700 whitespace-nowrap" aria-hidden="true">
                    <x-heroicon-o-credit-card class="w-4 h-4 text-[#C79B2B]" />
                    <span class="font-semibold text-gray-900">10% OFF</span> no PIX
                </p>
                <p class="flex items-center gap-2 text-sm text-gray-700 whitespace-nowrap" aria-hidden="true">
                    <x-heroicon-o-shield-check class="w-4 h-4 text-[#C79B2B]" />
                    Compra <span class="font-semibold text-gray-900">100% segura</span>
                </p>
                <p class="flex items-center gap-2 text-sm text-gray-700 whitespace-nowrap" aria-hidden="true">
                    <x-heroicon-o-clock class="w-4 h-4 text-[#C79B2B]" />
                    Entrega em até <span class="font-semibold text-gray-900">48h</span>
                </p>
                <p class="flex items-center gap-2 text-sm text-gray-700 whitespace-nowrap" aria-hidden="true">
                    <x-heroicon-o-arrow-path class="w-4 h-4 text-[#C79B2B]" />
                    <span class="font-semibold text-gray-900">30 dias</span> para troca
                </p>
                <p class="flex items-center gap-2 text-sm text-gray-700 whitespace-nowrap" aria-hidden="true">
                    <x-heroicon-o-star class="w-4 h-4 text-[#C79B2B]" />
                    Produtos <span class="font-semibold text-gray-900">premium</span>
                </p>
                <p class="flex items-center gap-2 text-sm text-gray-700 whitespace-nowrap" aria-hidden="true">
                    <x-heroicon-o-heart class="w-4 h-4 text-[#C79B2B]" />
                    Mais de <span class="font-semibold text-gray-900">10mil</span> clientes satisfeitos
                </p>
                <p class="flex items-center gap-2 text-sm text-gray-700 whitespace-nowrap" aria-hidden="true">
                    <x-heroicon-o-bolt class="w-4 h-4 text-[#C79B2B]" />
                    Envio <span class="font-semibold text-gray-900">expresso</span> disponível
                </p>
            </div>
        </div>

        <section class="flex flex-col px-4 md:px-24 mt-12 gap-8">
            <div class="flex flex-col gap-4 pb-4 border-b-2 border-gray-200">
                <div class="flex px-4 md:px-16 items-center gap-3">
                    <x-heroicon-o-fire class="h-8 w-8 md:h-10 md:w-10 text-gray-900" />
                    <h1 class="text-gray-900 text-2xl md:text-4xl font-bold">@lang('featured_products')</h1>
                </div>
            </div>

            <div class="flex flex-col gap-8 items-center">
                <div
                    class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-8 justify-center items-center w-full">
                    @foreach ($products as $product)
                        <div
                            class="flex flex-col w-full bg-white shadow-md rounded-lg gap-2 hover:shadow-xl cursor-pointer transition-all duration-300 hover:-translate-y-2 group border border-gray-100">

                            <a href="/product/{{ $product->id }}" class="flex flex-col justify-center items-center gap-2">

                                <div class="overflow-hidden rounded-lg w-full">
                                    <img src="{{ asset($product->images->first()->image ?? 'assets/model_card.png') }}"
                                        alt="{{ $product->name }}"
                                        class="h-48 md:h-64 w-full object-cover rounded-lg transition-transform duration-300 group-hover:scale-110">
                                </div>

                                {{-- bolinhas (fixo por enquanto) --}}
                                <div class="flex gap-2">
                                    <span class="h-2 w-4 rounded-full bg-gray-900 border-2 border-gray-900"></span>
                                    <span class="h-2 w-4 rounded-full bg-white border-2 border-gray-900"></span>
                                    <span class="h-2 w-4 rounded-full bg-white border-2 border-gray-900"></span>
                                </div>

                            </a>

                            <div class="flex flex-col gap-4 justify-center px-4 py-4">

                                <a href="/product/{{ $product->id }}" class="flex flex-col">

                                    {{-- nome real --}}
                                    <label class="text-black text-left px-2 text-lg font-bold cursor-pointer">
                                        {{ $product->name }}
                                    </label>

                                    {{-- descrição real --}}
                                    <label class="text-gray-600 text-left px-2 text-sm cursor-pointer">
                                        {{ $product->description }}
                                    </label>

                                    {{-- preço antigo --}}
                                    @if($product->old_price)
                                        <label class="text-gray-600 text-left text-sm px-2 line-through cursor-pointer">
                                            R$ {{ number_format($product->old_price, 2, ',', '.') }}
                                        </label>
                                    @endif

                                    {{-- preço atual --}}
                                    <label class="text-black text-left text-2xl px-2 cursor-pointer">
                                        R$ {{ number_format($product->price, 2, ',', '.') }}
                                    </label>

                                </a>

                                <div class="flex flex-col md:flex-row gap-2">

                                    <button
                                        class="bg-gray-900 text-white flex items-center justify-center rounded-md w-full py-2 gap-2 border-2 border-transparent hover:bg-[#C79B2B] cursor-pointer outline-none transition-all duration-200">

                                        <x-heroicon-o-shopping-bag class="h-4 w-4" />
                                        <span class="text-sm">@lang('buy')</span>

                                    </button>

                                    <button
                                        class="bg-white text-gray-900 flex items-center justify-center rounded-md w-full py-2 gap-2 border-2 border-gray-900 hover:bg-gray-900 hover:text-white cursor-pointer outline-none transition-all duration-200">

                                        <x-heroicon-o-shopping-cart class="h-4 w-4" />
                                        <span class="text-sm">@lang('cart')</span>

                                    </button>

                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="flex gap-2 mt-4">
                    <span class="h-4 w-4 rounded-full bg-gray-900 border-2 border-gray-900"></span>
                    <span class="h-4 w-4 rounded-full bg-white border-2 border-gray-900"></span>
                    <span class="h-4 w-4 rounded-full bg-white border-2 border-gray-900"></span>
                </div>
            </div>
        </section>

        <section class="flex flex-col px-4 md:px-24 mt-12 mb-12 gap-8">
            <div class="flex flex-col gap-4 pb-4 border-b-2 border-gray-200">
                <div class="flex px-4 md:px-16 items-center gap-3">
                    <x-heroicon-o-building-storefront class="h-8 w-8 md:h-10 md:w-10 text-gray-900" />
                    <h1 class="text-gray-900 text-2xl md:text-4xl font-bold">@lang('partners')</h1>
                </div>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-4 md:grid-cols-6 lg:grid-cols-8 gap-4 md:gap-8 mx-4 md:mx-16">
                @for($i = 0; $i < 8; $i++)
                    <a href="/parceiros/zara" class="group flex flex-col items-center gap-2 cursor-pointer">
                        <div
                            class="w-16 h-16 sm:w-20 sm:h-20 rounded-full border-2 border-gray-200 bg-gray-50 flex items-center justify-center shadow-sm transition-all duration-200 group-hover:border-[#C79B2B] group-hover:shadow-md group-hover:scale-105">
                            <x-heroicon-o-academic-cap
                                class="h-8 w-8 sm:h-10 sm:w-10 text-gray-600 group-hover:text-[#C79B2B]" />
                        </div>
                        <span
                            class="text-xs text-gray-600 group-hover:text-[#C79B2B] transition-colors duration-200 font-medium">Zara</span>
                    </a>
                @endfor
            </div>
        </section>

        <section class="flex flex-col px-4 md:px-24 mt-12 mb-12 gap-8">
            <div class="flex flex-col gap-4 pb-4 border-b-2 border-gray-200">
                <div class="flex px-4 md:px-16 items-center gap-3">
                    <x-heroicon-o-heart class="h-8 w-8 md:h-10 md:w-10 text-gray-900" />
                    <h1 class="text-gray-900 text-2xl md:text-4xl font-bold">@lang('for_you')</h1>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-8 mx-4 md:mx-16">
                @for($i = 0; $i < 4; $i++)
                    <div
                        class="relative flex flex-row rounded-xl h-32 sm:h-40 overflow-hidden shadow-md bg-white border border-gray-100">
                        <div class="flex flex-col gap-2 sm:gap-3 justify-center px-4 sm:px-6 py-3 sm:py-4 flex-1">
                            <div class="flex flex-col gap-1">
                                <h3 class="text-gray-900 text-base sm:text-xl font-semibold tracking-wide">
                                    @lang('essential_products')
                                </h3>
                                <div class="flex flex-row gap-2 items-center">
                                    <span class="w-full h-px bg-gray-200"></span>
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#C79B2B] shrink-0"></span>
                                    <span class="w-full h-px bg-gray-200"></span>
                                </div>
                            </div>
                            <a class="group bg-gray-900 text-white flex items-center justify-center rounded-md w-full py-1.5 sm:py-2 gap-1 sm:gap-2 border-2 border-transparent hover:bg-[#C79B2B] cursor-pointer outline-none transition-all duration-200 text-xs sm:text-sm"
                                href="/search">
                                <span>@lang('check_out')</span>
                                <x-heroicon-o-arrow-right class="h-3 w-3 sm:h-3.5 sm:w-3.5" />
                            </a>
                        </div>
                        <div class="relative w-6 sm:w-8 shrink-0">
                            <svg class="absolute inset-0 h-full w-full" viewBox="0 0 32 160" preserveAspectRatio="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <polygon points="0,0 32,0 32,160 0,160 16,80" fill="rgb(241 194 74)" />
                            </svg>
                        </div>
                        <div class="flex items-center justify-center bg-[#F9E446]/20 w-24 sm:w-32 shrink-0">
                            <x-heroicon-o-academic-cap class="h-12 w-12 sm:h-16 sm:w-16 text-[#C79B2B]" />
                        </div>
                    </div>
                @endfor
            </div>
        </section>

        <section class="flex flex-col px-4 md:px-24 mt-12 mb-12 gap-8">
            <div class="flex flex-col gap-4 pb-4 border-b-2 border-gray-200">
                <div class="flex px-4 md:px-16 items-center gap-3">
                    <x-heroicon-o-squares-2x2 class="h-8 w-8 md:h-10 md:w-10 text-gray-900" />
                    <h1 class="text-gray-900 text-2xl md:text-4xl font-bold">@lang('general_products')</h1>
                </div>
            </div>

            <div class="flex flex-col gap-8 items-center">
                <div
                    class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-8 justify-center items-center w-full">
                    @for ($i = 0; $i < 15; $i++)
                        <div
                            class="flex flex-col w-full bg-white shadow-md rounded-lg gap-2 hover:shadow-xl cursor-pointer transition-all duration-300 hover:-translate-y-2 group border border-gray-100">
                            <a href="/product" class="flex flex-col justify-center items-center gap-2">
                                <div class="overflow-hidden rounded-lg w-full">
                                    <img src="{{ asset('assets/model_card.png') }}" alt=""
                                        class="h-48 md:h-64 w-full object-cover rounded-lg transition-transform duration-300 group-hover:scale-110">
                                </div>
                                <div class="flex gap-2">
                                    <span class="h-2 w-4 rounded-full bg-gray-900 border-2 border-gray-900"></span>
                                    <span class="h-2 w-4 rounded-full bg-white border-2 border-gray-900"></span>
                                    <span class="h-2 w-4 rounded-full bg-white border-2 border-gray-900"></span>
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
                                        class="bg-gray-900 text-white flex items-center justify-center rounded-md w-full py-2 gap-2 border-2 border-transparent hover:bg-[#C79B2B] cursor-pointer outline-none transition-all duration-200">
                                        <x-heroicon-o-shopping-bag class="h-4 w-4" />
                                        <span class="text-sm">@lang('buy')</span>
                                    </button>
                                    <button
                                        class="bg-white text-gray-900 flex items-center justify-center rounded-md w-full py-2 gap-2 border-2 border-gray-900 hover:bg-gray-900 hover:text-white cursor-pointer outline-none transition-all duration-200">
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
            <div class="flex flex-col gap-4 pb-4 border-b-2 border-gray-200">
                <div class="flex px-4 md:px-16 items-center gap-3">
                    <x-heroicon-o-sparkles class="h-8 w-8 md:h-10 md:w-10 text-gray-900" />
                    <h1 class="text-gray-900 text-2xl md:text-4xl font-bold">@lang('new_arrivals')</h1>
                </div>
            </div>

            <div class="flex flex-col gap-8 items-center">
                <div
                    class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-8 justify-center items-center w-full">
                    @for ($i = 0; $i < 4; $i++)
                        <div
                            class="flex flex-col w-full bg-white shadow-md rounded-lg gap-2 hover:shadow-xl cursor-pointer transition-all duration-300 hover:-translate-y-2 group border border-gray-100">
                            <a href="/product" class="flex flex-col justify-center items-center gap-2">
                                <div class="overflow-hidden rounded-lg w-full">
                                    <img src="{{ asset('assets/model_card.png') }}" alt=""
                                        class="h-48 md:h-64 w-full object-cover rounded-lg transition-transform duration-300 group-hover:scale-110">
                                </div>
                                <div class="flex gap-2">
                                    <span class="h-2 w-4 rounded-full bg-gray-900 border-2 border-gray-900"></span>
                                    <span class="h-2 w-4 rounded-full bg-white border-2 border-gray-900"></span>
                                    <span class="h-2 w-4 rounded-full bg-white border-2 border-gray-900"></span>
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
                                        class="bg-gray-900 text-white flex items-center justify-center rounded-md w-full py-2 gap-2 border-2 border-transparent hover:bg-[#C79B2B] cursor-pointer outline-none transition-all duration-200">
                                        <x-heroicon-o-shopping-bag class="h-4 w-4" />
                                        <span class="text-sm">@lang('buy')</span>
                                    </button>
                                    <button
                                        class="bg-white text-gray-900 flex items-center justify-center rounded-md w-full py-2 gap-2 border-2 border-gray-900 hover:bg-gray-900 hover:text-white cursor-pointer outline-none transition-all duration-200">
                                        <x-heroicon-o-shopping-cart class="h-4 w-4" />
                                        <span class="text-sm">@lang('cart')</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
                <div class="flex gap-2 mt-4">
                    <span class="h-4 w-4 rounded-full bg-gray-900 border-2 border-gray-900"></span>
                    <span class="h-4 w-4 rounded-full bg-white border-2 border-gray-900"></span>
                    <span class="h-4 w-4 rounded-full bg-white border-2 border-gray-900"></span>
                </div>
            </div>
        </section>

        <section class="flex flex-col px-4 md:px-24 mt-12 mb-12 gap-8">
            <div class="flex flex-col gap-4 pb-4 border-b-2 border-gray-200">
                <div class="flex px-4 md:px-16 items-center gap-3">
                    <x-heroicon-o-chat-bubble-left-right class="h-8 w-8 md:h-10 md:w-10 text-gray-900" />
                    <h1 class="text-gray-900 text-2xl md:text-4xl font-bold">@lang('what_they_say')</h1>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-8 mx-4 md:mx-16">
                @for($i = 0; $i < 4; $i++)
                    <div
                        class="relative flex flex-col rounded-xl overflow-hidden shadow-md bg-white p-6 gap-4 border border-gray-100">
                        <span class="absolute top-3 right-4 text-6xl text-gray-100 font-serif leading-none select-none">"</span>
                        <div class="flex gap-1">
                            @for ($s = 0; $s < 5; $s++)
                                <x-heroicon-s-star class="h-4 w-4 text-[#F1C24A]" />
                            @endfor
                        </div>
                        <p class="text-gray-600 text-sm leading-relaxed line-clamp-3">@lang('love_products')</p>
                        <div class="flex flex-row gap-2 items-center">
                            <span class="w-full h-px bg-gray-200"></span>
                            <span class="w-1.5 h-1.5 rounded-full bg-[#C79B2B] shrink-0"></span>
                            <span class="w-full h-px bg-gray-200"></span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div
                                class="w-10 h-10 rounded-full bg-gray-100 border-2 border-gray-200 flex items-center justify-center shrink-0">
                                <x-heroicon-o-user class="h-5 w-5 text-gray-600" />
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

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('[data-hero-carousel]').forEach((carousel) => {
                const slides = Array.from(carousel.querySelectorAll('[data-hero-slide]'));
                const dots = Array.from(carousel.querySelectorAll('[data-hero-dot]'));
                const prevButton = carousel.querySelector('[data-hero-prev]');
                const nextButton = carousel.querySelector('[data-hero-next]');
                let activeIndex = 0;
                let autoplay;

                const showSlide = (nextIndex) => {
                    activeIndex = (nextIndex + slides.length) % slides.length;

                    slides.forEach((slide, index) => {
                        const isActive = index === activeIndex;
                        slide.classList.toggle('opacity-100', isActive);
                        slide.classList.toggle('opacity-0', !isActive);
                        slide.setAttribute('aria-hidden', isActive ? 'false' : 'true');
                    });

                    dots.forEach((dot, index) => {
                        const isActive = index === activeIndex;
                        dot.classList.toggle('bg-[#C79B2B]', isActive);
                        dot.classList.toggle('bg-white/70', !isActive);
                        dot.setAttribute('aria-current', isActive ? 'true' : 'false');
                    });
                };

                const startAutoplay = () => {
                    stopAutoplay();
                    autoplay = window.setInterval(() => showSlide(activeIndex + 1), 5000);
                };

                const stopAutoplay = () => {
                    if (autoplay) {
                        window.clearInterval(autoplay);
                    }
                };

                prevButton?.addEventListener('click', () => {
                    showSlide(activeIndex - 1);
                    startAutoplay();
                });

                nextButton?.addEventListener('click', () => {
                    showSlide(activeIndex + 1);
                    startAutoplay();
                });

                dots.forEach((dot) => {
                    dot.addEventListener('click', () => {
                        showSlide(Number(dot.dataset.slideIndex));
                        startAutoplay();
                    });
                });

                carousel.addEventListener('mouseenter', stopAutoplay);
                carousel.addEventListener('mouseleave', startAutoplay);
                carousel.addEventListener('focusin', stopAutoplay);
                carousel.addEventListener('focusout', startAutoplay);

                showSlide(0);
                startAutoplay();
            });
        });
    </script>
@endsection
