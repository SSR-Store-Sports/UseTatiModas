<head>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex h-screen">
  <img class="h-full w-full" src="{{ asset('assets/model_login.png') }}"
    alt="Imagem de uma mulher com o cabelo castanho em pé em uma loja, segurando uma bolsa em uma loja de roupas" />

  <main class="flex flex-col w-full items-center justify-center overflow-y-auto border-l-2 border-l-pink-500">
    <div class="flex flex-col gap-8 w-82">
      <div class="flex flex-col gap-4 text-center items-center justify-center">
        <h1 class="text-black text-4xl font-light">Efetuar Login</h1>
        <span class="bg-gray-300 h-0.5 w-32"></span>
      </div>

      <form action="/session" method="POST" class="flex flex-col w-full gap-8">
        @csrf

        <div class="flex flex-col gap-4">
          <div class="flex flex-col gap-2 flex-1">
            <span class="text-lg">E-mail</span>
            <input
              class="w-full px-4 py-3 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-pink-400 hover:bg-white focus:border-pink-500 focus:bg-white focus:shadow-[0_0_0_3px_rgba(236,72,153,0.15)]"
              type="email" name="email" id="email" placeholder="exemplo@email.com" />
          </div>

          <div class="flex flex-col gap-2 flex-1">
            <div class="flex justify-between">
              <span class="text-lg">Senha</span>
              <a href="/forget/password"
                class="transition-all duration-200 text-blue-600 hover:to-blue-700 hover:underline ">Esqueceu sua
                senha?</a>
            </div>

            <label 
              for="password"
              class="flex w-full px-4 py-3 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-pink-400 hover:bg-white focus:border-pink-500 focus:bg-white focus:shadow-[0_0_0_3px_rgba(236,72,153,0.15)] text-center justify-center align-center"
            >
              <input class="w-full outline-none" type="password" name="password" id="password" placeholder="Senha" />
              <img class="h-4 w-4" src="{{ asset('assets/eye_slash.png') }}" alt="Icon de olhos para senha." />
            </label>
          </div>
        </div>

        <button
          class="group bg-pink-500 text-white flex items-center justify-center rounded-sm w-full pt-3 pb-3 gap-2 border-2 border-transparent hover:bg-white hover:border-2 hover:border-pink-600 hover:text-pink-600 cursor-pointer text-center">
          <span>Entrar</span>
          <!-- <img class="h-4 w-4   group-hover:text-pink-600" src="{{ asset('assets/sign_in.png') }}"
            alt="Icon representando uma porta realizando uma analogia de entrada ou acessando a aplicação" /> -->
          <svg 
            class="h-4 w-4" 
            xmlns="http://www.w3.org/2000/svg" 
            viewBox="0 0 24 24" 
            fill="currentColor"
            className="size-6">
            <path 
              fillRule="evenodd"
              d="M16.5 3.75a1.5 1.5 0 0 1 1.5 1.5v13.5a1.5 1.5 0 0 1-1.5 1.5h-6a1.5 1.5 0 0 1-1.5-1.5V15a.75.75 0 0 0-1.5 0v3.75a3 3 0 0 0 3 3h6a3 3 0 0 0 3-3V5.25a3 3 0 0 0-3-3h-6a3 3 0 0 0-3 3V9A.75.75 0 1 0 9 9V5.25a1.5 1.5 0 0 1 1.5-1.5h6ZM5.78 8.47a.75.75 0 0 0-1.06 0l-3 3a.75.75 0 0 0 0 1.06l3 3a.75.75 0 0 0 1.06-1.06l-1.72-1.72H15a.75.75 0 0 0 0-1.5H4.06l1.72-1.72a.75.75 0 0 0 0-1.06Z"
              clipRule="evenodd" 
            />
          </svg>

        </button>
      </form>

      <span class="bg-gray-300 h-0.5 w-82"></span>

      <section class="flex flex-col gap-8 items-center justify-center">
        <p>Não tem uma conta?  
          <a href="/register" class="text-blue-600 hover:underline">
            Cadastre-se
          </a>
        </p>

        <div class="flex flex-col gap-2 items-center justify-center">
          <img class="h-4 w-4" src="{{ asset('assets/help_me.png') }}"
            alt="sinal de interrogação para direcionar a tela de ajuda" />
          <a href="/help">Ajuda</a>
        </div>
      </section>
    </div>
  </main>
</body>