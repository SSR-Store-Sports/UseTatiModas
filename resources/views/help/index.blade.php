@extends('_layouts.help')

@section('title', 'Central de Ajuda')

@section('content')
  <header class="flex h-28 items-center px-12">
    <a class="group text-pink-600" href="#">
      <x-heroicon-o-arrow-left class="h-6 w-6 group-hover:text-pink-300" />
    </a>
  </header>

  <main class="flex flex-col justify-center items-center gap-16">
    <header class="text-center">
      <h1 class="text-4xl">Central de Ajuda</h1>
      <span class="h-2 w-8 bg-gray-200"></span>
    </header>

    <section class="flex flex-col gap-4">
      <button
        class="group bg-pink-500 text-white flex items-center justify-center rounded-sm w-full pt-3 pb-3 pl-12 pr-12 gap-2 border-2 border-transparent hover:bg-white hover:border-2 hover:border-pink-600 hover:text-pink-600 cursor-pointer text-center outline-none transition-all duration-200 ">
        <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
          className="size-6">
          <path fillRule="evenodd"
            d="M16.5 3.75a1.5 1.5 0 0 1 1.5 1.5v13.5a1.5 1.5 0 0 1-1.5 1.5h-6a1.5 1.5 0 0 1-1.5-1.5V15a.75.75 0 0 0-1.5 0v3.75a3 3 0 0 0 3 3h6a3 3 0 0 0 3-3V5.25a3 3 0 0 0-3-3h-6a3 3 0 0 0-3 3V9A.75.75 0 1 0 9 9V5.25a1.5 1.5 0 0 1 1.5-1.5h6ZM5.78 8.47a.75.75 0 0 0-1.06 0l-3 3a.75.75 0 0 0 0 1.06l3 3a.75.75 0 0 0 1.06-1.06l-1.72-1.72H15a.75.75 0 0 0 0-1.5H4.06l1.72-1.72a.75.75 0 0 0 0-1.06Z"
            clipRule="evenodd" />
        </svg>
        <span>Como Acessar Minha Conta?</span>
      </button>

      <button
        class="group bg-pink-500 text-white flex items-center justify-center rounded-sm w-full pt-3 pb-3 pl-12 pr-12 gap-2 border-2 border-transparent hover:bg-white hover:border-2 hover:border-pink-600 hover:text-pink-600 cursor-pointer text-center outline-none transition-all duration-200 ">
        <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
          className="size-6">
          <path fillRule="evenodd"
            d="M16.5 3.75a1.5 1.5 0 0 1 1.5 1.5v13.5a1.5 1.5 0 0 1-1.5 1.5h-6a1.5 1.5 0 0 1-1.5-1.5V15a.75.75 0 0 0-1.5 0v3.75a3 3 0 0 0 3 3h6a3 3 0 0 0 3-3V5.25a3 3 0 0 0-3-3h-6a3 3 0 0 0-3 3V9A.75.75 0 1 0 9 9V5.25a1.5 1.5 0 0 1 1.5-1.5h6ZM5.78 8.47a.75.75 0 0 0-1.06 0l-3 3a.75.75 0 0 0 0 1.06l3 3a.75.75 0 0 0 1.06-1.06l-1.72-1.72H15a.75.75 0 0 0 0-1.5H4.06l1.72-1.72a.75.75 0 0 0 0-1.06Z"
            clipRule="evenodd" />
        </svg>
        <span>Como Posso me Cadastrar?</span>
      </button>

      <button
        class="group bg-pink-500 text-white flex items-center justify-center rounded-sm w-full pt-3 pb-3 pl-12 pr-12 gap-2 border-2 border-transparent hover:bg-white hover:border-2 hover:border-pink-600 hover:text-pink-600 cursor-pointer text-center outline-none transition-all duration-200 ">
        <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
          className="size-6">
          <path fillRule="evenodd"
            d="M16.5 3.75a1.5 1.5 0 0 1 1.5 1.5v13.5a1.5 1.5 0 0 1-1.5 1.5h-6a1.5 1.5 0 0 1-1.5-1.5V15a.75.75 0 0 0-1.5 0v3.75a3 3 0 0 0 3 3h6a3 3 0 0 0 3-3V5.25a3 3 0 0 0-3-3h-6a3 3 0 0 0-3 3V9A.75.75 0 1 0 9 9V5.25a1.5 1.5 0 0 1 1.5-1.5h6ZM5.78 8.47a.75.75 0 0 0-1.06 0l-3 3a.75.75 0 0 0 0 1.06l3 3a.75.75 0 0 0 1.06-1.06l-1.72-1.72H15a.75.75 0 0 0 0-1.5H4.06l1.72-1.72a.75.75 0 0 0 0-1.06Z"
            clipRule="evenodd" />
        </svg>
        <span>Como Recuperar Minha Conta?</span>
      </button>
    </section>

    <section class="flex flex-col flex-1 gap-2">
      <div class="flex gap-4 items-center mb-4 justify-center text-center">
        <span class="h-0.5 w-24 bg-gray-300"></span>
        <h2 class="text-2xl text-gray-400">Suporte</h2>
        <span class="h-0.5 w-24 bg-gray-300"></span>
      </div>

      <button
        class="group bg-orange-500 text-white flex items-center justify-center rounded-sm w-full pt-3 pb-3 gap-2 border-2 border-transparent hover:bg-white hover:border-2 hover:border-orange-600 hover:text-orange-600 cursor-pointer text-center outline-none transition-all duration-200 ">
        <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
          className="size-6">
          <path fillRule="evenodd"
            d="M16.5 3.75a1.5 1.5 0 0 1 1.5 1.5v13.5a1.5 1.5 0 0 1-1.5 1.5h-6a1.5 1.5 0 0 1-1.5-1.5V15a.75.75 0 0 0-1.5 0v3.75a3 3 0 0 0 3 3h6a3 3 0 0 0 3-3V5.25a3 3 0 0 0-3-3h-6a3 3 0 0 0-3 3V9A.75.75 0 1 0 9 9V5.25a1.5 1.5 0 0 1 1.5-1.5h6ZM5.78 8.47a.75.75 0 0 0-1.06 0l-3 3a.75.75 0 0 0 0 1.06l3 3a.75.75 0 0 0 1.06-1.06l-1.72-1.72H15a.75.75 0 0 0 0-1.5H4.06l1.72-1.72a.75.75 0 0 0 0-1.06Z"
            clipRule="evenodd" />
        </svg>
        <span>Termos de Serviço?</span>
      </button>

      <span class="h-0.5 w-full mt-12 mb-12 bg-gray-300"></span>

      <p class="flex text-lg  text-center gap-2 items-center justify-center">
        Já Tem uma Conta?
        <a href="" class="text-blue-500 hover:decoration-blue-500 hover:underline">
          Login
        </a>
      </p>
    </section>
  </main>
@endsection