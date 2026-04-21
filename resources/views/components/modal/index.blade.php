<div class="fixed inset-0 flex items-center justify-center backdrop-blur-xs z-50">
  <div class="bg-white rounded-lg shadow-xl w-full max-w-md p-6">
    <header class="flex justify-between items-center mb-4">
      <h1 class="text-xl font-bold text-gray-800">@lang('delete_account_title')</h1>
      <button class="text-gray-400 hover:text-gray-600">
        <x-heroicon-o-x-mark class="w-6 h-6" />
      </button>
    </header>

    <main>
      <p class="text-gray-600 mb-6">
        @lang('delete_account_warning')
      </p>

      <div class="flex justify-end gap-4">
        <button
          class="group bg-pink-500 text-white flex items-center justify-center rounded-sm w-full pt-3 pb-3 gap-2 border-2 border-transparent hover:bg-white hover:border-2 hover:border-pink-600 hover:text-pink-600 cursor-pointer text-center outline-none transition-all duration-200">
          <span>@lang('delete')</span>
        </button>
        <button
          class="group bg-white text-pink-600 flex items-center justify-center rounded-sm w-full pt-3 pb-3 gap-2 border-2 border-pink-600 hover:bg-gray-100 hover:border-2 hover:border-pink-700 hover:text-pink-700 cursor-pointer text-center outline-none transition-all duration-200">
          <span>@lang('cancel')</span>
        </button>
      </div>
    </main>
  </div>
</div>