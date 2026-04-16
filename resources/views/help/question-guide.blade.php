@extends('_layouts.help')

@section('title', 'COMO ACESSAR MINHA CONTA')

@section('content')
  <x-help.header />

  <main class="flex flex-col justify-center items-center gap-4">
    <header class="flex flex-col gap-2 justify-center items-center text-center mb-8">
      <h1 class="text-4xl font-light">Como Acessar Minha Conta</h1>
      <span class="h-0.5 w-52 mt-2 bg-gray-300"></span>
      <h2 class="text-sm text-gray-400 mt-2">11 de março de 2026 · <span>🧾</span></h2>
    </header>

    <section class="flex flex-col gap-4 max-w-xl w-full">
      <div class="flex flex-col gap-3 text-gray-700 text-base leading-relaxed bg-white rounded-lg shadow-sm shadow-pink-500/20 p-6 border border-gray-100">
        <p>Siga as instruções abaixo para entrar na sua conta:</p>
        <ol class="flex flex-col gap-2 list-none">
          <li class="flex items-start gap-3">
            <span class="flex items-center justify-center w-6 h-6 rounded-full bg-pink-500 text-white text-xs font-bold shrink-0 mt-0.5">1</span>
            <span>Abra o site oficial da Tati Use Modas em seu dispositivo.</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="flex items-center justify-center w-6 h-6 rounded-full bg-pink-500 text-white text-xs font-bold shrink-0 mt-0.5">2</span>
            <span>Na tela inicial, toque no botão <strong>Entrar</strong>.</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="flex items-center justify-center w-6 h-6 rounded-full bg-pink-500 text-white text-xs font-bold shrink-0 mt-0.5">3</span>
            <span>Insira suas credenciais nos campos indicados: <strong>E-mail ou nome de usuário</strong> e <strong>Senha</strong>.</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="flex items-center justify-center w-6 h-6 rounded-full bg-pink-500 text-white text-xs font-bold shrink-0 mt-0.5">4</span>
            <span>Para finalizar, toque no botão <strong>Acessar</strong>.</span>
          </li>
        </ol>
      </div>
    </section>

    <section class="flex flex-col flex-1 gap-2 mt-12 items-center max-w-xl w-full">
      <div class="flex gap-4 items-center mb-4 justify-center text-center">
        <span class="h-0.5 w-24 bg-gray-300"></span>
        <h2 class="text-2xl text-gray-400 uppercase">Suporte</h2>
        <span class="h-0.5 w-24 bg-gray-300"></span>
      </div>

      <button class="group bg-orange-500 text-white flex items-center justify-center rounded-sm w-62 pt-3 pb-3 gap-2 border-2 border-transparent hover:bg-white hover:border-2 hover:border-orange-600 hover:text-orange-600 cursor-pointer text-center outline-none transition-all duration-200">
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
