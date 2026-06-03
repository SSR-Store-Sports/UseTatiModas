<header
    class="z-50 grid grid-cols-[auto_1fr_auto] gap-2 md:gap-8 items-center h-16 md:h-20 px-4 md:px-12 border-b-2 border-gold-light bg-white shrink-0">
    <a href="/" class="shrink-0">
        <img src="{{asset('assets/logo.png')}}" alt="UseTatiModas" class="h-10 w-10 md:h-14 md:w-14">
    </a>

    <div class="hidden md:flex flex-col gap-2 flex-1 items-center justify-center min-w-0">
        <form action="/search" method="GET" class="relative w-full max-w-md">
            <input
                class="w-full h-10 pl-4 pr-12 rounded-lg border border-gray-300 bg-white text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-gray-400 focus:border-gold-medium focus:ring-1 focus:ring-gold-medium/20"
                type="text" name="product" id="product" placeholder="@lang('search_placeholder')" />
            <button type="submit"
                class="absolute right-2 top-1/2 -translate-y-1/2 p-2 text-gold-dark hover:text-gold-medium transition-colors">
                <x-heroicon-o-magnifying-glass class="w-4 h-4" />
            </button>
        </form>
    </div>

    <nav class="flex gap-2 justify-center items-center shrink-0">
        <a href="/cart"
            class="bg-gold-medium text-white rounded-lg p-2 hover:bg-gold-dark transition-all duration-200">
            <x-heroicon-o-shopping-cart class="w-5 h-5" />
        </a>
    </nav>
</header>

