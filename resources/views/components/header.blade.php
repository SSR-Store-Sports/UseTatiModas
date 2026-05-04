<header class="bg-white shadow-lg shadow-pink-500/20 sticky top-0 z-50">
    <div class="px-4 md:px-8 lg:px-16 py-3 md:py-4">
        <div class="hidden md:grid md:grid-cols-[auto_1fr_auto] gap-6 items-center">
            <a href="/" class="shrink-0">
                <img src="{{asset('assets/logo.png')}}" alt="UseTatiModas" class="h-16 w-16 lg:h-20 lg:w-20 hover:scale-105 transition-transform duration-200">
            </a>

            <div class="flex flex-col gap-3 max-w-3xl mx-auto w-full">
                <form action="/search" method="GET" class="relative">
                    <input
                        class="w-full h-11 pl-4 pr-12 rounded-lg border-2 border-gray-200 bg-white text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-pink-300 focus:border-pink-500 focus:ring-2 focus:ring-pink-200"
                        type="text" name="product" id="product" placeholder="@lang('search_placeholder')" />
                    <button type="submit" class="absolute right-2 top-1/2 -translate-y-1/2 p-2 text-pink-600 hover:text-pink-700 transition-colors">
                        <x-heroicon-o-magnifying-glass class="w-5 h-5" />
                    </button>
                </form>

                <div class="flex gap-2 items-center">
                    <select class="h-9 px-3 rounded-md border border-gray-200 bg-gray-50 text-gray-700 text-xs outline-none transition-all duration-200 hover:border-pink-300 focus:border-pink-500 focus:ring-2 focus:ring-pink-200 cursor-pointer">
                        <option value="">@lang('category')</option>
                        <option value="">Calças</option>
                        <option value="">Camisas</option>
                        <option value="">Croppeds</option>
                        <option value="">Shorts</option>
                        <option value="">Tênis</option>
                        <option value="">Saia</option>
                    </select>

                    <a href="/search" class="px-4 py-1.5 bg-pink-50 text-pink-600 text-xs font-medium rounded-md border border-pink-200 hover:bg-pink-600 hover:text-white transition-all duration-200">
                        @lang('best_sellers')
                    </a>
                </div>
            </div>

            <nav class="flex gap-2 shrink-0">
                <a href="/cart" class="relative p-2.5 bg-pink-600 text-white rounded-lg hover:bg-pink-700 transition-all duration-200 group" title="Carrinho">
                    <x-heroicon-o-shopping-cart class="w-5 h-5" />
                    <span class="absolute -top-1 -right-1 w-4 h-4 bg-pink-500 text-white text-[10px] font-bold rounded-full flex items-center justify-center">0</span>
                </a>
                <a href="" class="p-2.5 bg-pink-600 text-white rounded-lg hover:bg-pink-700 transition-all duration-200" title="Notificações">
                    <x-heroicon-o-bell class="w-5 h-5" />
                </a>
                <a href="/profile" class="p-2.5 bg-pink-600 text-white rounded-lg hover:bg-pink-700 transition-all duration-200" title="Configurações">
                    <x-heroicon-o-cog-8-tooth class="w-5 h-5" />
                </a>
                <a href="/sign-in" class="p-2.5 bg-pink-600 text-white rounded-lg hover:bg-pink-700 transition-all duration-200" title="Entrar">
                    <x-heroicon-o-arrow-right-end-on-rectangle class="w-5 h-5" />
                </a>
            </nav>
        </div>

        <div class="md:hidden">
            <div class="flex items-center justify-between mb-3">
                <a href="/" class="shrink-0">
                    <img src="{{asset('assets/logo.png')}}" alt="UseTatiModas" class="h-14 w-14">
                </a>

                <nav class="flex gap-2">
                    <a href="/cart" class="relative p-2 bg-pink-600 text-white rounded-lg" title="Carrinho">
                        <x-heroicon-o-shopping-cart class="w-5 h-5" />
                        <span class="absolute -top-1 -right-1 w-4 h-4 bg-red-500 text-white text-[10px] font-bold rounded-full flex items-center justify-center">0</span>
                    </a>
                    <a href="/sign-in" class="p-2 bg-pink-600 text-white rounded-lg" title="Entrar">
                        <x-heroicon-o-arrow-right-end-on-rectangle class="w-5 h-5" />
                    </a>
                </nav>
            </div>

            <form action="/search" method="GET" class="relative mb-2">
                <input
                    class="w-full h-10 pl-4 pr-12 rounded-lg border-2 border-gray-200 bg-white text-gray-800 placeholder-gray-400 text-sm outline-none focus:border-pink-500 focus:ring-2 focus:ring-pink-200"
                    type="text" name="product" id="product-mobile" placeholder="@lang('search_placeholder')" />
                <button type="submit" class="absolute right-2 top-1/2 -translate-y-1/2 p-2 text-pink-600">
                    <x-heroicon-o-magnifying-glass class="w-5 h-5" />
                </button>
            </form>

            <div class="flex gap-2">
                <select class="flex-1 h-9 px-3 rounded-md border border-gray-200 bg-gray-50 text-gray-700 text-xs outline-none focus:border-pink-500 focus:ring-2 focus:ring-pink-200">
                    <option value="">@lang('category')</option>
                    <option value="">Calças</option>
                    <option value="">Camisas</option>
                    <option value="">Croppeds</option>
                    <option value="">Shorts</option>
                    <option value="">Tênis</option>
                    <option value="">Saia</option>
                </select>
                <a href="/search" class="px-3 py-1.5 bg-pink-50 text-pink-600 text-xs font-medium rounded-md border border-pink-200 hover:bg-pink-600 hover:text-white transition-all duration-200 whitespace-nowrap">
                    @lang('best_sellers')
                </a>
            </div>
        </div>
    </div>
</header>