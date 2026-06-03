@extends('_layouts.app')

@section('content')
    <main class="flex flex-col lg:flex-row gap-4 md:gap-6 px-4 md:px-12 lg:px-24 py-6 md:py-12">
        <aside class="w-full lg:w-72 bg-white shadow-md p-4 md:p-5 rounded-2xl flex flex-col gap-4 md:gap-6 shadow-xl/30 shrink-0">

            <h1 class="font-semibold text-lg md:text-xl">@lang('user_information')</h1>

            <img src="{{ asset('assets/ft-user.jpg') }}" alt="Imagem de usuário"
                class="w-24 h-24 md:w-28 md:h-28 bg-gray-300 rounded-full mx-auto object-cover">

            <div class="flex flex-col items-center gap-2 text-xs md:text-sm text-gray-700">
                <p class="font-medium text-sm md:text-base text-gray-900">José Caique Alves da Silva</p>
                <p>jcaique@gmail.com</p>
                <p class="text-center">Av. Sen. Teotônio Vilela, 261</p>

                <div class="mt-2 px-3 py-2 rounded-xl bg-gray-50 border border-gray-200 text-xs text-gray-600">
                    @lang('joined_on') 02/03/2026
                </div>
            </div>
            <div class="flex flex-col gap-3">
                <h2 class="text-xs md:text-sm font-semibold text-gray-500">Minha Conta</h2>

                <a href="#"
                    class="flex items-center justify-between px-4 py-3 rounded-xl border border-gray-200 text-xs md:text-sm text-gray-700 hover:bg-gray-50 hover:text-gold-dark transition">
                    <span>@lang('my_address')</span>
                </a>

                <a href="/orders"
                    class="flex items-center justify-between px-4 py-3 rounded-xl border border-gray-200 text-xs md:text-sm text-gray-700 hover:bg-gray-50 hover:text-gold-dark transition">
                    <span>@lang('my_orders')</span>
                </a>
            </div>
        </aside>
        <section class="flex-1 bg-white shadow-md p-4 md:p-6 rounded-2xl shadow-xl/30">
            <h1 class="font-semibold text-xl md:text-2xl mb-4 md:mb-6">@lang('my_profile')</h1>
            <div class="flex flex-col gap-4 md:gap-6">
                <div class="flex flex-col gap-2">
                    <span class="text-xs md:text-sm font-medium text-gray-700">@lang('username')</span>
                    <input class="input-default text-sm" type="text" placeholder="@lang('placeholder_name')" disabled />
                    <span class="text-xs text-gray-500">
                        @lang('username_change_once')
                    </span>
                </div>
                <div class="flex flex-col gap-2">
                    <span class="text-xs md:text-sm font-medium text-gray-700">@lang('name')</span>
                    <input class="input-default text-sm" type="text" placeholder="@lang('placeholder_full_name')" disabled />
                </div>

                <div class="flex flex-col gap-3 text-xs md:text-sm">
                    <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-2">
                        <span class="text-gray-600">@lang('email_profile')</span>
                        <div class="flex items-center gap-3">
                            <span class="text-gray-900">@lang('placeholder_email')</span>
                            <a href="#" class="text-gold-dark hover:underline">@lang('change')</a>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-2">
                        <span class="text-gray-600">@lang('phone_profile')</span>
                        <div class="flex items-center gap-3">
                            <span class="text-gray-900">@lang('placeholder_phone')</span>
                            <a href="#" class="text-gold-dark hover:underline">@lang('change')</a>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-2">
                        <span class="text-gray-600">@lang('cpf_profile')</span>
                        <div class="flex items-center gap-3">
                            <span class="text-gray-900">@lang('placeholder_cpf')</span>
                            <a href="#" class="text-gold-dark hover:underline">@lang('change')</a>
                        </div>
                    </div>
                </div>

                <div class="h-px bg-gray-200"></div>

                <div class="flex flex-col sm:flex-row gap-3 md:gap-4 mt-auto">
                    <button
                        class="group bg-gray-500 text-white flex items-center justify-center rounded-md w-full py-3 gap-2 border-2 border-transparent hover:bg-white hover:border-gold-dark hover:text-gold-dark cursor-pointer text-center outline-none transition-all duration-200 text-sm md:text-base">
                        <span>@lang('delete_account')</span>
                    </button>
                    <button
                        class="group bg-white text-gold-dark flex items-center justify-center rounded-md w-full py-3 gap-2 border-2 border-gold-dark hover:bg-gray-100 hover:border-gold-dark hover:text-gold-dark cursor-pointer text-center outline-none transition-all duration-200 text-sm md:text-base">
                        <span>@lang('update_information')</span>
                    </button>
                </div>
            </div>
        </section>
    </main>
@endsection


