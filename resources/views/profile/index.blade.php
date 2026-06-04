@extends('_layouts.app')

@section('content')
<main class="px-4 md:px-12 lg:px-24 py-6 md:py-12">
    <div class="max-w-screen-2xl mx-auto flex flex-col lg:flex-row gap-4 md:gap-6">
        <aside class="w-full lg:w-72 bg-white shadow-md p-4 md:p-6 rounded-2xl flex flex-col gap-4 md:gap-6 shadow-xl/30 shrink-0">

            <h1 class="font-semibold text-lg md:text-xl">@lang('user_information')</h1>

            <div class="w-20 h-20 md:w-24 md:h-24 lg:w-28 lg:h-28 bg-gray-200 rounded-full mx-auto flex items-center justify-center">
                <x-heroicon-o-user class="w-10 h-10 md:w-12 md:h-12 lg:w-16 lg:h-16 text-gray-400" />
            </div>

            <div class="flex flex-col items-center gap-2 text-xs md:text-sm text-gray-700">
                <p class="font-medium text-sm md:text-base lg:text-lg text-gray-900 text-center px-2">{{ $user->name }}</p>
                <p class="text-center break-all px-2">{{ $user->email }}</p>
                @if($user->address)
                <p class="text-center px-2">{{ $user->address->street }}, {{ $user->address->number }}</p>
                @endif

                <div class="mt-2 px-3 py-1.5 md:py-2 rounded-xl bg-gray-50 border border-gray-200 text-xs md:text-sm text-gray-600">
                    @lang('joined_on') {{ $user->created_at->format('d/m/Y') }}
                </div>
            </div>
            <div class="flex flex-col gap-3">
                <h2 class="text-xs md:text-sm font-semibold text-gray-500 uppercase tracking-wide">Minha Conta</h2>

                <!-- <a href="#"
                    class="flex items-center justify-between px-3 md:px-4 py-2.5 md:py-3 rounded-xl border border-gray-200 text-xs md:text-sm text-gray-700 hover:bg-gray-50 hover:text-gold-dark transition-all duration-200">
                    <span>@lang('my_address')</span>
                    <x-heroicon-o-chevron-right class="w-4 h-4" />
                </a> -->

                <a href="/orders"
                    class="flex items-center justify-between px-3 md:px-4 py-2.5 md:py-3 rounded-xl border border-gray-200 text-xs md:text-sm text-gray-700 hover:bg-gray-50 hover:text-gold-dark transition-all duration-200">
                    <span>@lang('my_orders')</span>
                    <x-heroicon-o-chevron-right class="w-4 h-4" />
                </a>
            </div>
        </aside>

        <section class="flex-1 bg-white shadow-md p-4 md:p-6 lg:p-8 rounded-2xl shadow-xl/30">
            <h1 class="font-semibold text-lg md:text-xl lg:text-2xl mb-4 md:mb-6">@lang('my_profile')</h1>

            <form action="{{ route('profile.update') }}" method="POST">
                @csrf
                @method('PUT')

                <div class="flex flex-col gap-4 md:gap-6">
                    <div class="flex flex-col gap-2">
                        <span class="text-xs md:text-sm font-medium text-gray-700">@lang('name')</span>
                        <input class="px-4 py-2 rounded-md border border-gray-200 bg-gray-100 text-gray-500 text-sm outline-none" type="text" value="{{ $user->name }}" disabled />
                        <span class="text-xs md:text-sm text-gray-500">@lang('username_change_once')</span>
                    </div>

                    <div class="flex flex-col gap-3 md:gap-4 text-xs md:text-sm">

                        {{-- Email --}}
                        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-2 p-3 md:p-4 bg-gray-50 rounded-lg">
                            <span class="text-gray-600 font-medium">@lang('email_profile')</span>
                            <div class="flex flex-col sm:flex-row sm:items-center gap-2 sm:gap-3 w-full sm:w-auto">
                                <span id="email-display" class="text-gray-900 break-all">{{ $user->email }}</span>
                                <input id="email-input" type="email" name="email" value="{{ $user->email }}"
                                    class="hidden px-3 py-1.5 rounded-md border border-gray-300 text-gray-800 text-sm outline-none focus:border-gold-medium focus:ring-1 focus:ring-gold-medium/20 w-full sm:w-56">
                                <button type="button" onclick="toggleField('email')"
                                    class="text-gold-dark hover:text-gold-medium hover:underline transition-colors text-xs sm:text-sm font-medium whitespace-nowrap">@lang('change')</button>
                            </div>
                        </div>

                        {{-- Telefone --}}
                        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-2 p-3 md:p-4 bg-gray-50 rounded-lg">
                            <span class="text-gray-600 font-medium">@lang('phone_profile')</span>
                            <div class="flex flex-col sm:flex-row sm:items-center gap-2 sm:gap-3 w-full sm:w-auto">
                                <span id="phone-display" class="text-gray-900">{{ $user->phone ?? 'N/A' }}</span>
                                <input id="phone-input" type="text" name="phone" value="{{ $user->phone }}"
                                    class="hidden px-3 py-1.5 rounded-md border border-gray-300 text-gray-800 text-sm outline-none focus:border-gold-medium focus:ring-1 focus:ring-gold-medium/20 w-full sm:w-48">
                                <button type="button" onclick="toggleField('phone')"
                                    class="text-gold-dark hover:text-gold-medium hover:underline transition-colors text-xs sm:text-sm font-medium whitespace-nowrap">@lang('change')</button>
                            </div>
                        </div>

                        {{-- CPF (somente leitura) --}}
                        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-2 p-3 md:p-4 bg-gray-50 rounded-lg">
                            <span class="text-gray-600 font-medium">@lang('cpf_profile')</span>
                            <span class="text-gray-900">{{ $user->cpf ?? 'N/A' }}</span>
                        </div>
                    </div>

                    @if($errors->any())
                    <div class="text-red-500 text-xs flex flex-col gap-1">
                        @foreach($errors->all() as $error)
                        <span>{{ $error }}</span>
                        @endforeach
                    </div>
                    @endif

                    <div class="h-px bg-gray-200"></div>

                    <div class="flex flex-col sm:flex-row gap-3 md:gap-4">
                        <button type="submit"
                            class="group bg-white text-gray-900 flex items-center justify-center rounded-md w-full h-11 md:h-12 py-3 gap-2 border-2 border-gray-900 hover:bg-gray-900 hover:text-white cursor-pointer text-center outline-none transition-all duration-200 text-sm md:text-base font-medium">
                            <x-heroicon-o-pencil-square class="w-4 h-4" />
                            <span>@lang('update_information')</span>
                        </button>
                        <button type="button" onclick="document.getElementById('modal-delete').classList.remove('hidden')"
                            class="group bg-red-500 text-white flex items-center justify-center rounded-md w-full h-11 md:h-12 py-3 gap-2 border-2 border-transparent hover:bg-red-600 cursor-pointer text-center outline-none transition-all duration-200 text-sm md:text-base font-medium">
                            <x-heroicon-o-trash class="w-4 h-4" />
                            <span>@lang('delete_account')</span>
                        </button>
                    </div>
                </div>
            </form>
        </section>
    </div>
