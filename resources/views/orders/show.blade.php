@extends('_layouts.app')

@section('title', 'Pedido #PED000013 | UseTatiModas')

@section('content')
  <main class="py-12 px-18">
    <div class="max-w-6xl mx-auto">
      <div class="flex items-center justify-between mb-8 border-b-2 border-pink-500 pb-2">
        <h1 class="text-2xl font-bold text-gray-800">Pedido #PED000013</h1>
        <a href="/orders" class="text-gray-500 hover:text-pink-600 font-semibold transition">← Voltar para pedidos</a>
      </div>

      <!-- Estrutura do card alinhada com a index -->
      <section class="border border-gray-200 p-6 transition-colors duration-200">
        <div class="flex justify-between items-start mb-10 border-b border-gray-100 pb-6">
          <div>
            <h2 class="text-lg font-bold text-gray-800 mb-1">Status: <span class="text-pink-600">Em preparação</span></h2>
            <p class="text-sm text-gray-500">Realizado em: 05/12/2025</p>
          </div>
          <div class="text-right">
            <h3 class="font-bold text-gray-800 uppercase text-xs tracking-wider mb-1">Endereço de Entrega</h3>
            <p class="text-sm text-gray-600">Rua das Flores, 123 - Centro<br>São Paulo, SP</p>
          </div>
        </div>

        <h3 class="text-sm font-bold text-gray-800 mb-6 uppercase tracking-wider">Itens do Pedido</h3>
        <div class="space-y-4 mb-10">
          @for($i = 0; $i < 3; $i++)
            <div class="flex items-center gap-6 border-b border-gray-100 pb-4">
              <div class="w-20 h-20 bg-gray-100 border border-gray-200"></div>
              <div class="flex-1">
                <p class="font-semibold text-gray-800">Conjunto Delicado</p>
                <p class="text-sm text-gray-500">Qtd: 2 | R$ 249,50 cada</p>
              </div>
              <p class="font-bold text-gray-800">R$ 499,00</p>
            </div>
          @endfor
        </div>

        <div class="flex justify-end">
          <div class="w-full md:w-1/2 bg-gray-50 p-6 border border-gray-100">
            <div class="flex justify-between mb-2 text-gray-600">
              <span>Subtotal:</span>
              <span class="font-semibold text-gray-800">R$ 749,70</span>
            </div>
            <div class="flex justify-between mb-4 text-gray-600">
              <span>Frete:</span>
              <span class="font-semibold text-gray-800">Grátis</span>
            </div>
            <div class="border-t border-gray-200 pt-4 flex justify-between">
              <span class="font-bold text-gray-800 text-lg">Total:</span>
              <span class="font-bold text-pink-600 text-lg">R$ 749,70</span>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main>
@endsection