@extends('_layouts.app')

@section('title', __('product_detail') . ': UseTatiModas')

@section('content')
    <main class="px-4 md:px-12 lg:px-24 my-6 md:my-12 max-w-screen-2xl">
        <section
            class="bg-white rounded-xl shadow-lg shadow-gold-medium/20 p-4 md:p-8 lg:p-10 flex flex-col lg:flex-row gap-6 md:gap-8 lg:gap-12">

            <div class="flex flex-col gap-4 w-full lg:w-80 shrink-0">
                <div
                    class="w-full lg:w-80 h-64 md:h-80 lg:h-96 bg-gray-50 border border-gold-soft rounded-lg overflow-hidden shadow-md">
                    <img id="main-image"
                        src="{{ $product->images->first() ? $product->images->first()->url : asset('assets/model_card.png') }}"
                        alt="{{ $product->name }}"
                        class="h-full w-full object-cover transition-transform duration-300 hover:scale-105 cursor-pointer">
                </div>

                @if($product->images->count() > 1)
                    <div class="flex gap-3 justify-center">
                        @foreach ($product->images->take(3) as $image)
                            <div class="w-16 h-16 bg-gray-100 border border-gold-soft rounded-md overflow-hidden cursor-pointer">
                                <img src="{{ asset($image->image) }}" alt="{{ $product->name }}"
                                    onclick="document.getElementById('main-image').src = this.src"
                                    class="h-full w-full object-cover hover:scale-110 transition-transform duration-300">
                            </div>
                        @endforeach
                    </div>
                @endif

                <div class="flex flex-col gap-2 border-t border-gray-100 pt-3">
                    @if($product->variants->isNotEmpty())
                        @php $colors = $product->variants->pluck('color')->filter()->unique(); @endphp
                        @if($colors->isNotEmpty())
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-medium text-gray-700">@lang('color')</label>
                            <div class="flex flex-wrap gap-2">
                                @foreach($colors as $color)
                                <button class="px-3 py-1 rounded-md border-2 border-gray-200 text-xs font-medium text-gray-700 hover:border-gold-dark hover:text-gold-dark transition-all duration-200">
                                    {{ $color }}
                                </button>
                                @endforeach
                            </div>
                        </div>
                        @endif

                        @php $sizes = $product->variants->pluck('size')->filter()->unique(); @endphp
                        @if($sizes->isNotEmpty())
                        <div class="flex flex-col gap-2 mt-2">
                            <label class="text-sm font-medium text-gray-700">@lang('size')</label>
                            <div class="flex flex-wrap gap-2">
                                @foreach($sizes as $size)
                                <button class="w-10 h-10 rounded-md border-2 border-gold-soft text-sm font-medium text-gray-700 hover:border-gold-dark hover:text-gold-dark transition-all duration-200">
                                    {{ $size }}
                                </button>
                                @endforeach
                            </div>
                        </div>
                        @endif
                    @endif
                </div>
            </div>
            <div class="flex flex-col gap-6 flex-1">
                <div class="flex flex-col gap-2">
                    <h1 class="text-2xl md:text-3xl font-bold text-black">{{ $product->name }}</h1>
                    <div class="flex flex-wrap gap-3 md:gap-6 text-xs md:text-sm">
                        <span class="text-blue-600 border border-blue-600 px-2 py-0.5 rounded">
                            @lang('sku'): {{ $product->sku }}
                        </span>
                        <span class="text-gray-500">
                            @lang('published'): {{ $product->created_at->format('d/m/Y') }}
                        </span>
                    </div>
                </div>

                <p class="text-gray-600 leading-relaxed">{{ $product->description }}</p>

                <div class="flex flex-col gap-2 border-t border-gray-100 pt-4">
                    <div class="flex items-center gap-1">
                        @for ($star = 1; $star <= 5; $star++)
                            <x-heroicon-s-star
                                class="w-5 h-5 {{ $star <= ($product->rating ?? 0) ? 'text-yellow-400' : 'text-gray-300' }}" />
                        @endfor
                        <span class="text-sm text-gray-500 ml-1">({{ number_format($product->rating ?? 0, 1) }}) ·
                            {{ $product->reviews_count ?? 0 }} @lang('reviews')</span>
                    </div>

                    <div class="flex flex-col gap-1">
                        @if($product->old_price)
                            <span class="text-sm text-gray-400 line-through">R$
                                {{ number_format($product->old_price, 2, ',', '.') }}</span>
                        @endif
                        <span class="text-3xl font-bold text-gold-dark">R$
                            {{ number_format($product->price, 2, ',', '.') }}</span>
                        <span class="text-xs text-gray-500">@lang('installments')</span>

                        <div class="flex items-center border border-gray-200 rounded-md overflow-hidden w-fit mt-1">
                            <button type="button" onclick="decrementQty()"
                                class="px-2 py-1 text-gold-dark hover:bg-gray-100 transition-all">−</button>
                            <input id="qty" type="number" min="1" max="{{ $product->stock }}" value="1"
                                onchange="updateQuantity(this.value)"
                                class="w-8 text-center text-sm outline-none border-x border-gray-200 py-1 [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none">
                            <button type="button" onclick="incrementQty()"
                                class="px-2 py-1 text-gold-dark hover:bg-gray-100 transition-all">+</button>
                        </div>
                    </div>

                    <div
                        class="grid grid-cols-2 gap-2 md:gap-3 text-xs md:text-sm text-gray-600 border border-gray-100 rounded-lg p-3 md:p-4 bg-gray-50/40">
                        <div class="flex flex-col gap-1">
                            <span class="text-xs text-gray-400 uppercase">@lang('category')</span>
                            <span class="font-medium">{{ $product->category->name ?? 'N/A' }}</span>
                        </div>
                        <div class="flex flex-col gap-1">
                            <span class="text-xs text-gray-400 uppercase">@lang('material')</span>
                            <span class="font-medium">{{ $product->material ?? __('material_value') }}</span>
                        </div>
                        <div class="flex flex-col gap-1">
                            <span class="text-xs text-gray-400 uppercase">@lang('freight')</span>
                            <span class="font-medium {{ $product->free_shipping ? 'text-green-600' : 'text-gray-600' }}">
                                {{ $product->free_shipping ? __('free') : 'A calcular' }}
                            </span>
                        </div>
                        <div class="flex flex-col gap-1">
                            <span class="text-xs text-gray-400 uppercase">@lang('stock')</span>
                            <span class="font-medium {{ $product->stock > 0 ? 'text-green-600' : 'text-red-600' }}">
                                {{ $product->stock > 0 ? $product->stock . ' disponíveis' : 'Esgotado' }}
                            </span>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-3 md:gap-4 mt-2">
                        <a href="{{ route('checkout.index') }}"
                            class="bg-gray-900 text-white flex items-center justify-center rounded-sm w-full py-3 gap-2 border-2 border-transparent hover:bg-gold-medium transition-all duration-200 text-center">
                            <span>@lang('buy')</span>
                            <x-heroicon-o-shopping-bag class="h-4 w-4" />
                        </a>
                        <form action="{{ route('cart.add') }}" method="POST" class="w-full">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <input type="hidden" name="quantity" id="cart-quantity" value="1">
                            <button type="submit" {{ $product->stock <= 0 ? 'disabled' : '' }}
                                class="bg-white text-gold-dark flex items-center justify-center rounded-sm w-full py-3 gap-2 border-2 border-gold-dark hover:bg-gray-100 transition-all duration-200 disabled:opacity-50 disabled:cursor-not-allowed">
                                <span>@lang('add_to_cart')</span>
                                <x-heroicon-o-shopping-cart class="h-4 w-4" />
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-8 md:mt-16 flex flex-col gap-6 md:gap-8">
            <div class="flex flex-col gap-4 pb-4 border-b-2 border-gray-200">
                <div class="flex items-center gap-3">
                    <x-heroicon-o-squares-2x2 class="h-8 w-8 md:h-10 md:w-10 text-gray-900" />
                    <h2 class="text-gray-900 text-2xl md:text-4xl font-bold">@lang('related_products')</h2>
                </div>
            </div>

            @php
                $related = \App\Models\Product::with('images')
                    ->where('category_id', $product->category_id)
                    ->where('id', '!=', $product->id)
                    ->where('status', 'active')
                    ->take(4)
                    ->get();
            @endphp

            @if($related->isEmpty())
                <p class="text-gray-500 text-sm">Nenhum produto relacionado encontrado.</p>
            @else
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-8">
                    @foreach ($related as $rel)
                        <div
                            class="flex flex-col w-full bg-white shadow-md rounded-lg gap-2 hover:shadow-xl cursor-pointer transition-all duration-300 hover:-translate-y-2 group border border-gray-100">
                            <form action="{{ route('cart.add') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $rel->id }}">
                                <input type="hidden" name="quantity" value="1">
                                <a href="{{ route('product.show', $rel->id) }}"
                                    class="flex flex-col justify-center items-center gap-2">
                                    <div class="overflow-hidden rounded-lg w-full">
                                        <img src="{{ $rel->images->first() ? asset($rel->images->first()->image) : asset('assets/model_card.png') }}"
                                            alt="{{ $rel->name }}"
                                            class="h-48 md:h-64 w-full object-cover rounded-lg transition-transform duration-300 group-hover:scale-110">
                                    </div>
                                </a>
                                <div class="flex flex-col gap-4 justify-center px-4 py-4">
                                    <a href="{{ route('product.show', $rel->id) }}" class="flex flex-col">
                                        <label
                                            class="text-black text-left px-2 text-lg font-bold line-clamp-1 cursor-pointer">{{ $rel->name }}</label>
                                        @if($rel->old_price)
                                            <label class="text-gray-600 text-left text-sm px-2 line-through cursor-pointer">R$
                                                {{ number_format($rel->old_price, 2, ',', '.') }}</label>
                                        @endif
                                        <label class="text-black text-left text-2xl px-2 cursor-pointer">R$
                                            {{ number_format($rel->price, 2, ',', '.') }}</label>
                                    </a>
                                    <div class="flex flex-col md:flex-row gap-2">
                                        <a href="{{ route('product.show', $rel->id) }}"
                                            class="bg-gray-900 text-white flex items-center justify-center rounded-md w-full py-2 gap-2 border-2 border-transparent hover:bg-gold-medium transition-all duration-200">
                                            <x-heroicon-o-shopping-bag class="h-4 w-4" />
                                            <span class="text-sm">@lang('buy')</span>
                                        </a>
                                        <button type="submit"
                                            class="bg-white text-gray-900 flex items-center justify-center rounded-md w-full py-2 gap-2 border-2 border-gray-900 hover:bg-gray-900 hover:text-white transition-all duration-200">
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
        </section>
    </main>

    <script>
        const maxStock = {{ $product->stock }};

        function updateQuantity(value) {
            const qty = Math.max(1, Math.min(maxStock, parseInt(value) || 1));
            document.getElementById('qty').value = qty;
            document.getElementById('cart-quantity').value = qty;
        }

        function incrementQty() {
            const input = document.getElementById('qty');
            updateQuantity(parseInt(input.value) + 1);
        }

        function decrementQty() {
            const input = document.getElementById('qty');
            updateQuantity(parseInt(input.value) - 1);
        }
    </script>
@endsection