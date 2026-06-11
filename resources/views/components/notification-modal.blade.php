<div id="modal-notifications" class="hidden fixed z-50 w-96">
    <!-- <div id="modal-notifications-arrow" class="absolute w-3 h-3 bg-white border-l border-t border-gray-200 rotate-45 -top-1.5"></div> -->
    <div class="bg-white rounded-xl shadow-2xl border border-gray-200 flex flex-col overflow-hidden">

        <div class="flex items-center justify-between px-5 py-4 border-b border-gray-100">
            <div class="flex items-center gap-2">
                <x-heroicon-o-bell class="w-5 h-5 text-gold-dark" />
                <span class="text-base font-semibold text-gray-900">@lang('notifications')</span>
            </div>
            <button type="button" onclick="closeNotificationsModal()"
                class="rounded-md p-1.5 text-gray-400 hover:text-gray-600 hover:bg-gray-100 transition-colors">
                <x-heroicon-o-x-mark class="w-5 h-5" />
            </button>
        </div>

        <div class="flex flex-col divide-y divide-gray-50 max-h-80 overflow-y-auto">
            @auth
                @forelse($userOrders as $order)
                    <a href="{{ route('orders.show', $order->id) }}" class="flex items-start gap-3 px-4 py-3 hover:bg-gray-50 transition-colors">
                        <div class="p-1.5 rounded-full shrink-0 mt-0.5
                            {{ $order->status === 'delivered' ? 'bg-green-100' : ($order->status === 'cancelled' ? 'bg-red-100' : 'bg-gold-soft/40') }}">
                            @if($order->status === 'delivered')
                                <x-heroicon-o-check-circle class="w-3.5 h-3.5 text-green-600" />
                            @elseif($order->status === 'cancelled')
                                <x-heroicon-o-x-circle class="w-3.5 h-3.5 text-red-500" />
                            @elseif($order->status === 'shipped')
                                <x-heroicon-o-truck class="w-3.5 h-3.5 text-gold-dark" />
                            @else
                                <x-heroicon-o-clock class="w-3.5 h-3.5 text-gold-dark" />
                            @endif
                        </div>
                        <div class="flex flex-col gap-0.5 flex-1">
                            <span class="text-xs font-semibold text-gray-900">@lang('order') #{{ $order->id }}</span>
                            <span class="text-xs text-gray-500">@lang($order->status ?? 'preparing') · R$ {{ number_format($order->total, 2, ',', '.') }}</span>
                            <span class="text-[10px] text-gray-400">{{ $order->created_at->diffForHumans() }}</span>
                        </div>
                        <span class="w-2 h-2 bg-gold-medium rounded-full shrink-0 mt-1"></span>
                    </a>
                @empty
                    <div class="flex flex-col items-center gap-2 px-4 py-6 text-center">
                        <x-heroicon-o-shopping-bag class="w-8 h-8 text-gray-300" />
                        <span class="text-xs text-gray-400">@lang('empty_cart')</span>
                    </div>
                @endforelse
            @endauth
        </div>

        <!-- <div class="px-4 py-2.5 border-t border-gray-100">
            <a href="#" class="text-xs text-gold-dark hover:text-gold-medium transition-colors font-medium">
                @lang('view_all')
            </a>
        </div> -->

    </div>
</div>

<script>
    function toggleNotifications() {
        const modal = document.getElementById('modal-notifications');
        if (modal.classList.contains('hidden')) {
            openNotificationsModal();
        } else {
            closeNotificationsModal();
        }
    }

    function openNotificationsModal() {
        const btn = document.querySelector('[onclick="toggleNotifications()"]');
        const modal = document.getElementById('modal-notifications');
        const rect = btn.getBoundingClientRect();

        modal.classList.remove('hidden');

        const modalWidth = 384;
        let left = rect.right - modalWidth;
        if (left < 8) left = 8;

        modal.style.top = (rect.bottom + 10) + 'px';
        modal.style.left = left + 'px';

        const arrow = document.getElementById('modal-notifications-arrow');
        arrow.style.right = (rect.right - left - 12) + 'px';
        arrow.style.left = 'auto';
    }

    function closeNotificationsModal() {
        document.getElementById('modal-notifications').classList.add('hidden');
    }

    document.addEventListener('click', function(e) {
        const modal = document.getElementById('modal-notifications');
        if (!modal || modal.classList.contains('hidden')) return;
        if (!modal.contains(e.target) && !e.target.closest('[onclick="toggleNotifications()"]')) {
            closeNotificationsModal();
        }
    });
</script>
