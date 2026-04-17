@extends('_layouts.app')

@section('title', 'Carrinho: UseTatiModas')

@section('content')
<main class="h-full">

  <div class="mx-24 grid grid-rows-[auto_1fr] gap-6">

    <!-- HEADER -->
    <div class="flex justify-between items-center border-b pb-4">
      <h1 class="font-semibold text-2xl">Carrinho de Compras</h1>
      <span>0 produto(s)</span>
    </div>

    <!-- CONTEÚDO -->
    <div class="grid grid-cols-3 gap-8">

      <!-- PRODUTOS -->
      <section class="col-span-2">
        <div class="border-black border-2 p-4">
          <img src="" alt="">
          <p>Calça Feminina</p>
          <span>FRETE GRATIS</span>
          <button>Remover</button>
          <p>Quantidade</p>
          <input type="number" max="10">
          <p>R$ 62,00</p>
          <p>Subtotal: R$ 62,00</p>
        </div>
      </section>

      <!-- RESUMO -->
      <aside class="col-span-1">
        <div class="border-red-600 border-2 bg-white p-4">
          <h2 class="font-semibold">Resumo de Compra</h2>
          <p>Itens: R$ 62,00</p>
          <p>Frete: R$ 0,00</p>
          <p>Total: R$ 62,00</p>
          <p>Parcelar em até 4x sem juros</p>
          <button>Finalizar Compra</button>
          <p>ou</p>
          <button>Continuar Comprando</button>
          <p>Compra 100% Segura</p>


        </div>
      </aside>

    </div>

  </div>

</main>
@endsection