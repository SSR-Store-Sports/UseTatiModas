@extends('_layouts.app')

@section('title', 'Dashboard: UseTatiModas')

@section('content')
  <main class="h-full">
    <div class="flex mx-24 justify-center">
      <aside>
        <h1>Menu</h1>

        <div></div>
      </aside>

      <main>
        <h2>Dashboard</h2>

        <div>
          <section>
            <a href="">Home</a>
            <a href="">Produtos</a>
            <a href="">Categorias</a>
            <a href="">Estoque</a>
          </section>

          <span></span>

          <section>
            <div class="grid grid-cols-3">
              <div>
                <p>
                  <h3>Receita total (mês)</h3>
                  <img src="" alt="">
                </p>

                <div>
                  <span>R$ 1248,68</span>
                  <span>+2% em relação ao mês passado</span>
                </div>
              </div>

              <div>
                <p>
                  <h3>Pedidos (mês)</h3>
                  <img src="" alt="">
                </p>

                <div>
                  <span>250</span>
                  <span>+6% em relação ao mês passado</span>
                </div>
              </div>

              <div>
                <p>
                  <h3>Pedidos (dia)</h3>
                  <img src="" alt="">
                </p>

                <div>
                  <span>12</span>
                  <span>-4% em relação a ontem</span>
                </div>
              </div>

              <div>
                <p>
                  <h3>Cancelamentos (mês)</h3>
                  <img src="" alt="">
                </p>

                <div>
                  <span>32</span>
                  <span>+2% em relação ao mês passado</span>
                </div>
              </div>
            </div>

            <div class="grid grid-cols-2">
              <div>
                <h3>Cancelamento (mês)</h3>
                <p>Em breve</p>
              </div>

              <div>
                <h3>Produtos populares</h3>
                <p>Em breve</p>
              </div>
            </div>
          </section>
        </div>
      </main>
    </div>

    <x-discounts />
  </main>
@endsection