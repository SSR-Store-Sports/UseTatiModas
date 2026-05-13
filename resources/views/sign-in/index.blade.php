@extends('_layouts.auth')

@section('title', __('login_title'))

@section('content')
  <img class="hidden md:block h-full w-full object-cover" src="{{ asset('assets/model_login.png') }}"
    alt="Imagem de uma mulher com o cabelo castanho em pé em uma loja, segurando uma bolsa em uma loja de roupas" />

  <main class="flex flex-col w-full items-center justify-center overflow-y-auto border-l-0 md:border-l-2 border-l-[#C79B2B] px-4 py-8">
    <div class="flex flex-col gap-4 lg:gap-8 w-full max-w-md items-center">
      <div class="flex flex-col gap-4 text-center items-center justify-center">
        <h1 class="text-black text-2xl md:text-4xl font-light">@lang('login_title')</h1>
        <span class="bg-gray-300 h-0.5 w-32"></span>
      </div>

      <form action="/sign-in" method="POST" class="flex flex-col w-full gap-6 md:gap-8">
        @csrf

        <div class="flex flex-col gap-4">
          <div class="flex flex-col gap-2 flex-1">
            <span class="text-base md:text-lg">@lang('email')</span>
            <input
              class="w-full px-4 py-3 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-[#F1C24A] hover:bg-white focus:border-[#C79B2B] focus:bg-white focus:shadow-[0_0_0_3px_rgba(199,155,43,0.15)]"
              type="email" name="email" value="{{ old('email') }}" id="email" placeholder="exemplo@email.com" />
              @error('email')
                <span class="text-red-500 text-sm">{{ $message }}</span>
              @enderror
          </div>

          <div class="flex flex-col gap-2 flex-1">
            <div class="flex justify-between flex-wrap gap-2">
              <span class="text-base md:text-lg">@lang('password')</span>
              <a href="/reset-shipping"
                class="transition-all duration-200 text-blue-600 hover:to-blue-700 hover:underline text-sm">@lang('forgot_password')</a>
            </div>

            <label for="password"
              class="flex w-full px-4 py-3 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-[#F1C24A] hover:bg-white focus-within:border-[#C79B2B] focus-within:bg-white focus-within:shadow-[0_0_0_3px_rgba(199,155,43,0.15)] text-center justify-center align-center">
              <input class="w-full outline-none bg-transparent" type="password" name="password" id="password" placeholder="@lang('password')" />
              <img class="h-4 w-4 shrink-0" src="{{ asset('assets/eye_slash.png') }}" alt="Icon de olhos para senha." />
            </label>
            @error('password')
              <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
          </div>
          @if ($message = session()->get("message"))
            <div class="text-red-500 text-sm">{{ $message }}</div>
          @endif
        </div>

        <button
          class="group bg-gray-900 text-white flex items-center justify-center rounded-sm w-full pt-3 pb-3 gap-2 border-2 border-transparent hover:bg-[#C79B2B] cursor-pointer text-center outline-none transition-all duration-200">
          <span>@lang('enter')</span>
          <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
            className="size-6">
            <path fillRule="evenodd"
              d="M16.5 3.75a1.5 1.5 0 0 1 1.5 1.5v13.5a1.5 1.5 0 0 1-1.5 1.5h-6a1.5 1.5 0 0 1-1.5-1.5V15a.75.75 0 0 0-1.5 0v3.75a3 3 0 0 0 3 3h6a3 3 0 0 0 3-3V5.25a3 3 0 0 0-3-3h-6a3 3 0 0 0-3 3V9A.75.75 0 1 0 9 9V5.25a1.5 1.5 0 0 1 1.5-1.5h6ZM5.78 8.47a.75.75 0 0 0-1.06 0l-3 3a.75.75 0 0 0 0 1.06l3 3a.75.75 0 0 0 1.06-1.06l-1.72-1.72H15a.75.75 0 0 0 0-1.5H4.06l1.72-1.72a.75.75 0 0 0 0-1.06Z"
              clipRule="evenodd" />
          </svg>
        </button>
      </form>

      <span class="bg-gray-300 h-0.5 w-full max-w-xs"></span>

      <section class="flex flex-col gap-6 md:gap-8 items-center justify-center mb-8">
        <p class="text-sm md:text-base">@lang('no_account')
          <a href="/sign-up" class="text-blue-600 hover:underline">
            @lang('sign_up')
          </a>
        </p>

        <a href="/help">
          <div class="group flex flex-col gap-2 items-center justify-center align-center">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
              class="h-8 w-8 text-gray-900 group-hover:text-[#C79B2B]">
              <path fill-rule="evenodd"
                d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm11.378-3.917c-.89-.777-2.366-.777-3.255 0a.75.75 0 0 1-.988-1.129c1.454-1.272 3.776-1.272 5.23 0 1.513 1.324 1.513 3.518 0 4.842a3.75 3.75 0 0 1-.837.552c-.676.328-1.028.774-1.028 1.152v.75a.75.75 0 0 1-1.5 0v-.75c0-1.279 1.06-2.107 1.875-2.502.182-.088.351-.199.503-.331.83-.727.83-1.857 0-2.584ZM12 18a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                clip-rule="evenodd" />
            </svg>

            <span class="text-gray-900 text-base md:text-lg group-hover:text-[#C79B2B]">@lang('help')</span>
          </div>
        </a>
      </section>
    </div>
  </main>
@endsection