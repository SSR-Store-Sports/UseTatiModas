import './bootstrap';

window.showToast = function(message, type = 'success') {
    const existing = document.getElementById('toast');
    if (existing) existing.remove();

    const isSuccess = type === 'success';
    const toast = document.createElement('div');
    toast.id = 'toast';
    toast.role = 'alert';
    toast.className = 'fixed bottom-4 right-4 z-50 flex w-full max-w-sm items-start gap-3 rounded-lg border border-gray-200 bg-white p-4 shadow-lg transition-all duration-300';
    toast.innerHTML = `
        <span class="mt-0.5 shrink-0 w-1 self-stretch rounded-full ${isSuccess ? 'bg-green-500' : 'bg-red-500'}"></span>
        <div class="flex h-5 w-5 shrink-0 items-center justify-center rounded-full ${isSuccess ? 'bg-green-100' : 'bg-red-100'} mt-0.5">
            <svg class="h-3 w-3 ${isSuccess ? 'text-green-600' : 'text-red-600'}" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="${isSuccess ? 'M5 13l4 4L19 7' : 'M6 18L18 6M6 6l12 12'}"/>
            </svg>
        </div>
        <div class="flex-1 pt-0.5">
            <p class="text-sm font-semibold text-gray-900">${isSuccess ? 'Sucesso' : 'Erro'}</p>
            <p class="mt-0.5 text-sm text-gray-500">${message}</p>
        </div>
        <button type="button" onclick="dismissToast()" class="shrink-0 rounded-md p-1 text-gray-400 hover:text-gray-600 hover:bg-gray-100 transition-colors">
            <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
    `;
    document.body.appendChild(toast);
    setTimeout(() => window.dismissToast(), 4000);
};
