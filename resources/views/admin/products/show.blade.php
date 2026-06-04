@extends('_layouts.app')

@section('title', 'Produto: ' . $product->name . ' - UseTatiModas Admin')

@section('content')
<main class="px-4 md:px-8 lg:px-24 py-6 md:py-12">
    <div class="max-w-7xl mx-auto">
        <div class="flex flex-col gap-4">

            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                <h1 class="text-2xl md:text-3xl font-bold tracking-tight text-gray-800">{{ $product->name }}</h1>
                <div class="flex items-center gap-2">
                    <a href="{{ route('admin.products.edit', $product->id) }}" class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600 transition-colors text-sm font-medium flex items-center gap-2">
                        <x-heroicon-o-pencil-square class="w-4 h-4" />
                        Editar
                    </a>
                    <a href="{{ route('admin.products') }}" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300 transition-colors text-sm font-medium flex items-center gap-2">
                        <x-heroicon-o-arrow-left class="w-4 h-4" />
                        Voltar
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">

                <div class="lg:col-span-2 flex flex-col gap-4">

                    @if($product->images && $product->images->count())
                    <div class="rounded-md border border-gray-200 bg-white p-6">
                        <h2 class="text-base font-semibold text-gray-800 border-b border-gray-100 pb-3 mb-4">Imagens</h2>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                            @foreach($product->images as $image)
                            <div class="relative">
                                <img src="{{ asset('storage/' . $image->image) }}" class="w-full h-32 object-cover rounded-md border border-gray-200">
                                @if($image->is_primary)
                                <span class="absolute top-1 left-1 bg-gold-dark text-white text-xs px-1.5 py-0.5 rounded">Principal</span>
                                @endif
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    <div class="rounded-md border border-gray-200 bg-white p-6 flex flex-col gap-4">
                        <h2 class="text-base font-semibold text-gray-800 border-b border-gray-100 pb-3">Informações Gerais</h2>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <p class="text-xs font-medium text-gray-500 uppercase tracking-wide">SKU</p>
                                <p class="text-sm text-gray-800 mt-1">{{ $product->sku }}</p>
                            </div>
                            <div>
                                <p class="text-xs font-medium text-gray-500 uppercase tracking-wide">Material</p>
                                <p class="text-sm text-gray-800 mt-1">{{ $product->material ?? '—' }}</p>
                            </div>
                        </div>

                        <div>
                            <p class="text-xs font-medium text-gray-500 uppercase tracking-wide">Descrição</p>
                            <p class="text-sm text-gray-800 mt-1">{{ $product->description }}</p>
                        </div>
                    </div>

                    <div class="rounded-md border border-gray-200 bg-white p-6 flex flex-col gap-4">
                        <h2 class="text-base font-semibold text-gray-800 border-b border-gray-100 pb-3">Preço & Estoque</h2>

                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                            <div>
                                <p class="text-xs font-medium text-gray-500 uppercase tracking-wide">Preço</p>
                                <p class="text-lg font-bold text-gold-dark mt-1">R$ {{ number_format($product->price, 2, ',', '.') }}</p>
                            </div>
                            <div>
                                <p class="text-xs font-medium text-gray-500 uppercase tracking-wide">Preço Antigo</p>
                                <p class="text-sm text-gray-800 mt-1">{{ $product->old_price ? 'R$ ' . number_format($product->old_price, 2, ',', '.') : '—' }}</p>
                            </div>
                            <div>
                                <p class="text-xs font-medium text-gray-500 uppercase tracking-wide">Estoque</p>
                                <p class="text-sm font-semibold mt-1 {{ $product->stock > 0 ? 'text-green-600' : 'text-red-600' }}">{{ $product->stock }} unidades</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="flex flex-col gap-4">

                    <div class="rounded-md border border-gray-200 bg-white p-6 flex flex-col gap-4">
                        <h2 class="text-base font-semibold text-gray-800 border-b border-gray-100 pb-3">Organização</h2>

                        <div>
                            <p class="text-xs font-medium text-gray-500 uppercase tracking-wide">Categoria</p>
                            <p class="text-sm text-gray-800 mt-1">{{ $product->category->name ?? '—' }}</p>
                        </div>

                        <div>
                            <p class="text-xs font-medium text-gray-500 uppercase tracking-wide">Fornecedor</p>
                            <p class="text-sm text-gray-800 mt-1">{{ $product->supplier->name ?? '—' }}</p>
                        </div>

                        <div>
                            <p class="text-xs font-medium text-gray-500 uppercase tracking-wide">Status</p>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium mt-1 {{ $product->status === 'active' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                {{ $product->status === 'active' ? 'Ativo' : 'Inativo' }}
                            </span>
                        </div>

                        <div>
                            <p class="text-xs font-medium text-gray-500 uppercase tracking-wide">Criado em</p>
                            <p class="text-sm text-gray-800 mt-1">{{ $product->created_at->format('d/m/Y H:i') }}</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</main>
@endsection
