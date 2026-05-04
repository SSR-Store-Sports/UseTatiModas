<header class="z-50 grid grid-cols-[auto_1fr_auto] gap-2 md:gap-8 items-center h-auto md:h-28 px-4 md:px-18 py-4 md:py-0 shadow-[0_0_10px_10px_rgba(236,72,153,0.4)] overflow-x-hidden shrink-0">
    <a href="/" class="shrink-0">
        <img src="{{asset('assets/logo.png')}}" alt="" class="h-16 w-16 md:h-24 md:w-24">
    </a>

    <div class="flex flex-col gap-2 flex-1 items-center justify-center min-w-0">
        <input
            class="w-full max-w-xs md:max-w-md h-10 md:h-12 px-4 py-2 md:py-3 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-pink-400 hover:bg-white focus:border-pink-500 focus:bg-white focus:shadow-[0_0_0_3px_rgba(236,72,153,0.15)]"
            type="email" name="email" id="email" placeholder="Procure aqui..." />
    </div>

    <nav class="flex gap-2 justify-center items-center shrink-0">
        <a href="/cart"
            class="bg-pink-600 text-white rounded-sm p-2 border-2 border-pink-600 hover:bg-white hover:border-pink-600 hover:border-2 hover:text-pink-600 transition-all duration-200">
            <x-heroicon-o-shopping-cart class="w-5 h-5 md:w-6 md:h-6" />
        </a>
    </nav>
</header>