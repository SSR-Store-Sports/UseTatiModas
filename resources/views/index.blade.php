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
            class="absolute left-3 md:left-6 top-1/2 -translate-y-1/2 z-20 flex h-9 w-9 md:h-11 md:w-11 items-center justify-center rounded-full bg-white/75 text-gold-medium shadow-md transition hover:bg-white focus:outline-none focus:ring-2 focus:ring-gold-medium hover:cursor-pointer"
            data-hero-prev aria-label="Banner anterior">
            <x-heroicon-o-chevron-left class="h-5 w-5 md:h-6 md:w-6" />
        </button>

        <button type="button"
            class="absolute right-3 md:right-6 top-1/2 -translate-y-1/2 z-20 flex h-9 w-9 md:h-11 md:w-11 items-center justify-center rounded-full bg-white/75 text-gold-medium shadow-md transition hover:bg-white focus:outline-none focus:ring-2 focus:ring-gold-medium hover:cursor-pointer"
            data-hero-next aria-label="Proximo banner">
            <x-heroicon-o-chevron-right class="h-5 w-5 md:h-6 md:w-6" />
        </button>

        <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-2 z-20">
            @foreach ($heroSlides as $index => $slide)
            <button type="button"
                class="h-4.5 w-4.5 rounded-full border border-gold-medium transition {{ $index === 0 ? 'bg-gold-medium' : 'bg-white/70' }}"
                data-hero-dot data-slide-index="{{ $index }}" aria-label="Ir para banner {{ $index + 1 }}"
                aria-current="{{ $index === 0 ? 'true' : 'false' }}"></button>
            @endforeach
        </div>
    </div>

    <div class="relative overflow-hidden bg-white border-y border-gray-200 py-8">
        <div class="flex gap-8 animate-[scroll_30s_linear_infinite] hover:[animation-play-state:paused]">
            <p class="flex items-center gap-2 text-sm text-gray-700 whitespace-nowrap">
                <x-heroicon-o-truck class="w-4 h-4 text-gold-medium" />
                Frete <span class="font-semibold text-gray-900">grátis</span> para todo Brasil
            </p>
            <p class="flex items-center gap-2 text-sm text-gray-700 whitespace-nowrap">
                <x-heroicon-o-credit-card class="w-4 h-4 text-gold-medium" />
                <span class="font-semibold text-gray-900">10% OFF</span> no PIX
            </p>
            <p class="flex items-center gap-2 text-sm text-gray-700 whitespace-nowrap">
                <x-heroicon-o-shield-check class="w-4 h-4 text-gold-medium" />
                Compra <span class="font-semibold text-gray-900">100% segura</span>
            </p>
            <p class="flex items-center gap-2 text-sm text-gray-700 whitespace-nowrap">
                <x-heroicon-o-clock class="w-4 h-4 text-gold-medium" />
                Entrega em até <span class="font-semibold text-gray-900">48h</span>
            </p>
            <p class="flex items-center gap-2 text-sm text-gray-700 whitespace-nowrap">
                <x-heroicon-o-arrow-path class="w-4 h-4 text-gold-medium" />
                <span class="font-semibold text-gray-900">30 dias</span> para troca
            </p>
            <p class="flex items-center gap-2 text-sm text-gray-700 whitespace-nowrap">
                <x-heroicon-o-star class="w-4 h-4 text-gold-medium" />
                Produtos <span class="font-semibold text-gray-900">premium</span>
            </p>
            <p class="flex items-center gap-2 text-sm text-gray-700 whitespace-nowrap">
                <x-heroicon-o-heart class="w-4 h-4 text-gold-medium" />
                Mais de <span class="font-semibold text-gray-900">10mil</span> clientes satisfeitos
            </p>
            <p class="flex items-center gap-2 text-sm text-gray-700 whitespace-nowrap">
                <x-heroicon-o-bolt class="w-4 h-4 text-gold-medium" />
                Envio <span class="font-semibold text-gray-900">expresso</span> disponível
            </p>

            <p class="flex items-center gap-2 text-sm text-gray-700 whitespace-nowrap" aria-hidden="true">
                <x-heroicon-o-truck class="w-4 h-4 text-gold-medium" />
                Frete <span class="font-semibold text-gray-900">grátis</span> para todo Brasil
            </p>
            <p class="flex items-center gap-2 text-sm text-gray-700 whitespace-nowrap" aria-hidden="true">
                <x-heroicon-o-credit-card class="w-4 h-4 text-gold-medium" />
                <span class="font-semibold text-gray-900">10% OFF</span> no PIX
            </p>
            <p class="flex items-center gap-2 text-sm text-gray-700 whitespace-nowrap" aria-hidden="true">
                <x-heroicon-o-shield-check class="w-4 h-4 text-gold-medium" />
                Compra <span class="font-semibold text-gray-900">100% segura</span>
            </p>
            <p class="flex items-center gap-2 text-sm text-gray-700 whitespace-nowrap" aria-hidden="true">
                <x-heroicon-o-clock class="w-4 h-4 text-gold-medium" />
                Entrega em até <span class="font-semibold text-gray-900">48h</span>
            </p>
            <p class="flex items-center gap-2 text-sm text-gray-700 whitespace-nowrap" aria-hidden="true">
                <x-heroicon-o-arrow-path class="w-4 h-4 text-gold-medium" />
                <span class="font-semibold text-gray-900">30 dias</span> para troca
            </p>
            <p class="flex items-center gap-2 text-sm text-gray-700 whitespace-nowrap" aria-hidden="true">
                <x-heroicon-o-star class="w-4 h-4 text-gold-medium" />
                Produtos <span class="font-semibold text-gray-900">premium</span>
            </p>
            <p class="flex items-center gap-2 text-sm text-gray-700 whitespace-nowrap" aria-hidden="true">
                <x-heroicon-o-heart class="w-4 h-4 text-gold-medium" />
                Mais de <span class="font-semibold text-gray-900">10mil</span> clientes satisfeitos
            </p>
            <p class="flex items-center gap-2 text-sm text-gray-700 whitespace-nowrap" aria-hidden="true">
                <x-heroicon-o-bolt class="w-4 h-4 text-gold-medium" />
                Envio <span class="font-semibold text-gray-900">expresso</span> disponível
            </p>
        </div>
    </div>

    <div class="max-w-screen-2xl mx-auto">
        <section class="flex flex-col px-4 md:px-24 mt-12 gap-8">
            <div class="flex flex-col gap-4 pb-4 border-b-2 border-gray-200">
                <div class="flex px-4 md:px-16 items-center gap-3">
                    <x-heroicon-o-fire class="h-8 w-8 md:h-10 md:w-10 text-gray-900" />
                    <h1 class="text-gray-900 text-2xl md:text-4xl font-bold">@lang('featured_products')</h1>
                </div>
            </div>

            <div class="flex flex-col gap-8 items-center">
                @if ($products->isEmpty())
                <div class="flex items-center justify-center w-full my-12">
                    <span class="text-lg">
                        Não há produtos cadastrados!
                    </span>
                </div>
                @else
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-8 justify-center items-center w-full" data-featured-carousel>
                    @foreach ($products->take(9) as $index => $product)
                    <div
                        class="flex flex-col w-full bg-white shadow-md rounded-lg gap-2 hover:shadow-xl cursor-pointer transition-all duration-300 hover:-translate-y-2 group border border-gray-100 {{ $index >= 3 ? 'hidden' : '' }}"
                        data-product-card>

                        <form action="{{ route('cart.add') }}" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <input type="hidden" name="quantity" value="1">

                            <a href="/product/{{ $product->id }}"
                                class="flex flex-col justify-center items-center gap-2">
                                <div class="overflow-hidden rounded-lg w-full">
                                    <img src="{{ $product->images->first() ? asset($product->images->first()->image) : asset('assets/model_card.png') }}"
                                        alt="{{ $product->name }}"
                                        class="h-48 md:h-64 w-full object-cover rounded-lg transition-transform duration-300 group-hover:scale-110">
                                </div>

                                <div class="flex gap-2">
                                    @foreach($product->images->take(3) as $imgIndex => $image)
                                    <span class="h-2 w-4 rounded-full border-2 border-gray-900 {{ $imgIndex === 0 ? 'bg-gray-900' : 'bg-white' }}"></span>
                                    @endforeach
                                </div>
                            </a>

                            <div class="flex flex-col gap-4 justify-center px-4 py-4">
                                <a href="/product/{{ $product->id }}" class="flex flex-col">
                                    <label class="text-black text-left px-2 text-lg font-bold cursor-pointer line-clamp-1">
                                        {{ $product->name }}
                                    </label>

                                    <label class="text-gray-600 text-left px-2 text-sm cursor-pointer line-clamp-2">
                                        {{ $product->description }}
                                    </label>

                                    @if($product->old_price)
                                    <label class="text-gray-600 text-left text-sm px-2 line-through cursor-pointer">
                                        R$ {{ number_format($product->old_price, 2, ',', '.') }}
                                    </label>
                                    @endif

                                    <label class="text-black text-left text-2xl px-2 cursor-pointer">
                                        R$ {{ number_format($product->price, 2, ',', '.') }}
                                    </label>
                                </a>

                                <div class="flex flex-col md:flex-row gap-2">
                                    <a href="{{ route('product.show', $product->id) }}"
                                        class="bg-gray-900 text-white flex items-center justify-center rounded-md w-full py-2 gap-2 border-2 border-transparent hover:bg-gold-medium cursor-pointer outline-none transition-all duration-200">
                                        <x-heroicon-o-shopping-bag class="h-4 w-4" />
                                        <span class="text-sm">@lang('buy')</span>
                                    </a>

                                    <button type="submit" onclick="localStorage.setItem('scrollPos', window.scrollY);"
                                        class="bg-white text-gray-900 flex items-center justify-center rounded-md w-full py-2 gap-2 border-2 border-gray-900 hover:bg-gray-900 hover:text-white cursor-pointer outline-none transition-all duration-200">
                                        <x-heroicon-o-shopping-cart class="h-4 w-4" />
                                        <span class="text-sm">@lang('cart')</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    @endforeach
                </div>
                
                @if($products->count() > 3)
                <div class="flex gap-2 mt-4">
                    @for($i = 0; $i < ceil(min($products->count(), 9) / 3); $i++)
                    <button type="button" 
                        class="h-4 w-4 rounded-full border-2 border-gray-900 transition {{ $i === 0 ? 'bg-gray-900' : 'bg-white' }}" 
                        data-featured-dot="{{ $i }}">
                    </button>
                    @endfor
                </div>
                @endif
                @endif
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
                @forelse ($suppliers as $supplier)
                    <div class="group flex flex-col items-center gap-2">
                        <div
                            class="w-16 h-16 sm:w-20 sm:h-20 rounded-full border-2 border-gray-200 bg-gray-50 flex items-center justify-center shadow-sm transition-all duration-200 group-hover:border-gold-medium group-hover:shadow-md group-hover:scale-105">
                            <span class="text-lg font-semibold text-gray-700">{{ strtoupper(substr($supplier->name, 0, 1)) }}</span>
                        </div>
                        <span
                            class="text-xs text-gray-600 group-hover:text-gold-medium transition-colors duration-200 font-medium text-center">{{ \Illuminate\Support\Str::limit($supplier->name, 14) }}</span>
                    </div>
                @empty
                    <div class="col-span-full text-center text-gray-500">
                        Nenhum parceiro cadastrado ainda.
                    </div>
                @endforelse
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
                                <span class="w-1.5 h-1.5 rounded-full bg-gold-medium shrink-0"></span>
                                <span class="w-full h-px bg-gray-200"></span>
                            </div>
                        </div>
                        <a class="group bg-gray-900 text-white flex items-center justify-center rounded-md w-full py-1.5 sm:py-2 gap-1 sm:gap-2 border-2 border-transparent hover:bg-gold-medium cursor-pointer outline-none transition-all duration-200 text-xs sm:text-sm"
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
                    <div class="flex items-center justify-center bg-gold-soft/20 w-24 sm:w-32 shrink-0">
                        <x-heroicon-o-academic-cap class="h-12 w-12 sm:h-16 sm:w-16 text-gold-medium" />
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
            @if ($products->isEmpty())
            <div class="flex items-center justify-center w-full my-12">
                <span class="text-lg">
                    Não há produtos cadastrados!
                </span>
            </div>
            @else
            <div
                class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-8 justify-center items-center w-full">
                @foreach ($products as $product)
                    <div
                    class="flex flex-col w-full bg-white shadow-md rounded-lg gap-2 hover:shadow-xl cursor-pointer transition-all duration-300 hover:-translate-y-2 group border border-gray-100">
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <input type="hidden" name="quantity" value="1">

                        <a href="/product/{{ $product->id }}" class="flex flex-col justify-center items-center gap-2">
                            <div class="overflow-hidden rounded-lg w-full">
                                <img src="{{ $product->images->first() ? asset($product->images->first()->image) : asset('assets/model_card.png') }}" alt="{{ $product->name }}"
                                    class="h-48 md:h-64 w-full object-cover rounded-lg transition-transform duration-300 group-hover:scale-110">
                            </div>
                            <div class="flex gap-2">
                                @foreach($product->images->take(3) as $imgIndex => $image)
                                <span class="h-2 w-4 rounded-full border-2 border-gray-900 {{ $imgIndex === 0 ? 'bg-gray-900' : 'bg-white' }}"></span>
                                @endforeach
                            </div>
                        </a>
                        <div class="flex flex-col gap-4 justify-center px-4 py-4">
                            <a href="/product/{{ $product->id }}" class="flex flex-col">
                                <label
                                    class="text-black text-left px-2 text-lg font-bold line-clamp-1 cursor-pointer">{{ $product->name }}</label>
                                <label
                                    class="text-gray-600 text-left px-2 text-sm line-clamp-2 cursor-pointer">{{ $product->description }}</label>
                                @if($product->old_price)
                                <label
                                    class="text-gray-600 text-left text-sm px-2 line-through cursor-pointer">R$
                                    {{ number_format($product->old_price, 2, ',', '.') }}</label>
                                @endif
                                <label class="text-black text-left text-2xl px-2 cursor-pointer">R$ {{ number_format($product->price, 2, ',', '.') }}</label>
                            </a>
                            <div class="flex flex-col md:flex-row gap-2">
                                <a href="{{ route('product.show', $product->id) }}"
                                    class="bg-gray-900 text-white flex items-center justify-center rounded-md w-full py-2 gap-2 border-2 border-transparent hover:bg-gold-medium cursor-pointer outline-none transition-all duration-200">
                                    <x-heroicon-o-shopping-bag class="h-4 w-4" />
                                    <span class="text-sm">@lang('buy')</span>
                                </a>
                                <button type="submit" onclick="localStorage.setItem('scrollPos', window.scrollY);"
                                    class="bg-white text-gray-900 flex items-center justify-center rounded-md w-full py-2 gap-2 border-2 border-gray-900 hover:bg-gray-900 hover:text-white cursor-pointer outline-none transition-all duration-200">
                                    <x-heroicon-o-shopping-cart class="h-4 w-4" />
                                    <span class="text-sm">@lang('cart')</span>
                                </button>
                            </div>
                        </div>
                    </form>
            </div>
            @endforeach
        </div>
        @endif
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
            @if ($products->isEmpty())
            <div class="flex items-center justify-center w-full my-12">
                <span class="text-lg">
                    Não há produtos cadastrados!
                </span>
            </div>
            @else
            <div
                class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-8 justify-center items-center w-full">
                @foreach ($products->take(4) as $product)
                    <div
                    class="flex flex-col w-full bg-white shadow-md rounded-lg gap-2 hover:shadow-xl cursor-pointer transition-all duration-300 hover:-translate-y-2 group border border-gray-100">
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <input type="hidden" name="quantity" value="1">

                        <a href="/product/{{ $product->id }}" class="flex flex-col justify-center items-center gap-2">
                            <div class="overflow-hidden rounded-lg w-full">
                                <img src="{{ $product->images->first() ? asset($product->images->first()->image) : asset('assets/model_card.png') }}" alt="{{ $product->name }}"
                                    class="h-48 md:h-64 w-full object-cover rounded-lg transition-transform duration-300 group-hover:scale-110">
                            </div>
                            <div class="flex gap-2">
                                @foreach($product->images->take(3) as $imgIndex => $image)
                                <span class="h-2 w-4 rounded-full border-2 border-gray-900 {{ $imgIndex === 0 ? 'bg-gray-900' : 'bg-white' }}"></span>
                                @endforeach
                            </div>
                        </a>
                        <div class="flex flex-col gap-4 justify-center px-4 py-4">
                            <a href="/product/{{ $product->id }}" class="flex flex-col">
                                <label
                                    class="text-black text-left px-2 text-lg font-bold line-clamp-1 cursor-pointer">{{ $product->name }}</label>
                                <label
                                    class="text-gray-600 text-left px-2 text-sm line-clamp-2 cursor-pointer">{{ $product->description }}</label>
                                @if($product->old_price)
                                <label
                                    class="text-gray-600 text-left text-sm px-2 line-through cursor-pointer">R$
                                    {{ number_format($product->old_price, 2, ',', '.') }}</label>
                                @endif
                                <label class="text-black text-left text-2xl px-2 cursor-pointer">R$ {{ number_format($product->price, 2, ',', '.') }}</label>
                            </a>
                            <div class="flex flex-col md:flex-row gap-2">
                                <a href="{{ route('product.show', $product->id) }}"
                                    class="bg-gray-900 text-white flex items-center justify-center rounded-md w-full py-2 gap-2 border-2 border-transparent hover:bg-gold-medium cursor-pointer outline-none transition-all duration-200">
                                    <x-heroicon-o-shopping-bag class="h-4 w-4" />
                                    <span class="text-sm">@lang('buy')</span>
                                </a>
                                <button type="submit" onclick="localStorage.setItem('scrollPos', window.scrollY);"
                                    class="bg-white text-gray-900 flex items-center justify-center rounded-md w-full py-2 gap-2 border-2 border-gray-900 hover:bg-gray-900 hover:text-white cursor-pointer outline-none transition-all duration-200">
                                    <x-heroicon-o-shopping-cart class="h-4 w-4" />
                                    <span class="text-sm">@lang('cart')</span>
                                </button>
                            </div>
                        </div>
                    </form>
            </div>
            @endforeach
        </div>
        @endif
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
                <span
                    class="absolute top-3 right-4 text-6xl text-gray-100 font-serif leading-none select-none">"</span>
                <div class="flex gap-1">
                    @for ($s = 0; $s
                    < 5; $s++)
                        <x-heroicon-s-star class="h-4 w-4 text-gold-light" />
                    @endfor
                </div>
                <p class="text-gray-600 text-sm leading-relaxed line-clamp-3">@lang('love_products')</p>
                <div class="flex flex-row gap-2 items-center">
                    <span class="w-full h-px bg-gray-200"></span>
                    <span class="w-1.5 h-1.5 rounded-full bg-gold-medium shrink-0"></span>
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

    </div>

    <x-discounts />
</main>
@endsection


@push('scripts')
<script src="{{ asset('js/carrossel.js') }}"></script>
<script src="{{ asset('js/featured-carousel.js') }}"></script>
@endpush