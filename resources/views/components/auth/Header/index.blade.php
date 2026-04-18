<header class="z-40 grid grid-cols-[auto_1fr_auto] gap-8 items-center h-28 px-18 shadow-[0_0_10px_10px_rgba(236,72,153,0.4)]">
    <a href="/">
        <img src="{{asset('assets/logo.png')}}" alt="" class="h-24 w-24">
    </a>

    <div class="flex flex-col gap-2 flex-1 items-center justify-center">
        <input
            class="w-64 h-12 px-4 py-3 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-pink-400 hover:bg-white focus:border-pink-500 focus:bg-white focus:shadow-[0_0_0_3px_rgba(236,72,153,0.15)]"
            type="email" name="email" id="email" placeholder="Procure aqui..." />

        <!-- <div class="flex gap-4 w-full items-center">
            <select class="h-8 px-4 rounded-md border border-gray-200 bg-gray-50 text-gray-800 text-sm outline-none transition-all duration-200 hover:border-pink-400 hover:bg-white focus:border-pink-500 focus:bg-white focus:shadow-[0_0_0_3px_rgba(236,72,153,0.15)] cursor-pointer">
                <option value="">Categoria</option>
                <option value="">Calças</option>
                <option value="">Camisas</option>
                <option value="">Croppeds</option>
                <option value="">Shorts</option>
                <option value="">Tênis</option>
                <option value="">Saia</option>
            </select>

            <button
                class="group bg-pink-500 text-white flex items-center justify-center rounded-sm w-38 h-4 pt-3 pb-3 gap-2 border-2 border-transparent hover:bg-white hover:border-2 hover:border-pink-600 hover:text-pink-600 cursor-pointer text-center outline-none transition-all duration-200 ">
                <span>Mais Vendidos</span>
            </button>
        </div> -->
    </div>

    <nav class="flex gap-2 justify-center items-center">
        <!-- <a href="" class="bg-pink-700 text-white rounded-sm px-2 py-1">
            <x-heroicon-o-user class="w-6 h-6" />
        </a> -->
        <a href="/cart"
            class="bg-pink-600 text-white rounded-sm px-2 py-1 border-2 border-pink-600 hover:bg-white hover:border-pink-600 hover:border-2 hover:text-pink-600">
            <x-heroicon-o-shopping-cart class="w-6 h-6" />
        </a>
        <!-- <a href=""
            class="bg-pink-600 text-white rounded-sm px-2 py-1 border-2 border-pink-600 hover:bg-white hover:border-pink-600 hover:border-2 hover:text-pink-600">
            <x-heroicon-o-bell class="w-6 h-6" />
        </a>
        <a href=""
            class="bg-pink-600 text-white rounded-sm px-2 py-1 border-2 border-pink-600 hover:bg-white hover:border-pink-600 hover:border-2 hover:text-pink-600">
            <x-heroicon-o-cog-8-tooth class="w-6 h-6" />
        </a> -->
    </nav>
</header>