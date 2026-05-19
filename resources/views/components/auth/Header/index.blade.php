<header
    class="z-50 grid grid-cols-[auto_1fr_auto] gap-2 md:gap-8 items-center h-auto md:h-28 px-4 md:px-18 py-4 md:py-0 border-b-2 border-gold-light overflow-x-hidden shrink-0">
    <a href="/" class="shrink-0">
        <img src="{{asset('assets/logo.png')}}" alt="" class="h-16 w-16 md:h-24 md:w-24">
    </a>

    <div class="flex flex-col gap-2 flex-1 items-center justify-center min-w-0">
        <form action="/search" method="GET" class="relative">
            <input
                class="w-full h-11 pl-4 pr-12 rounded-lg border border-gray-300 bg-white text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-gray-400 focus:border-gold-medium focus:ring-1 focus:ring-gold-medium/20"
                type="text" name="product" id="product" placeholder="@lang('search_placeholder')" />
            <button type="submit"
                class="absolute right-2 top-1/2 -translate-y-1/2 p-2 text-[#7A5A12] hover:text-[#C79B2B] transition-colors">
                <x-heroicon-o-magnifying-glass class="w-5 h-5" />
            </button>
        </form>
    </div>

    <nav class="flex gap-2 justify-center items-center shrink-0">
        <a href="/cart"
            class="bg-[#C79B2B] text-white rounded-sm p-2 border-2 border-[#C79B2B]hover:bg-white hover:bg-[#7A5A12] hover:border-2 hover:text-white transition-all duration-200">
            <x-heroicon-o-shopping-cart class="w-5 h-5 md:w-6 md:h-6" />
        </a>
    </nav>
</header>