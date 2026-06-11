@extends('_layouts.auth')

@section('title', __('register_title'))

@section('content')
  <main class="flex flex-col w-full items-center overflow-y-auto px-4 py-6 md:py-8 md:border-l-2 md:border-l-gold-medium">
    <div class="flex flex-col gap-4 lg:gap-6 w-full max-w-md items-center my-auto">
      <div class="flex flex-col gap-3 text-center items-center justify-center">
        <h1 class="text-black text-2xl md:text-3xl lg:text-4xl font-light">@lang('register_title')</h1>
        <span class="bg-gray-300 h-0.5 w-32"></span>
        <div class="flex gap-2 mt-1">
          <span id="step-indicator-1" class="h-1.5 w-7 rounded-full bg-gold-medium transition-all"></span>
          <span id="step-indicator-2" class="h-1.5 w-7 rounded-full bg-gray-300 transition-all"></span>
        </div>
      </div>

      <form action="{{ route('sign-up') }}" method="POST" class="flex flex-col w-full gap-5 md:gap-6" id="register-form">
        @csrf

        <div id="step-1" class="flex flex-col gap-4">
          <div class="flex flex-col gap-2 flex-1">
            <span class="text-sm md:text-base">@lang('full_name')</span>
            <input
              class="w-full px-4 py-2.5 md:py-3 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-gold-light hover:bg-white focus:border-gold-medium focus:bg-white focus:shadow-[0_0_0_3px_rgba(199,155,43,0.15)]"
              type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Henrique Maximo Lima da Silva" required />
            @error('name')
              <span class="text-red-500 text-xs md:text-sm">{{ $message }}</span>
            @enderror
          </div>

          <div class="flex flex-col gap-2 flex-1">
            <span class="text-sm md:text-base">@lang('email')</span>
            <input
              class="w-full px-4 py-2.5 md:py-3 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-gold-light hover:bg-white focus:border-gold-medium focus:bg-white focus:shadow-[0_0_0_3px_rgba(199,155,43,0.15)]"
              type="email" name="email" id="email" value="{{ old('email') }}" placeholder="exemplo@email.com" required />
            @error('email')
              <span class="text-red-500 text-xs md:text-sm">{{ $message }}</span>
            @enderror
          </div>

          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div class="flex flex-col gap-2">
              <span class="text-sm md:text-base">@lang('phone')</span>
              <input
                class="w-full px-4 py-2.5 md:py-3 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-gold-light hover:bg-white focus:border-gold-medium focus:bg-white focus:shadow-[0_0_0_3px_rgba(199,155,43,0.15)]"
                type="tel" name="phone" id="phone" value="{{ old('phone') }}" placeholder="11 93435-3343" required />
              @error('phone')
                <span class="text-red-500 text-xs md:text-sm">{{ $message }}</span>
              @enderror
            </div>

            <div class="flex flex-col gap-2">
              <span class="text-sm md:text-base">@lang('cpf')</span>
              <input
                class="w-full px-4 py-2.5 md:py-3 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-gold-light hover:bg-white focus:border-gold-medium focus:bg-white focus:shadow-[0_0_0_3px_rgba(199,155,43,0.15)]"
                type="text" name="cpf" id="cpf" value="{{ old('cpf') }}" placeholder="137.203.132-82" required />
              @error('cpf')
                <span class="text-red-500 text-xs md:text-sm">{{ $message }}</span>
              @enderror
            </div>
          </div>

          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div class="flex flex-col gap-2">
              <span class="text-sm md:text-base">@lang('password')</span>
              <label for="password"
                class="flex w-full px-4 py-2.5 md:py-3 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-gold-light hover:bg-white focus-within:border-gold-medium focus-within:bg-white focus-within:shadow-[0_0_0_3px_rgba(199,155,43,0.15)]">
                <input class="w-full outline-none bg-transparent" type="password" name="password" id="password"
                  placeholder="@lang('password')" required />
                <img class="h-4 w-4 shrink-0" src="{{ asset('assets/eye_slash.png') }}" alt="Icon de olhos para senha." />
              </label>
              @error('password')
                <span class="text-red-500 text-xs md:text-sm">{{ $message }}</span>
              @enderror
            </div>

            <div class="flex flex-col gap-2">
              <span class="text-sm md:text-base">@lang('confirm_password')</span>
              <label for="password_confirmation"
                class="flex w-full px-4 py-2.5 md:py-3 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-gold-light hover:bg-white focus-within:border-gold-medium focus-within:bg-white focus-within:shadow-[0_0_0_3px_rgba(199,155,43,0.15)]">
                <input class="w-full outline-none bg-transparent" type="password" name="password_confirmation"
                  id="password_confirmation" placeholder="@lang('password')" required />
                <img class="h-4 w-4 shrink-0" src="{{ asset('assets/eye_slash.png') }}" alt="Icon de olhos para senha." />
              </label>
              @error('password_confirmation')
                <span class="text-red-500 text-xs md:text-sm">{{ $message }}</span>
              @enderror
            </div>
          </div>

          <button type="button" onclick="nextStep()"
            class="bg-gray-900 text-white flex items-center justify-center rounded-md w-full py-2.5 md:py-3 gap-2 border-2 border-transparent hover:bg-gold-medium cursor-pointer text-center outline-none transition-all duration-200 text-sm md:text-base font-medium">
            <span>@lang('next')</span>
            <x-heroicon-o-arrow-right class="h-4 w-4" />
          </button>
        </div>

        <div id="step-2" class="hidden flex-col gap-2.5">
          <div class="flex flex-col gap-1">
            <span class="text-xs md:text-sm">@lang('cep')</span>
            <input
              class="w-full px-3 py-2 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-gold-light hover:bg-white focus:border-gold-medium focus:bg-white focus:shadow-[0_0_0_3px_rgba(199,155,43,0.15)]"
              type="text" name="cep" id="cep" value="{{ old('cep') }}" placeholder="00000-000" />
            @error('cep')
              <span class="text-red-500 text-xs" data-field="cep">{{ $message }}</span>
            @enderror
          </div>

          <div class="flex flex-col gap-1">
            <span class="text-xs md:text-sm">@lang('street')</span>
            <input
              class="w-full px-3 py-2 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-gold-light hover:bg-white focus:border-gold-medium focus:bg-white focus:shadow-[0_0_0_3px_rgba(199,155,43,0.15)]"
              type="text" name="street" id="street" value="{{ old('street') }}" placeholder="Rua das Flores" />
            @error('street')
              <span class="text-red-500 text-xs" data-field="street">{{ $message }}</span>
            @enderror
          </div>

          <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5">
            <div class="flex flex-col gap-1">
              <span class="text-xs md:text-sm">@lang('number')</span>
              <input
                class="w-full px-3 py-2 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-gold-light hover:bg-white focus:border-gold-medium focus:bg-white focus:shadow-[0_0_0_3px_rgba(199,155,43,0.15)]"
                type="text" name="number" id="number" value="{{ old('number') }}" placeholder="123" />
              @error('number')
                <span class="text-red-500 text-xs" data-field="number">{{ $message }}</span>
              @enderror
            </div>

            <div class="flex flex-col gap-1">
              <span class="text-xs md:text-sm">@lang('complement')</span>
              <input
                class="w-full px-3 py-2 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-gold-light hover:bg-white focus:border-gold-medium focus:bg-white focus:shadow-[0_0_0_3px_rgba(199,155,43,0.15)]"
                type="text" name="complement" id="complement" value="{{ old('complement') }}" placeholder="Apto 101" />
            </div>
          </div>

          <div class="flex flex-col gap-1">
            <span class="text-xs md:text-sm">@lang('neighborhood')</span>
            <input
              class="w-full px-3 py-2 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-gold-light hover:bg-white focus:border-gold-medium focus:bg-white focus:shadow-[0_0_0_3px_rgba(199,155,43,0.15)]"
              type="text" name="neighborhood" id="neighborhood" value="{{ old('neighborhood') }}" placeholder="Centro" />
            @error('neighborhood')
              <span class="text-red-500 text-xs" data-field="neighborhood">{{ $message }}</span>
            @enderror
          </div>

          <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5">
            <div class="flex flex-col gap-1">
              <span class="text-xs md:text-sm">@lang('city')</span>
              <input
                class="w-full px-3 py-2 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-gold-light hover:bg-white focus:border-gold-medium focus:bg-white focus:shadow-[0_0_0_3px_rgba(199,155,43,0.15)]"
                type="text" name="city" id="city" value="{{ old('city') }}" placeholder="São Paulo" />
              @error('city')
                <span class="text-red-500 text-xs" data-field="city">{{ $message }}</span>
              @enderror
            </div>

            <div class="flex flex-col gap-1">
              <span class="text-xs md:text-sm">@lang('state')</span>
              <input
                class="w-full px-3 py-2 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-gold-light hover:bg-white focus:border-gold-medium focus:bg-white focus:shadow-[0_0_0_3px_rgba(199,155,43,0.15)]"
                type="text" name="state" id="state" value="{{ old('state') }}" placeholder="SP" maxlength="2" />
              @error('state')
                <span class="text-red-500 text-xs" data-field="state">{{ $message }}</span>
              @enderror
            </div>
          </div>

          @if ($message = session()->get("message"))
            <div class="text-red-500 text-xs">{{ $message }}</div>
          @endif

          <div class="flex flex-col sm:flex-row gap-2 mt-1">
            <button type="button" onclick="prevStep()"
              class="bg-white text-gray-900 flex items-center justify-center rounded-md w-full py-2 gap-2 border-2 border-gray-900 hover:bg-gray-900 hover:text-white cursor-pointer text-center outline-none transition-all duration-200 text-sm font-medium">
              <x-heroicon-o-arrow-left class="h-4 w-4" />
              <span>@lang('back')</span>
            </button>

            <button type="submit"
              class="bg-gray-900 text-white flex items-center justify-center rounded-md w-full py-2 gap-2 border-2 border-transparent hover:bg-gold-medium cursor-pointer text-center outline-none transition-all duration-200 text-sm font-medium">
              <span>@lang('finish_register')</span>
              <x-heroicon-o-check class="h-4 w-4" />
            </button>
          </div>
        </div>
      </form>

      <span class="bg-gray-300 h-0.5 w-full max-w-xs my-1.5"></span>

      <section class="flex flex-col gap-2 items-center justify-center pb-3">
        <p class="text-xs md:text-sm">@lang('already_have_account_short')
          <a href="/sign-in" class="text-blue-600 hover:underline font-medium">@lang('login')</a>
        </p>

        <a href="/help">
          <div class="group flex flex-col gap-1 items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
              class="h-6 w-6 text-gray-900 group-hover:text-gold-medium transition-colors">
              <path fill-rule="evenodd"
                d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm11.378-3.917c-.89-.777-2.366-.777-3.255 0a.75.75 0 0 1-.988-1.129c1.454-1.272 3.776-1.272 5.23 0 1.513 1.324 1.513 3.518 0 4.842a3.75 3.75 0 0 1-.837.552c-.676.328-1.028.774-1.028 1.152v.75a.75.75 0 0 1-1.5 0v-.75c0-1.279 1.06-2.107 1.875-2.502.182-.088.351-.199.503-.331.83-.727.83-1.857 0-2.584ZM12 18a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                clip-rule="evenodd" />
            </svg>
            <span class="text-gray-900 text-xs group-hover:text-gold-medium transition-colors">@lang('help')</span>
          </div>
        </a>
      </section>
    </div>
  </main>

  <script>
    const hasStep2Errors = !!document.querySelector('[data-field]');

    if (hasStep2Errors) {
      nextStep();
    }

    function nextStep() {
      document.getElementById('step-1').classList.add('hidden');
      document.getElementById('step-2').classList.remove('hidden');
      document.getElementById('step-2').classList.add('flex');
      document.getElementById('step-indicator-1').classList.remove('bg-gold-medium');
      document.getElementById('step-indicator-1').classList.add('bg-gray-300');
      document.getElementById('step-indicator-2').classList.remove('bg-gray-300');
      document.getElementById('step-indicator-2').classList.add('bg-gold-medium');
    }

    function prevStep() {
      document.getElementById('step-2').classList.add('hidden');
      document.getElementById('step-2').classList.remove('flex');
      document.getElementById('step-1').classList.remove('hidden');
      document.getElementById('step-indicator-2').classList.remove('bg-gold-medium');
      document.getElementById('step-indicator-2').classList.add('bg-gray-300');
      document.getElementById('step-indicator-1').classList.remove('bg-gray-300');
      document.getElementById('step-indicator-1').classList.add('bg-gold-medium');
    }
  </script>
@endsection
