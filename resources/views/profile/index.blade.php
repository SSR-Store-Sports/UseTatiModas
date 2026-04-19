@extends('_layouts.app')

@section('content')
    <main class="flex gap-4 mx-24 my-18 p-6 ">
        <aside class="w-72 bg-white shadow-md p-5 rounded-2xl flex flex-col gap-6 shadow-pink-500/90 shadow-xl/30 h-full">

            <h1 class="font-semibold text-xl">Informações do usuário</h1>

            <img src="{{ asset('assets/ft-user.jpg') }}" alt="Imagem de usuário"
                class="w-28 h-28 bg-gray-300 rounded-full mx-auto object-cover">

            <div class="flex flex-col items-center gap-2 text-sm text-gray-700">
                <p class="font-medium text-base text-gray-900">José Caique Alves da Silva</p>
                <p>jcaique@gmail.com</p>
                <p>Av. Sen. Teotônio Vilela, 261</p>

                <div class="mt-2 px-3 py-2 rounded-xl bg-gray-50 border border-gray-200 text-xs text-gray-600">
                    Entrou em: 02/03/2026
                </div>
            </div>
            <div class="flex flex-col gap-3">
                <h2 class="text-sm font-semibold text-gray-500">Minha Conta</h2>

                <a href="#"
                    class="flex items-center justify-between px-4 py-3 rounded-xl border border-gray-200 text-sm text-gray-700 hover:bg-gray-50 hover:text-pink-600 transition">
                    <span>Endereço / Troca de Senha</span>
                </a>

                <a href="/orders"
                    class="flex items-center justify-between px-4 py-3 rounded-xl border border-gray-200 text-sm text-gray-700 hover:bg-gray-50 hover:text-pink-600 transition">
                    <span>Minhas Compras</span>
                </a>
            </div>
        </aside>
        <section class="flex-1 bg-white shadow-md p-6 rounded-2xl shadow-pink-500/90 shadow-xl/30 h-full">
            <h1 class="font-semibold text-2xl mb-6">Meu Perfil</h1>
            <div class="flex flex-col gap-6">
                <div class="flex flex-col gap-2">
                    <span class="text-sm font-medium text-gray-700">Nome de usuário</span>
                    <input class="input-default" type="text" placeholder="José Silva" disabled />
                    <span class="text-xs text-gray-500">
                        Nome de usuário pode ser alterado apenas uma vez.
                    </span>
                </div>
                <div class="flex flex-col gap-2">
                    <span class="text-sm font-medium text-gray-700">Nome</span>
                    <input class="input-default" type="text" placeholder="José Alves Silva" disabled />
                </div>

                <div class="flex flex-col gap-3 text-sm">
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">Email</span>
                        <div class="flex items-center gap-3">
                            <span class="text-gray-900">he**********@gmail.com</span>
                            <a href="#" class="text-pink-600 hover:underline">trocar</a>
                        </div>
                    </div>

                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">Telefone</span>
                        <div class="flex items-center gap-3">
                            <span class="text-gray-900">*********07</span>
                            <a href="#" class="text-pink-600 hover:underline">trocar</a>
                        </div>
                    </div>

                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">CPF</span>
                        <div class="flex items-center gap-3">
                            <span class="text-gray-900">***.***.***-47</span>
                            <a href="#" class="text-pink-600 hover:underline">trocar</a>
                        </div>
                    </div>
                </div>

                <div class="h-px bg-gray-200"></div>

                <div class="flex gap-4 mt-auto">
                    <button
                        class="group bg-pink-500 text-white flex items-center justify-center rounded-sm w-full pt-3 pb-3 gap-2 border-2 border-transparent hover:bg-white hover:border-2 hover:border-pink-600 hover:text-pink-600 cursor-pointer text-center outline-none transition-all duration-200">
                        <span>EXCLUIR MINHA CONTA</span>
                    </button>
                    <button
                        class="group bg-white text-pink-600 flex items-center justify-center rounded-sm w-full pt-3 pb-3 gap-2 border-2 border-pink-600 hover:bg-gray-100 hover:border-2 hover:border-pink-700 hover:text-pink-700 cursor-pointer text-center outline-none transition-all duration-200">
                        <span>ATUALIZAR INFORMAÇÕES</span>
                    </button>
                </div>
            </div>
        </section>
    </main>
@endsection