</main>

{{-- Modal de confirmação de exclusão --}}
<div id="modal-delete" class="hidden fixed inset-0 flex items-center justify-center backdrop-blur-sm bg-black/30 z-50 p-4">
    <div class="bg-white rounded-xl shadow-xl w-full max-w-md p-6 flex flex-col gap-4">
        <div class="flex items-center gap-3">
            <div class="p-2 bg-red-100 rounded-full">
                <x-heroicon-o-exclamation-triangle class="w-6 h-6 text-red-600" />
            </div>
            <h2 class="text-lg font-bold text-gray-800">@lang('delete_account_title')</h2>
        </div>

        <p class="text-sm text-gray-600">@lang('delete_account_warning')</p>

        <div class="flex gap-3 mt-2">
            <form action="{{ route('profile.destroy') }}" method="POST" class="w-full">
                @csrf
                @method('DELETE')
                <button type="submit"
                    class="w-full px-4 py-2.5 bg-red-500 text-white rounded-md hover:bg-red-600 transition-colors text-sm font-semibold">
                    @lang('delete')
                </button>
            </form>
            <button type="button" onclick="document.getElementById('modal-delete').classList.add('hidden')"
                class="w-full px-4 py-2.5 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300 transition-colors text-sm font-semibold">
                @lang('cancel')
            </button>
        </div>
    </div>
</div>

<script>
    function toggleField(field) {
        const display = document.getElementById(field + '-display');
        const input = document.getElementById(field + '-input');
        const isHidden = input.classList.contains('hidden');

        display.classList.toggle('hidden', isHidden);
        input.classList.toggle('hidden', !isHidden);

        if (isHidden) input.focus();
    }
</script>
@endsection