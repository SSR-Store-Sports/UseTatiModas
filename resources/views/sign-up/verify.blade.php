@extends('_layouts.auth')

@section('title', 'Confirme seu e-mail')

@section('content')
  <main class="flex flex-col w-full items-center justify-center overflow-y-auto px-4 py-6 md:py-8 md:border-l-2 md:border-l-gold-medium">
    <div class="flex flex-col gap-6 w-full max-w-md items-center my-auto">

      <div class="flex flex-col gap-3 text-center items-center">
        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center">
          <x-heroicon-o-envelope class="w-8 h-8 text-green-600" />
        </div>
        <h1 class="text-2xl font-semibold text-gray-800">@lang('verify_email_title')</h1>
        <p class="text-sm text-gray-500">@lang('verify_email_subtitle')</p>
      </div>

      <div class="w-full bg-yellow-50 border border-yellow-200 rounded-lg p-4 flex flex-col gap-3">
        <p class="text-xs text-yellow-700 font-semibold">@lang('verify_link_label')</p>
        <div class="flex items-center gap-2">
          <input id="verify-link" type="text" readonly value="{{ $verifyLink }}"
            class="flex-1 text-xs px-3 py-2 border border-gray-300 rounded-md bg-white text-gray-700 outline-none" />
          <button type="button" onclick="copyLink()"
            class="shrink-0 px-3 py-2 bg-gray-900 text-white text-xs rounded-md hover:bg-gold-medium transition-colors">
            @lang('copy')
          </button>
        </div>
        <a href="{{ $verifyLink }}"
          class="text-center text-xs text-gold-dark underline font-medium hover:text-gold-medium">
          @lang('click_to_activate')
        </a>
      </div>

      <a href="{{ route('sign-in') }}" class="text-sm text-gray-500 hover:text-gray-700 transition-colors">
        @lang('back_to_login')
      </a>

    </div>
  </main>

  <script>
    function copyLink() {
      const input = document.getElementById('verify-link');
      navigator.clipboard.writeText(input.value).then(() => alert('Link copiado!'));
    }
  </script>
@endsection
