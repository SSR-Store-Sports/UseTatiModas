<header class="flex justify-between items-center h-28 px-18">
    <a href="./">
        <img src="{{asset('assets/logo.png')}}" alt="" class="h-24 w-24">
    </a>

    <input
        class="w-64 h-12 px-4 py-3 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-pink-400 hover:bg-white focus:border-pink-500 focus:bg-white focus:shadow-[0_0_0_3px_rgba(236,72,153,0.15)]"
        type="email" name="email" id="email" placeholder="Procure aqui..." />

    <nav class="flex gap-2 justify-center items-center">
        <!-- <a href="" class="bg-pink-700 text-white rounded-sm px-2 py-1">
            <x-heroicon-o-user class="w-6 h-6" />
        </a> -->
        <a href=""
            class="bg-pink-600 text-white rounded-sm px-2 py-1 border-2 border-pink-600 hover:bg-white hover:border-pink-600 hover:border-2 hover:text-pink-600">
            <x-heroicon-o-shopping-cart class="w-6 h-6" />
        </a>
        <a href=""
            class="bg-pink-600 text-white rounded-sm px-2 py-1 border-2 border-pink-600 hover:bg-white hover:border-pink-600 hover:border-2 hover:text-pink-600">
            <x-heroicon-o-bell class="w-6 h-6" />
        </a>
        <a href=""
            class="bg-pink-600 text-white rounded-sm px-2 py-1 border-2 border-pink-600 hover:bg-white hover:border-pink-600 hover:border-2 hover:text-pink-600">
            <x-heroicon-o-cog-8-tooth class="w-6 h-6" />
        </a>
    </nav>
</header>