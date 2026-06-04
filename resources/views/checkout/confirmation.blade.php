@extends('_layouts.app')

@section('title', 'Pedido Confirmado | UseTatiModas')

@section('content')
<main class="px-4 md:px-12 lg:px-24 py-6 md:py-12">
  <div class="max-w-2xl mx-auto flex flex-col gap-6">

    <div class="flex flex-col items-center gap-3 text-center">
      <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center">
        <x-heroicon-o-check-badge class="w-9 h-9 text-green-600" />
      </div>
      <h1 class="text-2xl md:text-3xl font-bold text-gray-800">Pedido Confirmado!</h1>
      <p class="text-gray-500 text-sm">Pedido <span class="font-semibold text-gray-800">#{{ str_pad($order->id, 6, '0', STR_PAD_LEFT) }}</span> realizado com sucesso.</p>
    </div>

    <div class="bg-white rounded-xl shadow-md shadow-gold-medium/20 p-6 flex flex-col gap-4">

      @if($payment === 'pix')
      <div class="flex flex-col items-center gap-4">
        <h2 class="font-bold text-lg text-gray-800">Pague via PIX</h2>
        <p class="text-sm text-gray-500 text-center">Escaneie o QR Code ou copie a chave abaixo para concluir o pagamento.</p>

        <div class="p-3 border-2 border-gold-medium rounded-xl bg-white">
          <img src="https://api.qrserver.com/v1/create-qr-code/?size=200x200&data={{ urlencode('00020126580014br.gov.bcb.pix0136contato@usetatimodas.com.br5204000053039865802BR5925UseTatiModas6009SAO PAULO62070503***6304') }}"
            alt="QR Code PIX" class="w-48 h-48">
        </div>

        <div class="w-full flex flex-col gap-2">
          <p class="text-xs text-gray-500 text-center font-medium uppercase tracking-wide">Chave PIX</p>
          <div class="flex items-center gap-2 bg-gray-50 border border-gray-200 rounded-lg p-3">
            <span id="pix-key" class="flex-1 text-sm text-gray-800 font-mono break-all">contato@usetatimodas.com.br</span>
            <button type="button" onclick="copyPix()"
              class="shrink-0 px-3 py-1.5 bg-gray-900 text-white text-xs rounded-md hover:bg-gold-medium transition-colors flex items-center gap-1">
              <x-heroicon-o-clipboard class="w-3.5 h-3.5" />
              <span id="copy-btn-text">Copiar</span>
            </button>
          </div>
        </div>

        <div class="w-full bg-yellow-50 border border-yellow-200 rounded-lg p-3 text-xs text-yellow-700 text-center">
          Após o pagamento, seu pedido será processado automaticamente em até 5 minutos.
        </div>
      </div>

      @elseif($payment === 'credit')
      <div class="flex flex-col items-center gap-4 text-center">
        <x-heroicon-o-credit-card class="w-12 h-12 text-gold-dark" />
        <h2 class="font-bold text-lg text-gray-800">Cartão de Crédito</h2>
        <p class="text-sm text-gray-500">Nossa equipe entrará em contato para processar o pagamento via cartão.<br>Ou acesse o WhatsApp para agilizar.</p>
        <a href="https://api.whatsapp.com/send/?phone=5511978936260&text={{ urlencode('Olá! Quero pagar o pedido #' . str_pad($order->id, 6, '0', STR_PAD_LEFT) . ' via cartão de crédito.') }}"
          target="_blank"
          class="px-6 py-2.5 bg-green-500 text-white rounded-md hover:bg-green-600 transition-colors text-sm font-medium flex items-center gap-2">
          <x-heroicon-o-chat-bubble-left-ellipsis class="w-4 h-4" />
          Continuar pelo WhatsApp
        </a>
      </div>

      @elseif($payment === 'boleto')
      <div class="flex flex-col items-center gap-4 text-center">
        <x-heroicon-o-document-text class="w-12 h-12 text-gold-dark" />
        <h2 class="font-bold text-lg text-gray-800">Boleto Bancário</h2>
        <p class="text-sm text-gray-500">O boleto será enviado para o seu e-mail em breve.<br>Vencimento em 3 dias úteis.</p>
        <div class="w-full bg-blue-50 border border-blue-200 rounded-lg p-3 text-xs text-blue-700 text-center">
          Verifique sua caixa de entrada: <span class="font-semibold">{{ auth()->user()->email }}</span>
        </div>
      </div>
      @endif

    </div>

    <div class="bg-white rounded-xl shadow-md shadow-gold-medium/20 p-6 flex flex-col gap-3">
      <h2 class="font-semibold text-gray-800 border-b border-gray-100 pb-3">Resumo do Pedido</h2>
      <div class="flex justify-between text-sm text-gray-600">
        <span>Produtos</span>
        <span class="text-gray-800 text-right max-w-xs truncate">{{ $order->products }}</span>
      </div>
      <div class="flex justify-between text-sm text-gray-600">
        <span>Frete</span>
        <span class="text-green-600 font-medium">Grátis</span>
      </div>
      <div class="flex justify-between font-bold text-base border-t border-dashed border-gray-200 pt-3">
        <span>Total</span>
        <span class="text-gold-dark">R$ {{ number_format($order->total, 2, ',', '.') }}</span>
      </div>
    </div>

    <div class="flex flex-col sm:flex-row gap-3">
      <a href="{{ route('orders.index') }}"
        class="flex-1 flex items-center justify-center gap-2 px-6 py-3 bg-white border-2 border-gray-900 text-gray-900 text-sm font-medium rounded-md hover:bg-gray-900 hover:text-white transition-colors">
        <x-heroicon-o-shopping-bag class="w-4 h-4" />
        Meus Pedidos
      </a>
      <a href="/"
        class="flex-1 flex items-center justify-center gap-2 px-6 py-3 bg-gray-900 text-white text-sm font-medium rounded-md hover:bg-gold-medium transition-colors">
        <x-heroicon-o-home class="w-4 h-4" />
        Voltar à Loja
      </a>
    </div>

  </div>
</main>

@if($payment === 'pix')
<script>
  function copyPix() {
    const key = document.getElementById('pix-key').textContent.trim();
    navigator.clipboard.writeText(key).then(() => {
      const btn = document.getElementById('copy-btn-text');
      btn.textContent = 'Copiado!';
      setTimeout(() => btn.textContent = 'Copiar', 2000);
    });
  }
</script>
@endif
@endsection