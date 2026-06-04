@extends('_layouts.app')

@section('title', 'Categoria: ' . $category->name . ' - UseTatiModas Admin')

@section('content')
<main class="px-4 md:px-8 lg:px-24 py-6 md:py-12">
    <div class="max-w-7xl mx-auto">
        <div class="flex flex-col gap-4">

            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                <div class="flex items-center gap-3">
                    <a href="{{ route('admin.categories') }}" class="p-2 bg-gray-100 text-gray-600 rounded-md hover:bg-gray-200 transition-colors">
                        <x-heroicon-o-arrow-left class="w-4 h-4" />
                    </a>
                    <h1 class="text-2xl md:text-3xl font-bold tracking-tight text-gray-800">{{ $category->name }}</h1>
                </div>
                <a href="{{ route('admin.categories.edit', $category->id) }}" class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600 transition-colors text-sm font-medium flex items-center gap-2">
                    <x-heroicon-o-pencil-square class="w-4 h-4" />
                    Editar
                </a>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">

                <div class="lg:col-span-2 rounded-md border border-gray-200 bg-white p-6 flex flex-col gap-4">
                    <h2 class="text-base font-semibold text-gray-800 border-b border-gray-100 pb-3">Informações da Categoria</h2>

                    <div>
                        <p class="text-xs font-medium text-gray-500 uppercase tracking-wide">Nome</p>
                        <p class="text-sm text-gray-800 mt-1">{{ $category->name }}</p>
                    </div>

                    <div>
                        <p class="text-xs font-medium text-gray-500 uppercase tracking-wide">Slug</p>
                        <p class="text-sm font-mono text-gray-800 mt-1">{{ $category->slug ?? '—' }}</p>
                    </div>

                    <div>
                        <p class="text-xs font-medium text-gray-500 uppercase tracking-wide">Descrição</p>
                        <p class="text-sm text-gray-800 mt-1">{{ $category->description ?? '—' }}</p>
                    </div>
                </div>

                <div class="flex flex-col gap-4">
                    <div class="rounded-md border border-gray-200 bg-white p-6 flex flex-col gap-4">
                        <h2 class="text-base font-semibold text-gray-800 border-b border-gray-100 pb-3">Organização</h2>

                        <div>
                            <p class="text-xs font-medium text-gray-500 uppercase tracking-wide">Status</p>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium mt-1
                                {{ $category->status === 'active' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                {{ $category->status === 'active' ? 'Ativo' : 'Inativo' }}
                            </span>
                        </div>

                        <div>
                            <p class="text-xs font-medium text-gray-500 uppercase tracking-wide">Produtos</p>
                            <p class="text-sm text-gray-800 mt-1">{{ $category->products_count }} produto(s)</p>
                        </div>

                        <div>
                            <p class="text-xs font-medium text-gray-500 uppercase tracking-wide">Criado em</p>
                            <p class="text-sm text-gray-800 mt-1">{{ $category->created_at->format('d/m/Y H:i') }}</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>
@endsection
