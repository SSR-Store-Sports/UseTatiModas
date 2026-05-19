@extends('_layouts.app')

@section('title', 'Pedidos: UseTatiModas Admin')

@section('content')
<main class="px-4 md:px-8 lg:px-24 py-6 md:py-12">
  <div class="max-w-7xl mx-auto">
    <div class="flex flex-col gap-4">
      <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
        <h1 class="text-2xl md:text-3xl font-bold tracking-tight text-gray-800">Gerenciar Pedidos</h1>
        
        <div class="flex gap-2">
          <button class="px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gold-dark transition-colors text-sm font-medium flex items-center gap-2">
            <x-heroicon-o-arrow-path class="w-4 h-4" />
            Atualizar
          </button>
          <button class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600 transition-colors text-sm font-medium flex items-center gap-2">
            <x-heroicon-o-document-arrow-down class="w-4 h-4" />
            Exportar
          </button>
        </div>
      </div>
      
      <div class="space-y-2.5">
        <div class="flex flex-col sm:flex-row gap-2">
          <input 
            type="text" 
            placeholder="Buscar por ID, cliente ou produto" 
            class="flex-1 px-4 py-2 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-[#F1C24A] hover:bg-white focus:border-gold-medium focus:bg-white focus:ring-2 focus:ring-[#C79B2B]/20">
          
          <select class="px-4 py-2 rounded-md border border-gray-200 bg-gray-50 text-gray-800 text-sm outline-none transition-all duration-200 hover:border-[#F1C24A] hover:bg-white focus:border-gold-medium focus:bg-white focus:ring-2 focus:ring-[#C79B2B]/20">
            <option value="">Todos os status</option>
            <option value="pending">Pendente</option>
            <option value="processing">Processando</option>
            <option value="shipped">Enviado</option>
            <option value="delivered">Entregue</option>
            <option value="cancelled">Cancelado</option>
          </select>

          <select class="px-4 py-2 rounded-md border border-gray-200 bg-gray-50 text-gray-800 text-sm outline-none transition-all duration-200 hover:border-[#F1C24A] hover:bg-white focus:border-gold-medium focus:bg-white focus:ring-2 focus:ring-[#C79B2B]/20">
            <option value="">Período</option>
            <option value="today">Hoje</option>
            <option value="week">Última semana</option>
            <option value="month">Último mês</option>
            <option value="year">Último ano</option>
          </select>

          <button class="px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gold-dark transition-colors text-sm font-medium">
            <span class="flex items-center gap-2">
              <x-heroicon-o-funnel class="w-4 h-4" />
              Filtrar
            </span>
          </button>

          <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300 transition-colors text-sm font-medium">
            <span class="flex items-center gap-2">
              <x-heroicon-o-x-mark class="w-4 h-4" />
              Limpar
            </span>
          </button>
        </div>

        <div class="flex items-center gap-2 p-3 bg-gray-50 rounded-md border border-gray-200">
          <input type="checkbox" id="select-all" class="w-4 h-4 accent-[#C79B2B] rounded">
          <label for="select-all" class="text-sm text-gray-600 cursor-pointer">Selecionar todos</label>
          
          <div class="flex gap-2 ml-auto">
            <button class="px-3 py-1.5 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition-colors text-xs font-medium flex items-center gap-1">
              <x-heroicon-o-check-circle class="w-4 h-4" />
              Aprovar selecionados
            </button>
            <button class="px-3 py-1.5 bg-red-500 text-white rounded-md hover:bg-red-600 transition-colors text-xs font-medium flex items-center gap-1">
              <x-heroicon-o-trash class="w-4 h-4" />
              Excluir selecionados
            </button>
          </div>
        </div>

        <div class="rounded-md border border-gray-200 bg-white overflow-hidden">
          <div class="overflow-x-auto">
            <table class="w-full text-sm">
              <thead>
                <tr class="border-b border-gray-200 bg-gray-50">
                  <th class="px-4 py-3 text-left font-medium text-gray-700 w-16">
                    <input type="checkbox" class="w-4 h-4 accent-[#C79B2B] rounded">
                  </th>
                  <th class="px-4 py-3 text-left font-medium text-gray-700">ID</th>
                  <th class="px-4 py-3 text-left font-medium text-gray-700">Cliente</th>
                  <th class="px-4 py-3 text-left font-medium text-gray-700">Produtos</th>
                  <th class="px-4 py-3 text-left font-medium text-gray-700">Total</th>
                  <th class="px-4 py-3 text-left font-medium text-gray-700">Status</th>
                  <th class="px-4 py-3 text-left font-medium text-gray-700">Criado há</th>
                  <th class="px-4 py-3 text-center font-medium text-gray-700 w-48">Ações</th>
                </tr>
              </thead>

              <tbody class="divide-y divide-gray-100">
                @forelse ($orders as $order)
                  <tr class="hover:bg-gray-100/40 transition-colors">
                    <td class="px-4 py-4">
                      <input type="checkbox" class="w-4 h-4 accent-[#C79B2B] rounded">
                    </td>

                    <td class="px-4 py-4 font-mono text-xs text-gray-600">
                      #{{ str_pad($order->id, 6, '0', STR_PAD_LEFT) }}
                    </td>

                    <td class="px-4 py-4">
                      <div class="flex flex-col">
                        <span class="font-semibold text-gray-800">{{ $order->customer_name ?? 'Cliente' }}</span>
                        <span class="text-xs text-gray-500">{{ $order->customer_email ?? 'email@exemplo.com' }}</span>
                      </div>
                    </td>

                    <td class="px-4 py-4 text-gray-600">
                      <div class="flex flex-col">
                        <span class="font-medium">{{ $order->products_count ?? 2 }} item(ns)</span>
                        <span class="text-xs text-gray-500">{{ $order->products ?? 'Conjunto Delicado, Calça...' }}</span>
                      </div>
                    </td>

                    <td class="px-4 py-4 font-semibold text-gray-800">
                      R$ {{ number_format($order->total ?? 249.90, 2, ',', '.') }}
                    </td>

                    <td class="px-4 py-4">
                      <select class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium border-0 outline-none cursor-pointer
                        @if(($order->status ?? 'pending') == 'delivered') bg-green-100 text-green-700
                        @elseif(($order->status ?? 'pending') == 'shipped') bg-blue-100 text-blue-700
                        @elseif(($order->status ?? 'pending') == 'processing') bg-yellow-100 text-yellow-700
                        @elseif(($order->status ?? 'pending') == 'cancelled') bg-red-100 text-red-700
                        @else bg-gray-100 text-gray-700
                        @endif">
                        <option value="pending" {{ ($order->status ?? 'pending') == 'pending' ? 'selected' : '' }}>Pendente</option>
                        <option value="processing" {{ ($order->status ?? 'pending') == 'processing' ? 'selected' : '' }}>Processando</option>
                        <option value="shipped" {{ ($order->status ?? 'pending') == 'shipped' ? 'selected' : '' }}>Enviado</option>
                        <option value="delivered" {{ ($order->status ?? 'pending') == 'delivered' ? 'selected' : '' }}>Entregue</option>
                        <option value="cancelled" {{ ($order->status ?? 'pending') == 'cancelled' ? 'selected' : '' }}>Cancelado</option>
                      </select>
                    </td>

                    <td class="px-4 py-4 text-gray-500">
                      <div class="flex flex-col">
                        <span>{{ $order->created_at ? $order->created_at->diffForHumans() : '2 dias atrás' }}</span>
                        <span class="text-xs text-gray-400">{{ $order->created_at ? $order->created_at->format('d/m/Y H:i') : '05/12/2025 14:30' }}</span>
                      </div>
                    </td>

                    <td class="px-4 py-4">
                      <div class="flex items-center justify-center gap-1">
                       
                        <a href="{{ route('admin.orders.show', $order->id) }}" class="p-2 text-blue-600 hover:bg-blue-50 rounded-md transition-colors" title="Visualizar detalhes">
                          <x-heroicon-o-eye class="w-4 h-4" />
                        </a>
                        
                        <a href="{{ route('admin.orders.edit', $order->id) }}" class="p-2 text-green-600 hover:bg-green-50 rounded-md transition-colors" title="Editar pedido">
                          <x-heroicon-o-pencil-square class="w-4 h-4" />
                        </a>
                        
                        <button class="p-2 text-purple-600 hover:bg-purple-50 rounded-md transition-colors" title="Imprimir pedido">
                          <x-heroicon-o-printer class="w-4 h-4" />
                        </button>
                        
                        <form method="POST" action="{{ route('admin.orders.destroy', $order->id) }}" class="inline">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="p-2 text-red-600 hover:bg-red-50 rounded-md transition-colors" onclick="return confirm('Tem certeza que deseja excluir este pedido?')" title="Excluir pedido">
                            <x-heroicon-o-trash class="w-4 h-4" />
                          </button>
                        </form>
                      </div>
                    </td>
                  </tr>
                @empty
                  <tr>
                    <td colspan="8" class="px-4 py-12 text-center">
                      <div class="flex flex-col items-center gap-2">
                        <x-heroicon-o-inbox class="w-12 h-12 text-gray-300" />
                        <p class="text-gray-500 font-medium">Nenhum pedido encontrado</p>
                        <p class="text-gray-400 text-xs">Os pedidos aparecerão aqui quando forem criados</p>
                      </div>
                    </td>
                  </tr>
                @endforelse
              </tbody>
            </table>
          </div>
        </div>

        @if($orders->hasPages())
        <div class="flex flex-col sm:flex-row items-center justify-between gap-4 text-sm text-gray-600">
          <div>
            Mostrando <span class="font-medium">{{ $orders->firstItem() }}</span> a <span class="font-medium">{{ $orders->lastItem() }}</span> de <span class="font-medium">{{ $orders->total() }}</span> resultados
          </div>
          
          <div class="flex gap-2">
            @if ($orders->onFirstPage())
              <span class="px-3 py-2 rounded-md bg-gray-100 text-gray-400 cursor-not-allowed">
                Anterior
              </span>
            @else
              <a href="{{ $orders->previousPageUrl() }}" class="px-3 py-2 rounded-md bg-white border border-gray-200 text-gray-700 hover:bg-gray-50 transition-colors">
                Anterior
              </a>
            @endif

            @foreach ($orders->getUrlRange(1, $orders->lastPage()) as $page => $url)
              @if ($page == $orders->currentPage())
                <span class="px-3 py-2 rounded-md bg-gray-500 text-white font-medium">
                  {{ $page }}
                </span>
              @else
                <a href="{{ $url }}" class="px-3 py-2 rounded-md bg-white border border-gray-200 text-gray-700 hover:bg-gray-50 transition-colors">
                  {{ $page }}
                </a>
              @endif
            @endforeach

            @if ($orders->hasMorePages())
              <a href="{{ $orders->nextPageUrl() }}" class="px-3 py-2 rounded-md bg-white border border-gray-200 text-gray-700 hover:bg-gray-50 transition-colors">
                Próximo
              </a>
            @else
              <span class="px-3 py-2 rounded-md bg-gray-100 text-gray-400 cursor-not-allowed">
                Próximo
              </span>
            @endif
          </div>
        </div>
        @endif
      </div>
    </div>
  </div>
</main>
@endsection

