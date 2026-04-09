@extends('_layouts.app')

@section('title', 'Home: UseTatiModas')

@section('content')
    <main class="h-full">
        <section class="flex border-b-2 border-t-2 border-pink-600 gap-2 justify-center items-center px-4 py-2 mt-4">
            <span class="bg-pink-600 py-2 px-8 rounded-xl text-white w-52 text-center">FRETE GRATÍS</span>
            <span class="bg-pink-600 py-2 px-8 rounded-xl text-white">ENTREGA GARANTIDA</span>
            <span class="bg-pink-600 py-2 px-8 rounded-xl text-white">80% OFF</span>
            <span class="bg-pink-600 py-2 px-8 rounded-xl text-white">10% OFF NO PIX</span>
            <span class="bg-pink-600 py-2 px-8 rounded-xl text-white">30 DIAS PARA TROCA</span>
        </section>

        <div class="mt-8 rounded-sm border-b-4 border-t-8 border-pink-600">
            <img src="{{ asset('assets/banner.png') }}" class="h-142 w-full" alt="Logo">
        </div>

        <section class="flex flex-col px-24 mt-12 gap-8">
            <div class="flex flex-col gap-2 justify-center">
                <label class="flex px-16 items-center gap-2">
                    <x-heroicon-o-shopping-bag class="h-8 w-8 text-pink-600" />
                    <h1 class="text-pink-600 text-4xl">PRODUTOS EM DESTAQUE</h1>
                </label>
                <span class="w-full h-0.5 bg-pink-600"></span>
            </div>

            <div class="grid grid-cols-4 gap-8 justify-center items-center">
                <div class="flex flex-col w-full bg-white shadow-black rounded-sm gap-2">
                    <div class="flex flex-col justify-center items-center gap-2">
                        <img src="{{ asset('assets/model_card.png') }} " alt=""
                            class="border-2 border-pink-500 h-64 w-54 rounded-lg">

                        <div class="flex gap-2">
                            <span class="h-2 w-4 rounded-full bg-pink-500 border-2 border-pink-500"></span>
                            <span class="h-2 w-4 rounded-full bg-white border-2 border-pink-500"></span>
                            <span class="h-2 w-4 rounded-full bg-white border-2 border-pink-500"></span>
                        </div>
                    </div>

                    <div class="flex flex-col gap-8 justify-center">
                        <label class="text-pink-600 text-center">NC roupa feminina...</label>

                        <div class="flex flex-col gap-2">
                            <button
                                class="group bg-pink-500 text-white flex items-center justify-center rounded-sm w-full pt-3 pb-3 gap-2 border-2 border-transparent hover:bg-white hover:border-2 hover:border-pink-600 hover:text-pink-600 cursor-pointer text-center outline-none transition-all duration-200 ">
                                <span>Comprar</span>
                                <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="currentColor" className="size-6">
                                    <path fillRule="evenodd"
                                        d="M16.5 3.75a1.5 1.5 0 0 1 1.5 1.5v13.5a1.5 1.5 0 0 1-1.5 1.5h-6a1.5 1.5 0 0 1-1.5-1.5V15a.75.75 0 0 0-1.5 0v3.75a3 3 0 0 0 3 3h6a3 3 0 0 0 3-3V5.25a3 3 0 0 0-3-3h-6a3 3 0 0 0-3 3V9A.75.75 0 1 0 9 9V5.25a1.5 1.5 0 0 1 1.5-1.5h6ZM5.78 8.47a.75.75 0 0 0-1.06 0l-3 3a.75.75 0 0 0 0 1.06l3 3a.75.75 0 0 0 1.06-1.06l-1.72-1.72H15a.75.75 0 0 0 0-1.5H4.06l1.72-1.72a.75.75 0 0 0 0-1.06Z"
                                        clipRule="evenodd" />
                                </svg>
                            </button>

                            <button
                                class="group bg-white text-pink-600 flex items-center justify-center rounded-sm w-full pt-3 pb-3 gap-2 border-2 border-pink-600 hover:bg-gray-100 hover:border-2 hover:border-pink-700 hover:text-pink-700 cursor-pointer text-center outline-none transition-all duration-200 ">
                                <span>Carrinho</span>
                                <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="currentColor" className="size-6">
                                    <path fillRule="evenodd"
                                        d="M16.5 3.75a1.5 1.5 0 0 1 1.5 1.5v13.5a1.5 1.5 0 0 1-1.5 1.5h-6a1.5 1.5 0 0 1-1.5-1.5V15a.75.75 0 0 0-1.5 0v3.75a3 3 0 0 0 3 3h6a3 3 0 0 0 3-3V5.25a3 3 0 0 0-3-3h-6a3 3 0 0 0-3 3V9A.75.75 0 1 0 9 9V5.25a1.5 1.5 0 0 1 1.5-1.5h6ZM5.78 8.47a.75.75 0 0 0-1.06 0l-3 3a.75.75 0 0 0 0 1.06l3 3a.75.75 0 0 0 1.06-1.06l-1.72-1.72H15a.75.75 0 0 0 0-1.5H4.06l1.72-1.72a.75.75 0 0 0 0-1.06Z"
                                        clipRule="evenodd" />
                                </svg>

                            </button>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col w-full bg-white shadow-black rounded-sm gap-2">
                    <div class="flex flex-col justify-center items-center gap-2">
                        <img src="{{ asset('assets/model_card.png') }} " alt=""
                            class="border-2 border-pink-500 h-64 w-54 rounded-lg">

                        <div class="flex gap-2">
                            <span class="h-2 w-4 rounded-full bg-pink-500 border-2 border-pink-500"></span>
                            <span class="h-2 w-4 rounded-full bg-white border-2 border-pink-500"></span>
                            <span class="h-2 w-4 rounded-full bg-white border-2 border-pink-500"></span>
                        </div>
                    </div>

                    <div class="flex flex-col gap-8 justify-center">
                        <label class="text-pink-600 text-center">NC roupa feminina...</label>

                        <div class="flex flex-col gap-2">
                            <button
                                class="group bg-pink-500 text-white flex items-center justify-center rounded-sm w-full pt-3 pb-3 gap-2 border-2 border-transparent hover:bg-white hover:border-2 hover:border-pink-600 hover:text-pink-600 cursor-pointer text-center outline-none transition-all duration-200 ">
                                <span>Comprar</span>
                                <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="currentColor" className="size-6">
                                    <path fillRule="evenodd"
                                        d="M16.5 3.75a1.5 1.5 0 0 1 1.5 1.5v13.5a1.5 1.5 0 0 1-1.5 1.5h-6a1.5 1.5 0 0 1-1.5-1.5V15a.75.75 0 0 0-1.5 0v3.75a3 3 0 0 0 3 3h6a3 3 0 0 0 3-3V5.25a3 3 0 0 0-3-3h-6a3 3 0 0 0-3 3V9A.75.75 0 1 0 9 9V5.25a1.5 1.5 0 0 1 1.5-1.5h6ZM5.78 8.47a.75.75 0 0 0-1.06 0l-3 3a.75.75 0 0 0 0 1.06l3 3a.75.75 0 0 0 1.06-1.06l-1.72-1.72H15a.75.75 0 0 0 0-1.5H4.06l1.72-1.72a.75.75 0 0 0 0-1.06Z"
                                        clipRule="evenodd" />
                                </svg>
                            </button>

                            <button
                                class="group bg-white text-pink-600 flex items-center justify-center rounded-sm w-full pt-3 pb-3 gap-2 border-2 border-pink-600 hover:bg-gray-100 hover:border-2 hover:border-pink-700 hover:text-pink-700 cursor-pointer text-center outline-none transition-all duration-200 ">
                                <span>Carrinho</span>
                                <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="currentColor" className="size-6">
                                    <path fillRule="evenodd"
                                        d="M16.5 3.75a1.5 1.5 0 0 1 1.5 1.5v13.5a1.5 1.5 0 0 1-1.5 1.5h-6a1.5 1.5 0 0 1-1.5-1.5V15a.75.75 0 0 0-1.5 0v3.75a3 3 0 0 0 3 3h6a3 3 0 0 0 3-3V5.25a3 3 0 0 0-3-3h-6a3 3 0 0 0-3 3V9A.75.75 0 1 0 9 9V5.25a1.5 1.5 0 0 1 1.5-1.5h6ZM5.78 8.47a.75.75 0 0 0-1.06 0l-3 3a.75.75 0 0 0 0 1.06l3 3a.75.75 0 0 0 1.06-1.06l-1.72-1.72H15a.75.75 0 0 0 0-1.5H4.06l1.72-1.72a.75.75 0 0 0 0-1.06Z"
                                        clipRule="evenodd" />
                                </svg>

                            </button>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col w-full bg-white shadow-black rounded-sm gap-2">
                    <div class="flex flex-col justify-center items-center gap-2">
                        <img src="{{ asset('assets/model_card.png') }} " alt=""
                            class="border-2 border-pink-500 h-64 w-54 rounded-lg">

                        <div class="flex gap-2">
                            <span class="h-2 w-4 rounded-full bg-pink-500 border-2 border-pink-500"></span>
                            <span class="h-2 w-4 rounded-full bg-white border-2 border-pink-500"></span>
                            <span class="h-2 w-4 rounded-full bg-white border-2 border-pink-500"></span>
                        </div>
                    </div>

                    <div class="flex flex-col gap-8 justify-center">
                        <label class="text-pink-600 text-center">NC roupa feminina...</label>

                        <div class="flex flex-col gap-2">
                            <button
                                class="group bg-pink-500 text-white flex items-center justify-center rounded-sm w-full pt-3 pb-3 gap-2 border-2 border-transparent hover:bg-white hover:border-2 hover:border-pink-600 hover:text-pink-600 cursor-pointer text-center outline-none transition-all duration-200 ">
                                <span>Comprar</span>
                                <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="currentColor" className="size-6">
                                    <path fillRule="evenodd"
                                        d="M16.5 3.75a1.5 1.5 0 0 1 1.5 1.5v13.5a1.5 1.5 0 0 1-1.5 1.5h-6a1.5 1.5 0 0 1-1.5-1.5V15a.75.75 0 0 0-1.5 0v3.75a3 3 0 0 0 3 3h6a3 3 0 0 0 3-3V5.25a3 3 0 0 0-3-3h-6a3 3 0 0 0-3 3V9A.75.75 0 1 0 9 9V5.25a1.5 1.5 0 0 1 1.5-1.5h6ZM5.78 8.47a.75.75 0 0 0-1.06 0l-3 3a.75.75 0 0 0 0 1.06l3 3a.75.75 0 0 0 1.06-1.06l-1.72-1.72H15a.75.75 0 0 0 0-1.5H4.06l1.72-1.72a.75.75 0 0 0 0-1.06Z"
                                        clipRule="evenodd" />
                                </svg>
                            </button>

                            <button
                                class="group bg-white text-pink-600 flex items-center justify-center rounded-sm w-full pt-3 pb-3 gap-2 border-2 border-pink-600 hover:bg-gray-100 hover:border-2 hover:border-pink-700 hover:text-pink-700 cursor-pointer text-center outline-none transition-all duration-200 ">
                                <span>Carrinho</span>
                                <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="currentColor" className="size-6">
                                    <path fillRule="evenodd"
                                        d="M16.5 3.75a1.5 1.5 0 0 1 1.5 1.5v13.5a1.5 1.5 0 0 1-1.5 1.5h-6a1.5 1.5 0 0 1-1.5-1.5V15a.75.75 0 0 0-1.5 0v3.75a3 3 0 0 0 3 3h6a3 3 0 0 0 3-3V5.25a3 3 0 0 0-3-3h-6a3 3 0 0 0-3 3V9A.75.75 0 1 0 9 9V5.25a1.5 1.5 0 0 1 1.5-1.5h6ZM5.78 8.47a.75.75 0 0 0-1.06 0l-3 3a.75.75 0 0 0 0 1.06l3 3a.75.75 0 0 0 1.06-1.06l-1.72-1.72H15a.75.75 0 0 0 0-1.5H4.06l1.72-1.72a.75.75 0 0 0 0-1.06Z"
                                        clipRule="evenodd" />
                                </svg>

                            </button>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col w-full bg-white shadow-black rounded-sm gap-2">
                    <div class="flex flex-col justify-center items-center gap-2">
                        <img src="{{ asset('assets/model_card.png') }} " alt=""
                            class="border-2 border-pink-500 h-64 w-54 rounded-lg">

                        <div class="flex gap-2">
                            <span class="h-2 w-4 rounded-full bg-pink-500 border-2 border-pink-500"></span>
                            <span class="h-2 w-4 rounded-full bg-white border-2 border-pink-500"></span>
                            <span class="h-2 w-4 rounded-full bg-white border-2 border-pink-500"></span>
                        </div>
                    </div>

                    <div class="flex flex-col gap-8 justify-center">
                        <label class="text-pink-600 text-center">NC roupa feminina...</label>

                        <div class="flex flex-col gap-2">
                            <button
                                class="group bg-pink-500 text-white flex items-center justify-center rounded-sm w-full pt-3 pb-3 gap-2 border-2 border-transparent hover:bg-white hover:border-2 hover:border-pink-600 hover:text-pink-600 cursor-pointer text-center outline-none transition-all duration-200 ">
                                <span>Comprar</span>
                                <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="currentColor" className="size-6">
                                    <path fillRule="evenodd"
                                        d="M16.5 3.75a1.5 1.5 0 0 1 1.5 1.5v13.5a1.5 1.5 0 0 1-1.5 1.5h-6a1.5 1.5 0 0 1-1.5-1.5V15a.75.75 0 0 0-1.5 0v3.75a3 3 0 0 0 3 3h6a3 3 0 0 0 3-3V5.25a3 3 0 0 0-3-3h-6a3 3 0 0 0-3 3V9A.75.75 0 1 0 9 9V5.25a1.5 1.5 0 0 1 1.5-1.5h6ZM5.78 8.47a.75.75 0 0 0-1.06 0l-3 3a.75.75 0 0 0 0 1.06l3 3a.75.75 0 0 0 1.06-1.06l-1.72-1.72H15a.75.75 0 0 0 0-1.5H4.06l1.72-1.72a.75.75 0 0 0 0-1.06Z"
                                        clipRule="evenodd" />
                                </svg>
                            </button>

                            <button
                                class="group bg-white text-pink-600 flex items-center justify-center rounded-sm w-full pt-3 pb-3 gap-2 border-2 border-pink-600 hover:bg-gray-100 hover:border-2 hover:border-pink-700 hover:text-pink-700 cursor-pointer text-center outline-none transition-all duration-200 ">
                                <span>Carrinho</span>
                                <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="currentColor" className="size-6">
                                    <path fillRule="evenodd"
                                        d="M16.5 3.75a1.5 1.5 0 0 1 1.5 1.5v13.5a1.5 1.5 0 0 1-1.5 1.5h-6a1.5 1.5 0 0 1-1.5-1.5V15a.75.75 0 0 0-1.5 0v3.75a3 3 0 0 0 3 3h6a3 3 0 0 0 3-3V5.25a3 3 0 0 0-3-3h-6a3 3 0 0 0-3 3V9A.75.75 0 1 0 9 9V5.25a1.5 1.5 0 0 1 1.5-1.5h6ZM5.78 8.47a.75.75 0 0 0-1.06 0l-3 3a.75.75 0 0 0 0 1.06l3 3a.75.75 0 0 0 1.06-1.06l-1.72-1.72H15a.75.75 0 0 0 0-1.5H4.06l1.72-1.72a.75.75 0 0 0 0-1.06Z"
                                        clipRule="evenodd" />
                                </svg>

                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                ...
            </div>
        </section>

        <section>
            <h1>PARA VOCÊ</h1>

            <div>
                <div>
                    <div>
                        <h3>Produtos Essenciais</h3>
                        <span></span>
                        <button>Conferir</button>
                    </div>

                    <img src="" alt="">
                </div>

                <div>
                    <div>
                        <h3>Produtos Essenciais</h3>
                        <span></span>
                        <button>Conferir</button>
                    </div>

                    <img src="" alt="">
                </div>
            </div>
        </section>
    </main>
@endsection