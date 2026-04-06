@extends('_layouts.help')

@section('title', 'COMO ACESSAR MINHA CONTA')

@section('content')
  <header>
    <a>Voltar</a>
  </header>

  <main>
    <header>
      <h1>COMO ACESSAR MINHA CONTA</h1>
      <h2>11 de março de 2026 · <span>🧾</span></h2>
    </header>

    <section>
      <p>
        Siga as instruções abaixo para entrar na sua conta:
        1 .Abra o aplicativo em seu dispositivo.
        2. Na tela inicial, toque no botão Entrar.
        3. Insira suas credenciais nos campos indicados: E-mail ou nome de usuário, Senha.
        4. Para finalizar, toque no botão Acessar.
      </p>
    </section>

    <section>
      <div>
        <span></span>
        <h2>Suporte</h2>
        <span></span>
      </div>

      <button
        class="group bg-pink-500 text-white flex items-center justify-center rounded-sm w-full pt-3 pb-3 gap-2 border-2 border-transparent hover:bg-white hover:border-2 hover:border-pink-600 hover:text-pink-600 cursor-pointer text-center outline-none transition-all duration-200 ">
        <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
          className="size-6">
          <path fillRule="evenodd"
            d="M16.5 3.75a1.5 1.5 0 0 1 1.5 1.5v13.5a1.5 1.5 0 0 1-1.5 1.5h-6a1.5 1.5 0 0 1-1.5-1.5V15a.75.75 0 0 0-1.5 0v3.75a3 3 0 0 0 3 3h6a3 3 0 0 0 3-3V5.25a3 3 0 0 0-3-3h-6a3 3 0 0 0-3 3V9A.75.75 0 1 0 9 9V5.25a1.5 1.5 0 0 1 1.5-1.5h6ZM5.78 8.47a.75.75 0 0 0-1.06 0l-3 3a.75.75 0 0 0 0 1.06l3 3a.75.75 0 0 0 1.06-1.06l-1.72-1.72H15a.75.75 0 0 0 0-1.5H4.06l1.72-1.72a.75.75 0 0 0 0-1.06Z"
            clipRule="evenodd" />
        </svg>
        <span>Termos de Serviço?</span>
      </button>
    </section>
  </main>
@endsection