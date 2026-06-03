@extends('_layouts.app')

@section('title', __('checkout') . ': UseTatiModas')

@section('content')
<main class="px-4 md:px-12 lg:px-24 py-6 md:py-12">
  <div class="max-w-screen-2xl mx-auto">
    <div class="grid grid-rows-[auto_1fr] gap-4 md:gap-6">
      <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center border-b border-gray-200 pb-3 md:pb-4 gap-2">
        <div class="flex items-center gap-1.5">
          <x-heroicon-o-shopping-bag class="w-5 h-5 text-gold-dark" />
          <h1 class="font-bold text-xl md:text-2xl text-gold-dark">@lang('checkout')</h1>
        </div>
        <a href="{{ route('cart.index') }}" class="text-xs md:text-sm text-gray-500 hover:text-gold-dark transition-colors">
          <x-heroicon-o-arrow-left class="w-4 h-4 inline" /> Voltar ao carrinho
        </a>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 md:gap-8">
        <section class="lg:col-span-2 flex flex-col gap-4">
          <div class="bg-white rounded-xl shadow-md shadow-gold-medium/20 p-4 md:p-6">
            <div class="flex justify-between items-center mb-4">
              <h2 class="font-bold text-base md:text-lg text-gray-800">Endereço de Entrega</h2>
              <button type="button" onclick="toggleAddress()"
                class="text-xs md:text-sm text-gold-dark hover:underline font-medium">Alterar</button>
            </div>

            <div id="address-display">
              @if($user->address)
                <div class="bg-gray-50 border border-gray-200 rounded-lg p-4">
                  <p class="text-sm font-semibold text-gray-800">{{ $user->name }}</p>
                  <p class="text-sm text-gray-600 mt-1">{{ $user->address->street }}, {{ $user->address->number }}
                    @if($user->address->complement) - {{ $user->address->complement }} @endif
                  </p>
                  <p class="text-sm text-gray-600">{{ $user->address->neighborhood }} - {{ $user->address->city }}, {{ $user->address->state }} - CEP {{ $user->address->cep }}</p>
                  @if($user->phone)
                    <p class="text-sm text-gray-600 mt-2">Telefone: {{ $user->phone }}</p>
                  @endif
                </div>
              @else
                <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-4">
                  <p class="text-sm text-yellow-700">Nenhum endereço cadastrado. Clique em Alterar para preencher.</p>
                </div>
              @endif
            </div>

            <form id="address-form" action="{{ route('profile.address.update') }}" method="POST"
              style="display:none;" class="mt-4 flex flex-col gap-3">
              @csrf
              @method('PUT')
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                <div class="flex flex-col gap-1">
                  <label class="text-xs font-medium text-gray-600">CEP</label>
                  <input type="text" name="cep" value="{{ $user->address->cep ?? '' }}" placeholder="00000-000"
                    class="px-3 py-2 rounded-md border border-gray-200 bg-gray-50 text-sm outline-none focus:border-gold-medium">
                </div>
                <div class="flex flex-col gap-1">
                  <label class="text-xs font-medium text-gray-600">Telefone</label>
                  <input type="text" name="phone" value="{{ $user->phone ?? '' }}" placeholder="(11) 99999-9999"
                    class="px-3 py-2 rounded-md border border-gray-200 bg-gray-50 text-sm outline-none focus:border-gold-medium">
                </div>
              </div>
              <div class="flex flex-col gap-1">
                <label class="text-xs font-medium text-gray-600">Rua</label>
                <input type="text" name="street" value="{{ $user->address->street ?? '' }}" placeholder="Rua das Flores"
                  class="px-3 py-2 rounded-md border border-gray-200 bg-gray-50 text-sm outline-none focus:border-gold-medium">
              </div>
              <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
                <div class="flex flex-col gap-1">
                  <label class="text-xs font-medium text-gray-600">Número</label>
                  <input type="text" name="number" value="{{ $user->address->number ?? '' }}" placeholder="123"
                    class="px-3 py-2 rounded-md border border-gray-200 bg-gray-50 text-sm outline-none focus:border-gold-medium">
                </div>
                <div class="flex flex-col gap-1">
                  <label class="text-xs font-medium text-gray-600">Complemento</label>
                  <input type="text" name="complement" value="{{ $user->address->complement ?? '' }}" placeholder="Apto 10"
                    class="px-3 py-2 rounded-md border border-gray-200 bg-gray-50 text-sm outline-none focus:border-gold-medium">
                </div>
                <div class="flex flex-col gap-1">
                  <label class="text-xs font-medium text-gray-600">Bairro</label>
                  <input type="text" name="neighborhood" value="{{ $user->address->neighborhood ?? '' }}" placeholder="Centro"
                    class="px-3 py-2 rounded-md border border-gray-200 bg-gray-50 text-sm outline-none focus:border-gold-medium">
                </div>
              </div>
              <div class="grid grid-cols-2 gap-3">
                <div class="flex flex-col gap-1">
                  <label class="text-xs font-medium text-gray-600">Cidade</label>
                  <input type="text" name="city" value="{{ $user->address->city ?? '' }}" placeholder="São Paulo"
                    class="px-3 py-2 rounded-md border border-gray-200 bg-gray-50 text-sm outline-none focus:border-gold-medium">
                </div>
                <div class="flex flex-col gap-1">
                  <label class="text-xs font-medium text-gray-600">Estado</label>
                  <input type="text" name="state" value="{{ $user->address->state ?? '' }}" placeholder="SP" maxlength="2"
                    class="px-3 py-2 rounded-md border border-gray-200 bg-gray-50 text-sm outline-none focus:border-gold-medium">
                </div>
              </div>
              <div class="flex gap-2 mt-1">
                <button type="submit"
                  class="flex-1 px-4 py-2 bg-gray-900 text-white text-sm font-medium rounded-md hover:bg-gold-medium transition-colors">
                  Salvar endereço
                </button>
                <button type="button" onclick="toggleAddress()"
                  class="px-4 py-2 bg-gray-100 text-gray-700 text-sm font-medium rounded-md hover:bg-gray-200 transition-colors">
                  Cancelar
                </button>
              </div>
            </form>
          </div>
          <form action="{{ route('checkout.store') }}" method="POST" class="flex flex-col gap-4">
            @csrf
            <div class="bg-white rounded-xl shadow-md shadow-gold-medium/20 p-4 md:p-6">
              <h2 class="font-bold text-base md:text-lg text-gray-800 mb-4">Forma de Entrega</h2>
              <div class="flex flex-col gap-3">
                <label class="flex items-center gap-3 p-4 border-2 border-gray-200 rounded-lg cursor-pointer hover:border-gold-medium transition-all has-checked:border-gold-medium has-checked:bg-gold-light/5">
                  <input type="radio" name="delivery" value="standard" class="w-4 h-4 accent-gold-medium" checked>
                  <div class="flex-1">
                    <div class="flex justify-between items-start">
                      <div>
                        <p class="font-semibold text-gray-800">Entrega Padrão</p>
                        <p class="text-sm text-gray-500">Receba em até 7 dias úteis</p>
                      </div>
                      <span class="text-green-600 font-semibold">Grátis</span>
                    </div>
                  </div>
                </label>
                <label class="flex items-center gap-3 p-4 border-2 border-gray-200 rounded-lg cursor-pointer hover:border-gold-medium transition-all has-checked:border-gold-medium has-checked:bg-gold-light/5">
                  <input type="radio" name="delivery" value="express" class="w-4 h-4 accent-gold-medium">
                  <div class="flex-1">
                    <div class="flex justify-between items-start">
                      <div>
                        <p class="font-semibold text-gray-800">Entrega Expressa</p>
                        <p class="text-sm text-gray-500">Receba em até 2 dias úteis</p>
                      </div>
                      <span class="text-gray-800 font-semibold">R$ 15,00</span>
                    </div>
                  </div>
                </label>
              </div>
            </div>

            <div class="bg-white rounded-xl shadow-md shadow-gold-medium/20 p-4 md:p-6">
              <h2 class="font-bold text-base md:text-lg text-gray-800 mb-4">Forma de Pagamento</h2>
              <div class="flex flex-col gap-3">
                <label class="flex items-center gap-3 p-4 border-2 border-gray-200 rounded-lg cursor-pointer hover:border-gold-medium transition-all has-checked:border-gold-medium has-checked:bg-gold-light/5">
                  <input type="radio" name="payment" value="pix" class="w-4 h-4 accent-gold-medium" checked>
                  <x-heroicon-o-device-phone-mobile class="w-6 h-6 text-gold-dark" />
                  <div class="flex-1">
                    <p class="font-semibold text-gray-800">PIX</p>
                    <p class="text-sm text-gray-500">Aprovação imediata</p>
                  </div>
                </label>
                <label class="flex items-center gap-3 p-4 border-2 border-gray-200 rounded-lg cursor-pointer hover:border-gold-medium transition-all has-checked:border-gold-medium has-checked:bg-gold-light/5">
                  <input type="radio" name="payment" value="credit" class="w-4 h-4 accent-gold-medium">
                  <x-heroicon-o-credit-card class="w-6 h-6 text-gold-dark" />
                  <div class="flex-1">
                    <p class="font-semibold text-gray-800">Cartão de Crédito</p>
                    <p class="text-sm text-gray-500">Parcele em até 12x sem juros</p>
                  </div>
                </label>
                <label class="flex items-center gap-3 p-4 border-2 border-gray-200 rounded-lg cursor-pointer hover:border-gold-medium transition-all has-checked:border-gold-medium has-checked:bg-gold-light/5">
                  <input type="radio" name="payment" value="boleto" class="w-4 h-4 accent-gold-medium">
                  <x-heroicon-o-document-text class="w-6 h-6 text-gold-dark" />
                  <div class="flex-1">
                    <p class="font-semibold text-gray-800">Boleto Bancário</p>
                    <p class="text-sm text-gray-500">Vencimento em 3 dias úteis</p>
                  </div>
                </label>
              </div>
            </div>

            <aside class="lg:hidden">
              <button type="submit"
                class="bg-gray-900 text-white flex items-center justify-center rounded-md w-full py-3 border-2 border-transparent hover:bg-gold-medium cursor-pointer outline-none transition-all duration-200 font-medium">
                Finalizar Pedido
              </button>
            </aside>

          </form>
        </section>

        <aside class="lg:col-span-1">
          <div class="bg-white p-4 md:p-5 rounded-xl shadow-md shadow-gold-medium/20 flex flex-col gap-4 sticky top-4">
            <h2 class="font-bold text-base md:text-lg text-gold-dark border-b border-gray-200 pb-3">Resumo da Compra</h2>

            <div class="flex flex-col gap-3 max-h-80 overflow-y-auto">
              @foreach($cartItems as $productId => $item)
                <div class="flex gap-3 pb-3 border-b border-gray-100 last:border-0">
                  <img src="{{ asset($item['image']) }}" class="w-14 h-14 rounded-md object-cover bg-gray-100 border border-gray-200 shrink-0" alt="{{ $item['name'] }}">
                  <div class="flex-1 min-w-0">
                    <p class="text-sm font-semibold text-gray-800 line-clamp-2">{{ $item['name'] }}</p>
                    <p class="text-xs text-gray-500">Qtd: {{ $item['quantity'] }}</p>
                    <p class="text-sm font-bold text-gray-800 mt-1">R$ {{ number_format($item['price'] * $item['quantity'], 2, ',', '.') }}</p>
                  </div>
                </div>
              @endforeach
            </div>

            <div class="flex flex-col gap-2 text-xs md:text-sm text-gray-600">
              <div class="flex justify-between">
                <span>Produtos</span>
                <span>R$ {{ number_format($total, 2, ',', '.') }}</span>
              </div>
              <div class="flex justify-between">
                <span>Frete</span>
                <span class="text-green-600 font-medium" id="delivery-fee-label">Grátis</span>
              </div>
            </div>

            <div class="flex justify-between font-semibold text-sm md:text-base border-t border-dashed border-gold-soft pt-3">
              <span>Total</span>
              <span id="total-display">R$ {{ number_format($total, 2, ',', '.') }}</span>
            </div>

            <p class="text-xs text-gray-400 text-center">@lang('installments')</p>

            <button type="submit" form="checkout-form"
              class="bg-gray-900 text-white flex items-center justify-center rounded-md w-full py-3 border-2 border-transparent hover:bg-gold-medium cursor-pointer outline-none transition-all duration-200 font-medium">
              Finalizar Pedido
            </button>

            <p class="flex items-center justify-center gap-1 text-xs text-gray-500">
              <x-heroicon-o-check-badge class="w-4 h-4 text-green-500" />
              @lang('secure_purchase')
            </p>
          </div>
        </aside>
      </div>
    </div>
  </div>
</main>

<script>
  function toggleAddress() {
    const form = document.getElementById('address-form');
    form.style.display = form.style.display === 'none' ? 'flex' : 'none';
  }

  const baseTotal = {{ $total }};
  document.querySelectorAll('input[name="delivery"]').forEach(radio => {
    radio.addEventListener('change', function () {
      const fee = this.value === 'express' ? 15 : 0;
      document.getElementById('delivery-fee-label').textContent = fee > 0 ? 'R$ 15,00' : 'Grátis';
      document.getElementById('delivery-fee-label').className = fee > 0 ? 'font-medium text-gray-800' : 'text-green-600 font-medium';
      document.getElementById('total-display').textContent = 'R$ ' + (baseTotal + fee).toLocaleString('pt-BR', { minimumFractionDigits: 2 });
    });
  });
</script>
@endsection
