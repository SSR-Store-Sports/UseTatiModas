@php $toastType = session('success') ? 'success' : (session('error') ? 'error' : null); @endphp

@if($toastType)
@php $message = session($toastType); @endphp
<div
    id="toast"
    role="alert"
    class="fixed bottom-4 right-4 z-50 flex w-full max-w-sm items-start gap-3 rounded-lg border border-gray-200 bg-white p-4 shadow-lg animate-slide-in transition-all duration-300"
>
    {{-- lateral colorida --}}
    <span class="mt-0.5 shrink-0 w-1 self-stretch rounded-full {{ $toastType === 'success' ? 'bg-green-500' : 'bg-red-500' }}"></span>

    {{-- ícone --}}
    @if($toastType === 'success')
        <div class="flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-green-100 mt-0.5">
            <svg class="h-3 w-3 text-green-600" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
            </svg>
        </div>
    @else
        <div class="flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-red-100 mt-0.5">
            <svg class="h-3 w-3 text-red-600" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </div>
    @endif

    {{-- conteúdo --}}
    <div class="flex-1 pt-0.5">
        <p class="text-sm font-semibold text-gray-900">{{ $toastType === 'success' ? 'Sucesso' : 'Erro' }}</p>
        <p class="mt-0.5 text-sm text-gray-500">{{ $message }}</p>
    </div>

    {{-- fechar --}}
    <button
        type="button"
        onclick="dismissToast()"
        class="shrink-0 rounded-md p-1 text-gray-400 hover:text-gray-600 hover:bg-gray-100 transition-colors"
    >
        <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
        </svg>
    </button>
</div>

<script>
    function dismissToast() {
        const toast = document.getElementById('toast');
        if (!toast) return;
        toast.style.opacity = '0';
        toast.style.transform = 'translateX(calc(100% + 1rem))';
        setTimeout(() => toast.remove(), 300);
    }

    setTimeout(dismissToast, 4000);
</script>
@endif
