@extends('_layouts.app')

@section('title', 'Meus Pedidos: UseTatiModas')

@section('content')
  <main class="h-full">
    <div class="flex mx-24 justify-center">
      <h1>Meus Pedidos</h1>
      <span></span>

      <section>
        <div>
          <h1>Pedido <span>PED000013 - 05/12/2025</span></h1>
          <button>DETALHES</button>
        </div>

        <div>
          <p>
            Total: <span>749,7</span>
            Item(s): <span>3</span>
          </p>

          <span>Em preparação</span>
        </div>

        <span></span>

        <div>
          <h2>Itens do Pedido</h2>

          <div class="grid grid-cols-3">
            @for($i = 0; $i < 3; $i++)
              <div>
                <img src="" alt="">

                <div>
                  <h3>Conjuto delicado</h3>
                  <p>Quantidade: 2</p>
                  <p>Preço: R$ 249,50</p>
                </div>
              </div>
            @endfor
          </div>

          <div>
            <a href="">SUPORTE</a>
          </div>
        </div>
      </section>
    </div>
  </main>
@endsection