@extends('_layouts.app')

@section('title', 'Acesso Negado - UseTatiModas')

@section('content')
<main class="min-h-screen flex items-center justify-center px-4 py-12">
    <div class="max-w-md w-full text-center">
        <div class="mb-8">
            <div class="mx-auto w-24 h-24 bg-red-100 rounded-full flex items-center justify-center mb-6">
                <x-heroicon-o-shield-exclamation class="w-12 h-12 text-red-600" />
            </div>
            
            <h1 class="text-6xl font-bold text-gray-900 mb-2">403</h1>
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Acesso Negado</h2>
            <p class="text-gray-600 mb-8">
                Você não tem permissão para acessar esta página. 
                <br>Esta área é restrita para administradores.
            </p>
        </div>

        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('home') }}" 
               class="bg-gray-900 text-white px-6 py-3 rounded-md hover:bg-gold-medium transition-colors font-medium flex items-center justify-center gap-2">
                <x-heroicon-o-home class="w-4 h-4" />
                Voltar ao Início
            </a>
            
            @auth
            <a href="/profile" 
               class="bg-white text-gray-900 px-6 py-3 rounded-md border-2 border-gray-900 hover:bg-gray-900 hover:text-white transition-colors font-medium flex items-center justify-center gap-2">
                <x-heroicon-o-user class="w-4 h-4" />
                Meu Perfil
            </a>
            @else
            <a href="/sign-in" 
               class="bg-white text-gray-900 px-6 py-3 rounded-md border-2 border-gray-900 hover:bg-gray-900 hover:text-white transition-colors font-medium flex items-center justify-center gap-2">
                <x-heroicon-o-arrow-right-end-on-rectangle class="w-4 h-4" />
                Fazer Login
            </a>
            @endauth
        </div>

        <div class="mt-12 text-sm text-gray-500">
            <p>Se você acredita que deveria ter acesso a esta área,</p>
            <p>entre em contato com um administrador.</p>
        </div>
    </div>
</main>
@endsection