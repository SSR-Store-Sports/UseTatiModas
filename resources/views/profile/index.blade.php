@extends('_layouts.app')

@section('content')
<main class="flex m-2.5 gap-1 ;
">
    <sidebar class="flex flex-col border-black border-2 p-4 rounded-2xl w-4xl">
        <h1>Informações do usuário</h1>
        <img src="" alt="Imagem de usuário">
        <p>Nome do usuário</p>
        <p>Email do usuário</p>
        <p>Endereço</p>
        <div class="">
            <p>Entrou em: 02/03/2026</p>
        </div>
        <div>
            <h1>Minha Conta</h1>
            <div>
                <a href="#">Endereço / Troca de Senha</a>
                <a href="#">Minhas Compras</a>
            </div>
        </div>
    </sidebar>

    <div class="lex flex-col border-red-700 border-2 w-full p-4 rounded-2xl">
        <h1>Meu Perfil</h1>
        <div class="flex flex-col gap-4 my-4 ">
            <div class="flex flex-col gap-2 flex-1">
                <span class="text-lg">Nome de usuário</span>
                <input
                    class="w-full px-4 py-3 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-pink-400 hover:bg-white focus:border-pink-500 focus:bg-white focus:shadow-[0_0_0_3px_rgba(236,72,153,0.15)]"
                    type="name" name="name" id="name" placeholder="José Silva" disabled />
                <span class="text-[#1px] ">Nome do usuário pode ser alterado apenas uma vez.</span>
            </div>

            <div class="flex flex-col gap-4 ">
                <div class="flex flex-col gap-2 flex-1">
                    <span class="text-lg">Nome</span>
                    <input
                        class="w-full px-4 py-3 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-pink-400 hover:bg-white focus:border-pink-500 focus:bg-white focus:shadow-[0_0_0_3px_rgba(236,72,153,0.15)]"
                        type="name" name="name" id="name" placeholder="José Alves Silva" disabled />
                </div>
            </div>

            <div class="flex flex-col gap-4">
                <div class="flex  gap-2 flex-1">
                    <span class="text-lg">Email:</span>
                    <span class="text-lg">he**********@gmail.com</span>
                    <a href="#">trocar</a>
                </div>
                <div class="flex  gap-2 flex-1">
                    <span class="text-lg">Tel :</span>
                    <span class="text-lg">*********07</span>
                    <a href="#">trocar</a>
                </div>
                <div class="flex  gap-2 flex-1">
                    <span class="text-lg">CPF:</span>
                    <span class="text-lg">***-***-***-47</span>
                    <a href="#">trocar</a>
                </div>
            </div>
            <span class="bg-gray-300 h-0.5 w-82"></span>
            <div>
                <button class="" onclick="">DELETAR CONTA </button>
                <button class="" onclick="">ATUALIZAR</button>
            </div>
        </div>
    </div>

</main>
@endsection