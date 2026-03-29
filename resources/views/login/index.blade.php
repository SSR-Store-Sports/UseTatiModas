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

      <form action="/session" method="POST" class="flex flex-col w-full gap-4">
        @csrf

        <div class="flex flex-col gap-4">
          <div class="flex flex-col gap-2 flex-1">
            <span class="text-2xl">E-mail</span>
            <input class="border-2 border-black rounded-sm pr-4 pl-4 pt-3 pb-3" type="email" name="email" id="email" placeholder="Henrrylimadasilva@gmail.com" />
          </div>

          <div class="flex flex-col gap-2 flex-1">
            <div class="flex justify-between">
              <span class="text-2xl">Senha</span>
              <a href="/forget/password">Esqueceu sua senha?</a>
            </div>

            <label for="password" class="flex border-2 border-black rounded-sm px-4 py-3 items-center gap-2">
              <input class="w-full outline-none" type="password" name="password" id="password" placeholder="Senha" />
              <img class="h-4 w-4" src="{{ asset('assets/eye_slash.png') }}" alt="Icon de olhos para senha." />
            </label>
          </div>
        </div>

        <button class="bg-pink-500 text-white flex items-center justify-center rounded-sm w-full pt-3 pb-3 gap-2">
          <span>Entrar</span>
          <img 
            class="h-4 w-4" 
            src="{{ asset('assets/sign_in.png') }}" 
            alt="Icon representando uma porta realizando uma analogia de entrada ou acessando a aplicação" />
        </button>
      </form>
      
      <span class="bg-gray-300 h-0.5 w-82"></span>

      <section class="flex flex-col gap-8 items-center justify-center">
        <p>Não tem uma conta? <a href="/register">Cadastre-se</a></p>

        <div class="flex flex-col gap-2 items-center justify-center">
          <img 
            class="h-4 w-4"
            src="{{ asset('assets/help_me.png') }}" 
            alt="sinal de interrogação para direcionar a tela de ajuda" 
          />
          <a href="/help">Ajuda</a>
        </div>
      </section>
    </div>
  </main>
</body>