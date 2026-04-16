@extends('_layouts.help')

@section('title', 'Central de Ajuda')

@section('content')
  <x-help.header />

  <main class="flex flex-col justify-center items-center gap-4">
    <header class="flex flex-col gap-2 justify-center items-center text-center mb-8">
      <h1 class="text-4xl">Central de Ajuda</h1>
      <span class="h-0.5 w-52 mt-2 bg-gray-300"></span>
    </header>

    <section class="flex flex-col gap-4">
      <button class="group bg-pink-500 text-white flex items-center justify-center rounded-sm w-full pt-3 pb-3 pl-12 pr-12 gap-2 border-2 border-transparent hover:bg-white hover:border-2 hover:border-pink-600 hover:text-pink-600 cursor-pointer text-center outline-none transition-all duration-200">
        <x-heroicon-o-arrow-right class="h-4 w-4" />
        <span>Como Acessar Minha Conta?</span>
      </button>ZZZz

      <button class="group bg-pink-500 text-white flex items-center justify-center rounded-sm w-full pt-3 pb-3 pl-12 pr-12 gap-2 border-2 border-transparent hover:bg-white hover:border-2 hover:border-pink-600 hover:text-pink-600 cursor-pointer text-center outline-none transition-all duration-200">
        <x-heroicon-o-arrow-right class="h-4 w-4" />
        <span>Como Posso me Cadastrar?</span>
      </button>

      <button class="group bg-pink-500 text-white flex items-center justify-center rounded-sm w-full pt-3 pb-3 pl-12 pr-12 gap-2 border-2 border-transparent hover:bg-white hover:border-2 hover:border-pink-600 hover:text-pink-600 cursor-pointer text-center outline-none transition-all duration-200">
        <x-heroicon-o-arrow-right class="h-4 w-4" />
        <span>Como Recuperar Minha Conta?</span>
      </button>
    </section>

    <section class="flex flex-col flex-1 gap-2 mt-12">
      <div class="flex gap-4 items-center mb-4 justify-center text-center">
        <span class="h-0.5 w-24 bg-gray-300"></span>
        <h2 class="text-2xl text-gray-400 uppercase">Suporte</h2>
        <span class="h-0.5 w-24 bg-gray-300"></span>
      </div>

      <button class="group bg-orange-500 text-white flex items-center justify-center rounded-sm w-full pt-3 pb-3 gap-2 border-2 border-transparent hover:bg-white hover:border-2 hover:border-orange-600 hover:text-orange-600 cursor-pointer text-center outline-none transition-all duration-200">
        <x-heroicon-o-document-text class="h-4 w-4" />
        <span>Termos de Serviço?</span>
      </button>

      <span class="h-0.5 w-full mt-4 mb-4 bg-gray-300"></span>

      <p class="flex text-lg text-center gap-2 items-center justify-center">
        Já Tem uma Conta?
        <a href="" class="text-blue-500 hover:decoration-blue-500 hover:underline">Login</a>
      </p>
    </section>
  </main>
@endsection
