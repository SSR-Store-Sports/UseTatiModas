@extends('_layouts.app')

@section('title', 'Carrinho: UseTatiModas')

@section('content')
  <main class="h-full">
    <div class="flex mx-24 justify-center">
      <h1>Carrinho de Compras</h1>
      <span></span>

      <div>
        <section>

        </section>
        <aside>
          <div>
            <h2>Resumo de Compra</h2>

            <div>
              <p>Produto (1) <span>R$ 62,00</span></p>
              <p>Frete <span>Grátis</span></p>
            </div>

            <span></span>

            <div>
              <p>Total <span>R$ 62,00</span></p>
              <div>
                <p>em até 12x de R$ 5,17 sem juros</p>
                <button>Finalizar Compra</button>
                <span>Compra 100% Segura</span>
              </div>
            </div>
          </div>

          <div>
            <h2>Calcular Frete</h2>

            <div>
              <label for="">
                <input type="text">
                <button>Calular</button>
              </label>

              <a href="">Não sei meu CEP</a>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </main>
@endsection