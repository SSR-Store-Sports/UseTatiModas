<header class="bg-white shadow-md sticky top-0 z-50">
    <div class="px-4 md:px-8 lg:px-16 py-3 md:py-4">
        <div class="hidden md:grid md:grid-cols-[auto_1fr_auto] gap-6 items-center">
            <a href="/" class="shrink-0">
                <img src="{{asset('assets/logo.png')}}" alt="UseTatiModas"
                    class="h-16 w-16 lg:h-20 lg:w-20 hover:scale-105 transition-transform duration-200">
            </a>

            <div class="flex flex-col gap-3 max-w-3xl mx-auto w-full">
                <form action="/search" method="GET" class="relative">
                    <input
                        class="w-full h-11 pl-4 pr-12 rounded-lg border border-gray-300 bg-white text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-gray-400 focus:border-gold-medium focus:ring-1 focus:ring-gold-medium/20"
                        type="text" name="product" id="product" placeholder="@lang('search_placeholder')" />
                    <button type="submit"
                        class="absolute right-2 top-1/2 -translate-y-1/2 p-2 text-gold-dark hover:text-gold-medium transition-colors">
                        <x-heroicon-o-magnifying-glass class="w-5 h-5" />
                    </button>
                </form>

                <div class="flex gap-2 items-center">
                    <form action="/search" method="GET" class="flex gap-2 items-center">
                        <select name="category" onchange="this.form.submit()"
                            class="h-9 px-3 rounded-md border border-gray-300 bg-white text-gray-700 text-xs outline-none transition-all duration-200 hover:border-gray-400 focus:border-gold-medium focus:ring-1 focus:ring-gold-medium/20 cursor-pointer">
                            <option value="">@lang('category')</option>
                            @if(isset($categories))
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                @endforeach
                            @else
                                <option value="1">Calças</option>
                                <option value="2">Camisas</option>
                                <option value="3">Croppeds</option>
                                <option value="4">Shorts</option>
                                <option value="5">Tênis</option>
                                <option value="6">Saia</option>
                            @endif
                        </select>
                    </form>

                    <a href="/search?sort=popular"
                        class="px-4 py-1.5 bg-gold-light text-gold-dark text-xs font-medium rounded-md hover:bg-gold-medium hover:text-white transition-all duration-200">
                        @lang('best_sellers')
                    </a>
                </div>
            </div>

            <nav class="flex flex-col gap-2 shrink-0 items-center">
                <div class="flex gap-2">
                    <a href="/cart"
                        class="relative p-2.5 bg-gold-medium text-white rounded-lg hover:bg-gold-dark transition-all duration-200 group"
                        title="Carrinho">
                        <x-heroicon-o-shopping-cart class="w-5 h-5" />
                        @if($cartCount > 0)
                            <span
                                class="absolute -top-1 -right-1 w-5 h-5 bg-gold-light text-white text-[10px] font-bold rounded-full flex items-center justify-center">
                                {{ $cartCount }}
                            </span>
                        @endif
                    </a>

                    @auth
                        <a href=""
                            class="p-2.5 bg-gold-medium text-white rounded-lg hover:bg-gold-dark transition-all duration-200"
                            title="Notificações">
                            <x-heroicon-o-bell class="w-5 h-5" />
                        </a>
                        <a href="/profile"
                            class="p-2.5 bg-gold-medium text-white rounded-lg hover:bg-gold-dark transition-all duration-200"
                            title="Configurações">
                            <x-heroicon-o-cog-8-tooth class="w-5 h-5" />
                        </a>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit"
                                class="p-2.5 bg-gold-medium text-white rounded-lg hover:bg-gold-dark transition-all duration-200"
                                title="Sair">
                                <x-heroicon-o-arrow-left-start-on-rectangle class="w-5 h-5" />
                            </button>
                        </form>
                    @else
                        <a href="/sign-in"
                            class="p-2.5 bg-gold-medium text-white rounded-lg hover:bg-gold-dark transition-all duration-200"
                            title="Entrar">
                            <x-heroicon-o-arrow-right-end-on-rectangle class="w-5 h-5" />
                        </a>
                    @endauth
                </div>

                @auth
                    <div>
                        <span class="text-sm text-gray-700 mr-2">Olá,
                            <span class="font-medium text-gold-dark">
                                {{ auth()->user()->name }}
                            </span>
                        </span>
                    </div>
                @endauth
            </nav>
        </div>

        <div class="md:hidden">
            <div class="flex items-center justify-between mb-3">
                <a href="/" class="shrink-0">
                    <img src="{{asset('assets/logo.png')}}" alt="UseTatiModas" class="h-14 w-14">
                </a>

                <nav class="flex gap-2 items-center">
                    @auth
                        <span class="text-xs text-gray-700 mr-1">Olá, <span
                                class="font-medium text-gold-dark">{{ Str::limit(auth()->user()->name, 12) }}</span></span>
                    @endauth

                    <a href="/cart" class="relative p-2 bg-gold-medium text-white rounded-lg" title="Carrinho">
                        <x-heroicon-o-shopping-cart class="w-5 h-5" />
                        @if($cartCount > 0)
                            <span
                                class="absolute -top-1 -right-1 w-4 h-4 bg-red-500 text-white text-[10px] font-bold rounded-full flex items-center justify-center">
                                {{ $cartCount }}
                            </span>
                        @endif
                    </a>

                    @auth
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="p-2 bg-gold-medium text-white rounded-lg" title="Sair">
                                <x-heroicon-o-arrow-left-start-on-rectangle class="w-5 h-5" />
                            </button>
                        </form>
                    @else
                        <a href="/sign-in" class="p-2 bg-gold-medium text-white rounded-lg" title="Entrar">
                            <x-heroicon-o-arrow-right-end-on-rectangle class="w-5 h-5" />
                        </a>
                    @endauth
                </nav>
            </div>

            <form action="/search" method="GET" class="relative mb-2">
                <input
                    class="w-full h-10 pl-4 pr-12 rounded-lg border border-gray-300 bg-white text-gray-800 placeholder-gray-400 text-sm outline-none focus:border-gold-medium focus:ring-1 focus:ring-gold-medium/20"
                    type="text" name="product" id="product-mobile" placeholder="@lang('search_placeholder')" />
                <button type="submit" class="absolute right-2 top-1/2 -translate-y-1/2 p-2 text-gold-dark">
                    <x-heroicon-o-magnifying-glass class="w-5 h-5" />
                </button>
            </form>

            <div class="flex gap-2">
                <form action="/search" method="GET" class="flex gap-2 flex-1">
                    <select name="category" onchange="this.form.submit()"
                        class="flex-1 h-9 px-3 rounded-md border border-gray-300 bg-white text-gray-700 text-xs outline-none focus:border-gold-medium focus:ring-1 focus:ring-gold-medium/20">
                        <option value="">@lang('category')</option>
                        @if(isset($categories))
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                            @endforeach
                        @else
                            <option value="1">Calças</option>
                            <option value="2">Camisas</option>
                            <option value="3">Croppeds</option>
                            <option value="4">Shorts</option>
                            <option value="5">Tênis</option>
                            <option value="6">Saia</option>
                        @endif
                    </select>
                </form>
                <a href="/search?sort=popular"
                    class="px-3 py-1.5 bg-gold-light text-gold-dark text-xs font-medium rounded-md hover:bg-gold-medium hover:text-white transition-all duration-200 whitespace-nowrap">
                    @lang('best_sellers')
                </a>
            </div>
        </div>
    </div>
</header>