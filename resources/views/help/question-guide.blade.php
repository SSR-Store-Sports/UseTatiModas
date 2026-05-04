@extends('_layouts.help')

@section('title', __('how_access_account_title') . ' | ' . config('app.name'))

@section('content')
  <main class="flex flex-col items-center gap-6 px-4 md:px-8 py-8 md:py-12 max-w-4xl mx-auto">
    <header class="flex flex-col gap-3 items-center text-center">
      <h1 class="text-2xl md:text-3xl font-bold text-gray-800">@lang('how_access_account_title')</h1>
      <div class="flex items-center gap-2 text-xs md:text-sm text-gray-500">
        <span>11 de março de 2026</span>
        <span>·</span>
        <span>🧾</span>
      </div>
    </header>

    <section class="flex flex-col gap-4 w-full">
      <div class="flex flex-col gap-4 text-gray-700 text-sm md:text-base leading-relaxed bg-white rounded-lg shadow-sm shadow-pink-500/20 p-4 md:p-6 border border-gray-100">
        <p class="font-medium">@lang('follow_instructions')</p>
        <ol class="flex flex-col gap-3 list-none">
          <li class="flex items-start gap-3">
            <span class="flex items-center justify-center w-6 h-6 rounded-full bg-pink-500 text-white text-xs font-bold shrink-0 mt-0.5">1</span>
            <span>@lang('open_site')</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="flex items-center justify-center w-6 h-6 rounded-full bg-pink-500 text-white text-xs font-bold shrink-0 mt-0.5">2</span>
            <span>@lang('initial_screen')</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="flex items-center justify-center w-6 h-6 rounded-full bg-pink-500 text-white text-xs font-bold shrink-0 mt-0.5">3</span>
            <span>@lang('enter_credentials')</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="flex items-center justify-center w-6 h-6 rounded-full bg-pink-500 text-white text-xs font-bold shrink-0 mt-0.5">4</span>
            <span>@lang('click_access')</span>
          </li>
        </ol>
      </div>
    </section>

    <div class="flex items-center gap-3 w-full my-2">
      <span class="h-px flex-1 bg-gray-300"></span>
      <span class="text-xs text-gray-500 uppercase font-medium">Suporte</span>
      <span class="h-px flex-1 bg-gray-300"></span>
    </div>

    <section class="flex flex-col gap-3 w-full">
      <button class="group bg-linear-to-r from-orange-500 to-orange-600 text-white flex items-center justify-center rounded-lg w-full py-3.5 px-6 gap-2 border border-transparent hover:from-white hover:to-white hover:border-orange-600 hover:text-orange-600 hover:shadow-md cursor-pointer outline-none transition-all duration-200">
        <x-heroicon-o-document-text class="h-5 w-5 shrink-0" />
        <span class="text-sm md:text-base font-medium">@lang('terms_of_service')</span>
      </button>

      <div class="bg-white rounded-lg border border-gray-200 p-4 text-center">
        <p class="flex flex-col sm:flex-row text-sm text-gray-700 gap-1 items-center justify-center">
          <span>@lang('already_have_account')</span>
          <a href="/sign-in" class="text-pink-600 font-semibold hover:text-pink-700 hover:underline transition-colors">@lang('login')</a>
        </p>
      </div>
    </section>
  </main>
@endsection
