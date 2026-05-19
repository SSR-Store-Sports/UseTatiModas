@extends('_layouts.help')

@section('title', __('help_center'))

@section('content')
  <main class="flex flex-col items-center gap-8 px-4 md:px-8 py-8 md:py-12 max-w-4xl mx-auto">
    <header class="flex flex-col gap-3 items-center text-center">
      <div class="p-3 bg-gray-100 rounded-full">
        <x-heroicon-o-question-mark-circle class="h-10 w-10 text-gold-dark" />
      </div>
      <h2 class="text-2xl md:text-3xl font-bold text-gray-800">Como podemos ajudar?</h2>
      <p class="text-sm text-gray-600 max-w-md">Encontre respostas para as perguntas mais frequentes</p>
    </header>

    <section class="flex flex-col gap-3 w-full">
      <h3 class="text-base md:text-lg font-semibold text-gray-700 px-2">Perguntas Frequentes</h3>
      
      <a href="/help-guide" class="group bg-white text-gray-800 flex items-center justify-between rounded-lg w-full py-3.5 px-4 gap-3 border border-gray-200 hover:border-gold-medium hover:shadow-md hover:shadow-gold-medium/10 cursor-pointer outline-none transition-all duration-200">
        <div class="flex items-center gap-3">
          <div class="p-2 bg-gray-100 rounded-lg group-hover:bg-gray-900 transition-colors shrink-0">
            <x-heroicon-o-user-circle class="h-5 w-5 text-gold-dark group-hover:text-white transition-colors" />
          </div>
          <span class="text-left text-sm md:text-base font-medium">@lang('how_access_account')</span>
        </div>
        <x-heroicon-o-chevron-right class="h-5 w-5 text-gray-400 group-hover:text-gold-dark transition-colors shrink-0" />
      </a>

      <a href="/help-guide" class="group bg-white text-gray-800 flex items-center justify-between rounded-lg w-full py-3.5 px-4 gap-3 border border-gray-200 hover:border-gold-medium hover:shadow-md hover:shadow-gold-medium/10 cursor-pointer outline-none transition-all duration-200">
        <div class="flex items-center gap-3">
          <div class="p-2 bg-gray-100 rounded-lg group-hover:bg-gray-900 transition-colors shrink-0">
            <x-heroicon-o-pencil-square class="h-5 w-5 text-gold-dark group-hover:text-white transition-colors" />
          </div>
          <span class="text-left text-sm md:text-base font-medium">@lang('how_register')</span>
        </div>
        <x-heroicon-o-chevron-right class="h-5 w-5 text-gray-400 group-hover:text-gold-dark transition-colors shrink-0" />
      </a>

      <a href="/help-guide" class="group bg-white text-gray-800 flex items-center justify-between rounded-lg w-full py-3.5 px-4 gap-3 border border-gray-200 hover:border-gold-medium hover:shadow-md hover:shadow-gold-medium/10 cursor-pointer outline-none transition-all duration-200">
        <div class="flex items-center gap-3">
          <div class="p-2 bg-gray-100 rounded-lg group-hover:bg-gray-900 transition-colors shrink-0">
            <x-heroicon-o-lock-closed class="h-5 w-5 text-gold-dark group-hover:text-white transition-colors" />
          </div>
          <span class="text-left text-sm md:text-base font-medium">@lang('how_recover_account')</span>
        </div>
        <x-heroicon-o-chevron-right class="h-5 w-5 text-gray-400 group-hover:text-gold-dark transition-colors shrink-0" />
      </a>
    </section>

    <div class="flex items-center gap-3 w-full my-2">
      <span class="h-px flex-1 bg-gray-300"></span>
      <span class="text-xs text-gray-500 uppercase font-medium">Suporte</span>
      <span class="h-px flex-1 bg-gray-300"></span>
    </div>

    <section class="flex flex-col gap-3 w-full">
      <button class="group bg-gray-900 text-white flex items-center justify-center rounded-lg w-full py-3.5 px-6 gap-2 border-2 border-transparent hover:bg-gold-medium cursor-pointer outline-none transition-all duration-200">
        <x-heroicon-o-document-text class="h-5 w-5 shrink-0" />
        <span class="text-sm md:text-base font-medium">@lang('terms_of_service')</span>
      </button>

      <div class="bg-white rounded-lg border border-gray-200 p-4 text-center">
        <p class="flex flex-col sm:flex-row text-sm text-gray-700 gap-1 items-center justify-center">
          <span>@lang('already_have_account')</span>
          <a href="/sign-in" class="text-gold-dark font-semibold hover:text-gold-dark hover:underline transition-colors">@lang('login')</a>
        </p>
      </div>
    </section>
  </main>
@endsection
