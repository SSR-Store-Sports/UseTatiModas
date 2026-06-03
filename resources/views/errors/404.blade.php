@extends('_layouts.app')

@section('title', 'Página Não Encontrada - UseTatiModas')

@section('content')
<main class="min-h-screen flex items-center justify-center px-4 py-12">
    <div class="max-w-md w-full text-center">
        <div class="mb-8">
            <div class="mx-auto w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mb-6">
                <x-heroicon-o-magnifying-glass class="w-12 h-12 text-gray-600" />
            </div>
            
            <h1 class="text-6xl font-bold text-gray-900 mb-2">404</h1>
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Página Não Encontrada</h2>
            <p class="text-gray-600 mb-8">
                Ops! A página que você está procurando não existe ou foi movida.
            </p>
        </div>

        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('home') }}" 
               class="bg-gray-900 text-white px-6 py-3 rounded-md hover:bg-gold-medium transition-colors font-medium flex items-center justify-center gap-2">
                <x-heroicon-o-home class="w-4 h-4" />
                Voltar ao Início
            </a>
            
            <a href="/search" 
               class="bg-white text-gray-900 px-6 py-3 rounded-md border-2 border-gray-900 hover:bg-gray-900 hover:text-white transition-colors font-medium flex items-center justify-center gap-2">
                <x-heroicon-o-magnifying-glass class="w-4 h-4" />
                Buscar Produtos
            </a>
        </div>

        <div class="mt-12 text-sm text-gray-500">
            <p>Você pode usar a busca acima para encontrar</p>
            <p>o que estava procurando.</p>
        </div>
    </div>
</main>
@endsection