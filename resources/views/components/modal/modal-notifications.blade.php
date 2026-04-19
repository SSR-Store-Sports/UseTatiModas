<div class="fixed inset-0 flex items-center justify-center backdrop-blur-sm z-50 p-4">
    <div class="bg-white rounded-lg shadow-xl w-full max-w-sm border border-gray-200">
        <header class="flex justify-between items-center p-4 border-b border-gray-100">
            <h2 class="text-lg font-bold text-gray-800">@lang('notifications')</h2>
            <button class="text-gray-400 hover:text-gray-600 transition-colors">
                <x-heroicon-o-x-mark class="w-6 h-6" />
            </button>
        </header>

        <main class="max-h-96 overflow-y-auto">
            <div class="p-4 border-b border-gray-50 hover:bg-gray-50 transition-colors cursor-pointer">
                <p class="text-sm font-semibold text-gray-800">@lang('order_sent')</p>
                <p class="text-xs text-gray-500 mt-1">@lang('order_message', ['order' => 'PED000013'])</p>
                <span class="text-[10px] text-pink-500 font-bold mt-2 block">@lang('hours_ago', ['time' => 2])</span>
            </div>
            <div class="p-4 border-b border-gray-50 hover:bg-gray-50 transition-colors cursor-pointer">
                <p class="text-sm font-semibold text-gray-800">@lang('promotion')</p>
                <p class="text-xs text-gray-500 mt-1">@lang('promotion_message')</p>
                <span class="text-[10px] text-pink-500 font-bold mt-2 block">@lang('days_ago', ['time' => 1])</span>
            </div>
        </main>

        <footer class="p-4 border-t border-gray-100 text-center">
            <a href="#" class="text-sm text-pink-600 hover:text-pink-700 font-semibold underline">@lang('view_all')</a>
        </footer>
    </div>
</div>