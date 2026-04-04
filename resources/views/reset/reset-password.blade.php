<head>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex h-screen">
  <img class="h-full w-full" src="{{ asset('assets/model_login.png') }}"
    alt="Imagem de uma mulher com o cabelo castanho em pé em uma loja, segurando uma bolsa em uma loja de roupas" />

  <main class="flex flex-col w-full items-center justify-center overflow-y-auto border-l-2 border-l-pink-500">
    <div class="flex flex-col gap-4 lg:gap-8 w-118 items-center">
      <div class="flex flex-col gap-4 text-center items-center justify-center">
        <h1 class="text-black text-4xl font-light">Efetuar Troca de Senha</h1>
        <span class="bg-gray-300 h-0.5 w-32"></span>
      </div>

      <form action="/session" method="POST" class="flex flex-col w-full gap-8">
        @csrf

        <div class="flex flex-col gap-2 flex-1">
          <span class="text-lg">Senha</span>

          <label for="password"
            class="flex w-full px-4 py-3 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-pink-400 hover:bg-white focus:border-pink-500 focus:bg-white focus:shadow-[0_0_0_3px_rgba(236,72,153,0.15)] text-center justify-center align-center">
            <input class="w-full outline-none" type="password" name="password" id="password" placeholder="..." />
            <img class="h-4 w-4" src="{{ asset('assets/eye_slash.png') }}" alt="Icon de olhos para senha." />
          </label>
        </div>

        <div class="flex flex-col gap-2 flex-1">
          <span class="text-lg">Confirme sua senha</span>

          <label for="password"
            class="flex w-full px-4 py-3 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-pink-400 hover:bg-white focus:border-pink-500 focus:bg-white focus:shadow-[0_0_0_3px_rgba(236,72,153,0.15)] text-center justify-center align-center">
            <input class="w-full outline-none" type="password" name="password" id="password" placeholder="..." />
            <img class="h-4 w-4" src="{{ asset('assets/eye_slash.png') }}" alt="Icon de olhos para senha." />
          </label>
        </div>

        <button
          class="group bg-pink-500 text-white flex items-center justify-center rounded-sm w-full pt-3 pb-3 gap-2 border-2 border-transparent hover:bg-white hover:border-2 hover:border-pink-600 hover:text-pink-600 cursor-pointer text-center outline-none transition-all duration-200 ">
          <span>Confirmar</span>
          <!-- <img class="h-4 w-4   group-hover:text-pink-600" src="{{ asset('assets/sign_in.png') }}"
            alt="Icon representando uma porta realizando uma analogia de entrada ou acessando a aplicação" /> -->
          <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
            className="size-6">
            <path fillRule="evenodd"
              d="M16.5 3.75a1.5 1.5 0 0 1 1.5 1.5v13.5a1.5 1.5 0 0 1-1.5 1.5h-6a1.5 1.5 0 0 1-1.5-1.5V15a.75.75 0 0 0-1.5 0v3.75a3 3 0 0 0 3 3h6a3 3 0 0 0 3-3V5.25a3 3 0 0 0-3-3h-6a3 3 0 0 0-3 3V9A.75.75 0 1 0 9 9V5.25a1.5 1.5 0 0 1 1.5-1.5h6ZM5.78 8.47a.75.75 0 0 0-1.06 0l-3 3a.75.75 0 0 0 0 1.06l3 3a.75.75 0 0 0 1.06-1.06l-1.72-1.72H15a.75.75 0 0 0 0-1.5H4.06l1.72-1.72a.75.75 0 0 0 0-1.06Z"
              clipRule="evenodd" />
          </svg>

        </button>
      </form>

      <span class="bg-gray-300 h-0.5 w-82"></span>

      <section class="flex flex-col gap-8 items-center justify-center">
        <p>Já tem uma Conta?
          <a href="/login" class="text-blue-600 hover:underline">
            Login
          </a>
        </p>

        <a href="/help">
          <div class="group flex flex-col gap-2 items-center justify-center align-center">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
              class="h-8 w-8 text-pink-400 group-hover:text-pink-600">
              <path fill-rule="evenodd"
                d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm11.378-3.917c-.89-.777-2.366-.777-3.255 0a.75.75 0 0 1-.988-1.129c1.454-1.272 3.776-1.272 5.23 0 1.513 1.324 1.513 3.518 0 4.842a3.75 3.75 0 0 1-.837.552c-.676.328-1.028.774-1.028 1.152v.75a.75.75 0 0 1-1.5 0v-.75c0-1.279 1.06-2.107 1.875-2.502.182-.088.351-.199.503-.331.83-.727.83-1.857 0-2.584ZM12 18a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                clip-rule="evenodd" />
            </svg>

            <span class="text-pink-400 text-lg group-hover:text-pink-600">Ajuda</span>
          </div>
        </a>
      </section>
    </div>
  </main>
</body>