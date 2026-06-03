@extends('_layouts.auth')

@section('title', __('account_recovery'))

@section('content')
  <main class="flex flex-col w-full items-center justify-center overflow-y-auto px-4 py-6 md:py-8 md:border-l-2 md:border-l-gold-medium">
    <div class="flex flex-col gap-4 lg:gap-6 w-full max-w-md items-center my-auto">
      <div class="flex flex-col gap-3 text-center items-center justify-center">
        <h1 class="text-black text-2xl md:text-3xl lg:text-4xl font-light">@lang('account_recovery')</h1>
        <span class="bg-gray-300 h-0.5 w-32"></span>
      </div>

      <form action="{{ route('reset.send') }}" method="POST" class="flex flex-col w-full gap-5 md:gap-6">
        @csrf

        <div class="flex flex-col gap-2 flex-1">
          <span class="text-sm md:text-base">@lang('email')</span>
          <input
            class="w-full px-4 py-2.5 md:py-3 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-gold-light hover:bg-white focus:border-gold-medium focus:bg-white focus:shadow-[0_0_0_3px_rgba(199,155,43,0.15)]"
            type="email" name="email" id="email" placeholder="exemplo@email.com" required />
          @error('email')
            <span class="text-red-500 text-xs">{{ $message }}</span>
          @enderror
        </div>

        @if(session('message'))
          <span class="text-red-500 text-xs">{{ session('message') }}</span>
        @endif

        <button
          class="group bg-gray-900 text-white flex items-center justify-center rounded-md w-full py-2.5 md:py-3 gap-2 border-2 border-transparent hover:bg-gold-medium cursor-pointer text-center outline-none transition-all duration-200 text-sm md:text-base font-medium">
          <span>@lang('send')</span>
          <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
            <path fillRule="evenodd"
              d="M16.5 3.75a1.5 1.5 0 0 1 1.5 1.5v13.5a1.5 1.5 0 0 1-1.5 1.5h-6a1.5 1.5 0 0 1-1.5-1.5V15a.75.75 0 0 0-1.5 0v3.75a3 3 0 0 0 3 3h6a3 3 0 0 0 3-3V5.25a3 3 0 0 0-3-3h-6a3 3 0 0 0-3 3V9A.75.75 0 1 0 9 9V5.25a1.5 1.5 0 0 1 1.5-1.5h6ZM5.78 8.47a.75.75 0 0 0-1.06 0l-3 3a.75.75 0 0 0 0 1.06l3 3a.75.75 0 0 0 1.06-1.06l-1.72-1.72H15a.75.75 0 0 0 0-1.5H4.06l1.72-1.72a.75.75 0 0 0 0-1.06Z"
              clipRule="evenodd" />
          </svg>
        </button>
      </form>

      @if(session('reset_link'))
        <div class="w-full bg-yellow-50 border border-yellow-200 rounded-lg p-4 flex flex-col gap-3">
          <p class="text-xs text-yellow-700 font-semibold">🔗 Link de redefinição (exibido por falta de serviço de e-mail):</p>
          <div class="flex items-center gap-2">
            <input id="reset-link" type="text" readonly value="{{ session('reset_link') }}"
              class="flex-1 text-xs px-3 py-2 border border-gray-300 rounded-md bg-white text-gray-700 outline-none" />
            <button type="button" onclick="navigator.clipboard.writeText(document.getElementById('reset-link').value)"
              class="shrink-0 px-3 py-2 bg-gray-900 text-white text-xs rounded-md hover:bg-gold-medium transition-colors">
              Copiar
            </button>
          </div>
          <a href="{{ session('reset_link') }}" class="text-center text-xs text-gold-dark underline font-medium hover:text-gold-medium">
            Clique aqui para redefinir diretamente
          </a>
        </div>
      @endif

      <span class="bg-gray-300 h-0.5 w-full max-w-xs"></span>

      <section class="flex flex-col gap-4 md:gap-6 items-center justify-center">
        <p class="text-xs md:text-sm">@lang('already_have_account_short')
          <a href="/sign-in" class="text-blue-600 hover:underline font-medium">
            @lang('login')
          </a>
        </p>

        <a href="/help">
          <div class="group flex flex-col gap-2 items-center justify-center">
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
@endsection
