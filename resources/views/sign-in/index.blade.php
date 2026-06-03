@extends('_layouts.auth')

@section('title', __('login_title'))

@section('content')
  <main class="flex flex-col w-full items-center overflow-y-auto px-4 py-6 md:py-8 md:border-l-2 md:border-l-gold-medium ">
    <div class="flex flex-col gap-4 lg:gap-6 w-full max-w-md items-center my-auto">
      <div class="flex flex-col gap-3 text-center items-center justify-center">
        <h1 class="text-black text-2xl md:text-3xl lg:text-4xl font-light">@lang('login_title')</h1>
        <span class="bg-gray-300 h-0.5 w-32"></span>
      </div>

      <!-- <form action={{ route('sign-in') }} method="POST" class="flex flex-col w-full gap-5 md:gap-6">
        @csrf

        <div class="flex flex-col gap-4">
          <div class="flex flex-col gap-2 flex-1">
            <span class="text-sm md:text-base">@lang('email')</span>
            <input
              class="w-full px-4 py-2.5 md:py-3 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-gold-light hover:bg-white focus:border-gold-medium focus:bg-white focus:shadow-[0_0_0_3px_rgba(199,155,43,0.15)]"
              type="email" name="email" value="{{ old('email') }}" id="email" placeholder="exemplo@email.com" />
              @error('email')
                <span class="text-red-500 text-xs md:text-sm">{{ $message }}</span>
              @enderror
          </div>

          <div class="flex flex-col gap-2 flex-1">
            <div class="flex justify-between flex-wrap gap-2">
              <span class="text-sm md:text-base">@lang('password')</span>
              <a href="/reset-shipping"
                class="transition-all duration-200 text-blue-600 hover:to-blue-700 hover:underline text-xs md:text-sm">@lang('forgot_password')</a>
            </div>

            <label for="password"
              class="flex w-full px-4 py-2.5 md:py-3 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-gold-light hover:bg-white focus-within:border-gold-medium focus-within:bg-white focus-within:shadow-[0_0_0_3px_rgba(199,155,43,0.15)] text-center justify-center align-center">
              <input class="w-full outline-none bg-transparent" type="password" name="password" id="password" placeholder="@lang('password')" />
              <img class="h-4 w-4 shrink-0" src="{{ asset('assets/eye_slash.png') }}" alt="Icon de olhos para senha." />
            </label>
            @error('password')
              <span class="text-red-500 text-xs md:text-sm">{{ $message }}</span>
            @enderror
          </div>
          @if ($message = session()->get("message"))
            <div class="{{ str_starts_with($message, 'Conta ativada') ? 'text-green-600' : 'text-red-500' }} text-xs md:text-sm">{{ $message }}</div>
          @endif
        </div>

        <button
          class="group bg-gray-900 text-white flex items-center justify-center rounded-md w-full py-2.5 md:py-3 gap-2 border-2 border-transparent hover:bg-gold-medium cursor-pointer text-center outline-none transition-all duration-200 text-sm md:text-base font-medium">
          <span>@lang('enter')</span>
          <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
            className="size-6">
            <path fillRule="evenodd"
              d="M16.5 3.75a1.5 1.5 0 0 1 1.5 1.5v13.5a1.5 1.5 0 0 1-1.5 1.5h-6a1.5 1.5 0 0 1-1.5-1.5V15a.75.75 0 0 0-1.5 0v3.75a3 3 0 0 0 3 3h6a3 3 0 0 0 3-3V5.25a3 3 0 0 0-3-3h-6a3 3 0 0 0-3 3V9A.75.75 0 1 0 9 9V5.25a1.5 1.5 0 0 1 1.5-1.5h6ZM5.78 8.47a.75.75 0 0 0-1.06 0l-3 3a.75.75 0 0 0 0 1.06l3 3a.75.75 0 0 0 1.06-1.06l-1.72-1.72H15a.75.75 0 0 0 0-1.5H4.06l1.72-1.72a.75.75 0 0 0 0-1.06Z"
              clipRule="evenodd" />
          </svg>
        </button>
      </form> -->

      <span class="bg-gray-300 h-0.5 w-full max-w-xs"></span>

      {{-- Magic Link --}}
      <div class="w-full">
        <p class="text-xs text-center text-gray-500 mb-3">Acesse sem senha via e-mail:</p>
        <form action="{{ route('magic-link.send') }}" method="POST" class="flex flex-col gap-3">
          @csrf
          <input
            class="w-full px-4 py-2.5 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-gold-light focus:border-gold-medium focus:bg-white"
            type="email" name="email" placeholder="seu@email.com" required />
          @if(session('magic_error'))
            <span class="text-red-500 text-xs">{{ session('magic_error') }}</span>
          @endif
          <button type="submit"
            class="bg-gold-medium text-white flex items-center justify-center rounded-md w-full py-2.5 gap-2 border-2 border-transparent hover:bg-gold-dark cursor-pointer outline-none transition-all duration-200 text-sm font-medium">
            Enviar link de acesso
          </button>
        </form>

        @if(session('magic_link'))
          <div class="mt-4 p-4 bg-green-50 border border-green-200 rounded-md">
            <p class="text-xs text-green-700 font-semibold mb-2">✓ Link gerado! Copie e cole na URL:</p>
            <div class="flex items-center gap-2">
              <input id="magic-link-input" type="text" readonly value="{{ session('magic_link') }}"
                class="flex-1 text-xs px-2 py-1.5 border border-gray-300 rounded bg-white text-gray-700 outline-none" />
              <button onclick="copyMagicLink()" type="button"
                class="shrink-0 px-3 py-1.5 bg-gray-900 text-white text-xs rounded hover:bg-gold-medium transition-colors">
                Copiar
              </button>
            </div>
            <a href="{{ session('magic_link') }}"
              class="mt-2 block text-center text-xs text-gold-dark underline font-medium">
              Clique aqui para acessar diretamente
            </a>
          </div>
        @endif
      </div>

      <!-- <span class="bg-gray-300 h-0.5 w-full max-w-xs"></span> -->

      <section class="flex flex-col gap-4 md:gap-6 items-center justify-center">
        <p class="text-xs md:text-sm">@lang('no_account')
          <a href="/sign-up" class="text-blue-600 hover:underline font-medium">
            @lang('sign_up')
          </a>
        </p>

        <a href="/help">
          <div class="group flex flex-col gap-2 items-center justify-center align-center">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
              class="h-7 w-7 md:h-8 md:w-8 text-gray-900 group-hover:text-gold-medium transition-colors">
              <path fill-rule="evenodd"
                d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm11.378-3.917c-.89-.777-2.366-.777-3.255 0a.75.75 0 0 1-.988-1.129c1.454-1.272 3.776-1.272 5.23 0 1.513 1.324 1.513 3.518 0 4.842a3.75 3.75 0 0 1-.837.552c-.676.328-1.028.774-1.028 1.152v.75a.75.75 0 0 1-1.5 0v-.75c0-1.279 1.06-2.107 1.875-2.502.182-.088.351-.199.503-.331.83-.727.83-1.857 0-2.584ZM12 18a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                clip-rule="evenodd" />
            </svg>

            <span class="text-gray-900 text-sm md:text-base group-hover:text-gold-medium transition-colors">@lang('help')</span>
          </div>
        </a>
      </section>
    </div>
  </main>
<script>
function copyMagicLink() {
  const input = document.getElementById('magic-link-input');
  navigator.clipboard.writeText(input.value).then(() => alert('Link copiado!'));
}
</script>
@endsection

