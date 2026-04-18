@extends('_layouts.app')

@section('title', 'Carrinho: UseTatiModas')

@section('content')
<main class="px-24 py-12">

  <div class="grid grid-rows-[auto_1fr] gap-6">
    <div class="flex justify-between items-center border-b border-pink-200 pb-4">
      <div class="flex items-center gap-1.5">
        <x-heroicon-o-shopping-cart class="w-5 h-5 text-pink-600" />
        <h1 class="font-bold text-2xl text-pink-600">Carrinho de Compras</h1>
      </div>
      <span class="text-sm text-gray-500">0 produto(s)</span>
    </div>
    <div class="grid grid-cols-3 gap-8">

      <section class="col-span-2 flex flex-col gap-4">
        <div class="bg-white rounded-xl shadow-md shadow-pink-500/20 p-6 flex gap-4 items-start">
          <input type="checkbox" class="w-4 h-4 mt-1 accent-pink-500 cursor-pointer">
          <img src="" alt="Calça Feminina" class="w-28 h-28 object-cover rounded-lg bg-pink-50 border border-pink-200">

          <div class="flex flex-col gap-2 flex-1">
            <p class="font-medium text-gray-800">Calça Feminina</p>
            <span class="text-xs text-green-600 font-medium">Frete Grátis</span>

            <div class="flex items-center gap-2">
              <label class="text-sm text-gray-500">Quantidade:</label>
              <input type="number" min="1" max="10" value="1"
                class="w-16 border border-pink-200 rounded-md px-2 py-1 text-sm outline-none focus:border-pink-400 focus:ring-1 focus:ring-pink-300">
            </div>

            <div class="flex justify-between items-center mt-auto">
              <p class="text-sm text-gray-500">Subtotal: <span class="font-semibold text-gray-800">R$ 62,00</span></p>
              <button class="flex items-center gap-1 text-xs text-red-500 hover:text-red-700 hover:underline transition-all">
                <x-heroicon-o-minus-circle class="w-4 h-4" />
                Remover
              </button>
            </div>
          </div>

        </div>
      </section>

      <aside class="col-span-1">
        <div class="bg-white p-5 rounded-xl shadow-md shadow-pink-500/20 flex flex-col gap-4">

          <h2 class="font-bold text-lg text-pink-600 border-b border-pink-200 pb-3">Resumo de Compra</h2>

          <div class="flex flex-col gap-2 text-sm text-gray-600">
            <div class="flex justify-between">
              <span>Itens</span>
              <span>R$ 62,00</span>
            </div>
            <div class="flex justify-between">
              <span>Frete</span>
              <span class="text-green-600 font-medium">Grátis</span>
            </div>
          </div>

          <div class="flex justify-between font-semibold text-base border-t border-dashed border-pink-300 pt-3">
            <span>Total</span>
            <span>R$ 62,00</span>
          </div>

          <p class="text-xs text-gray-400 text-center">Parcelar em até 4x sem juros</p>

          <div class="flex flex-col gap-2">
            <button class="bg-pink-500 text-white flex items-center justify-center rounded-md w-full py-3 border-2 border-transparent hover:bg-white hover:border-pink-600 hover:text-pink-600 cursor-pointer outline-none transition-all duration-200">
              Finalizar Compra
            </button>
            <p class="text-center text-xs text-gray-400">ou</p>
            <button class="bg-white text-pink-600 flex items-center justify-center rounded-md w-full py-3 border-2 border-pink-600 hover:bg-pink-50 hover:border-pink-700 hover:text-pink-700 cursor-pointer outline-none transition-all duration-200">
              Continuar Comprando
            </button>
          </div>

          <p class="flex items-center justify-center gap-1 text-xs text-gray-500">
            <x-heroicon-o-check-badge class="w-4 h-4 text-green-500" />
            Compra 100% Segura
          </p>

        </div>
      </aside>

    </div>

  </div>

</main>
@endsection