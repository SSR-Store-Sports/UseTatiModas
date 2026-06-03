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

                <a href="#"
                    class="flex items-center justify-between px-3 md:px-4 py-2.5 md:py-3 rounded-xl border border-gray-200 text-xs md:text-sm text-gray-700 hover:bg-gray-50 hover:text-gold-dark transition-all duration-200">
                    <span>@lang('my_address')</span>
                    <x-heroicon-o-chevron-right class="w-4 h-4" />
                </a>

                <a href="/orders"
                    class="flex items-center justify-between px-3 md:px-4 py-2.5 md:py-3 rounded-xl border border-gray-200 text-xs md:text-sm text-gray-700 hover:bg-gray-50 hover:text-gold-dark transition-all duration-200">
                    <span>@lang('my_orders')</span>
                    <x-heroicon-o-chevron-right class="w-4 h-4" />
                </a>
            </div>
        </aside>
        <section class="flex-1 bg-white shadow-md p-4 md:p-6 lg:p-8 rounded-2xl shadow-xl/30">
            <h1 class="font-semibold text-lg md:text-xl lg:text-2xl mb-4 md:mb-6">@lang('my_profile')</h1>
            <div class="flex flex-col gap-4 md:gap-6">
                <div class="flex flex-col gap-2">
                    <span class="text-xs md:text-sm font-medium text-gray-700">@lang('name')</span>
                    <input class="input-default text-sm md:text-base" type="text" value="{{ $user->name }}" disabled />
                    <span class="text-xs md:text-sm text-gray-500">
                        @lang('username_change_once')
                    </span>
                </div>

                <div class="flex flex-col gap-3 md:gap-4 text-xs md:text-sm">
                    <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-2 p-3 md:p-4 bg-gray-50 rounded-lg">
                        <span class="text-gray-600 font-medium">@lang('email_profile')</span>
                        <div class="flex flex-col sm:flex-row sm:items-center gap-2 sm:gap-3">
                            <span class="text-gray-900 break-all">{{ $user->email }}</span>
                            <a href="#" class="text-gold-dark hover:text-gold-medium hover:underline transition-colors text-xs sm:text-sm font-medium whitespace-nowrap">@lang('change')</a>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-2 p-3 md:p-4 bg-gray-50 rounded-lg">
                        <span class="text-gray-600 font-medium">@lang('phone_profile')</span>
                        <div class="flex flex-col sm:flex-row sm:items-center gap-2 sm:gap-3">
                            <span class="text-gray-900">{{ $user->phone ?? 'N/A' }}</span>
                            <a href="#" class="text-gold-dark hover:text-gold-medium hover:underline transition-colors text-xs sm:text-sm font-medium whitespace-nowrap">@lang('change')</a>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-2 p-3 md:p-4 bg-gray-50 rounded-lg">
                        <span class="text-gray-600 font-medium">@lang('cpf_profile')</span>
                        <div class="flex flex-col sm:flex-row sm:items-center gap-2 sm:gap-3">
                            <span class="text-gray-900">{{ $user->cpf ?? 'N/A' }}</span>
                            <a href="#" class="text-gold-dark hover:text-gold-medium hover:underline transition-colors text-xs sm:text-sm font-medium whitespace-nowrap">@lang('change')</a>
                        </div>
                    </div>
                </div>

                <div class="h-px bg-gray-200"></div>

                <div class="flex flex-col sm:flex-row gap-3 md:gap-4 mt-4 md:mt-6">
                    <button
                        class="group bg-white text-gray-900 flex items-center justify-center rounded-md w-full h-11 md:h-12 py-3 gap-2 border-2 border-gray-900 hover:bg-gray-900 hover:text-white cursor-pointer text-center outline-none transition-all duration-200 text-sm md:text-base font-medium">
                        <x-heroicon-o-pencil-square class="w-4 h-4" />
                        <span>@lang('update_information')</span>
                    </button>
                    <button
                        class="group bg-red-500 text-white flex items-center justify-center rounded-md w-full h-11 md:h-12 py-3 gap-2 border-2 border-transparent hover:bg-red-600 cursor-pointer text-center outline-none transition-all duration-200 text-sm md:text-base font-medium">
                        <x-heroicon-o-trash class="w-4 h-4" />
                        <span>@lang('delete_account')</span>
                    </button>
                </div>
            </div>
        </section>
        </div>
    </main>
@endsection
