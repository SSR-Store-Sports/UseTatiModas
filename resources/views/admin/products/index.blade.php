@extends('_layouts.app')

@section('title', 'Produtos: UseTatiModas Admin')

@section('content')
<main class="px-4 md:px-8 lg:px-24 py-6 md:py-12">
  <div class="max-w-7xl mx-auto">
    <div class="flex flex-col gap-4">
      <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
        <h1 class="text-2xl md:text-3xl font-bold tracking-tight text-gray-800">Gerenciar Produtos</h1>

        <div class="flex gap-2">
          <a href="{{ route('admin.products.create') }}" class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600 transition-colors text-sm font-medium flex items-center gap-2">
            <x-heroicon-o-plus class="w-4 h-4" />
            Novo Produto
          </a>
          <button class="px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gold-dark transition-colors text-sm font-medium flex items-center gap-2">
            <x-heroicon-o-arrow-path class="w-4 h-4" />
            Atualizar
          </button>
        </div>
      </div>

      <div class="space-y-2.5">
        <div class="flex flex-col sm:flex-row gap-2">
          <input
            type="text"
            placeholder="Buscar por nome ou SKU"
            class="flex-1 px-4 py-2 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-[#F1C24A] hover:bg-white focus:border-gold-medium focus:bg-white focus:ring-2 focus:ring-[#C79B2B]/20">

          <select class="px-4 py-2 rounded-md border border-gray-200 bg-gray-50 text-gray-800 text-sm outline-none transition-all duration-200 hover:border-[#F1C24A] hover:bg-white focus:border-gold-medium focus:bg-white focus:ring-2 focus:ring-[#C79B2B]/20">
            <option value="">Todas categorias</option>
            <option value="1">Moda Feminina</option>
            <option value="2">Moda Masculina</option>
            <option value="3">Acessórios</option>
          </select>

          <select class="px-4 py-2 rounded-md border border-gray-200 bg-gray-50 text-gray-800 text-sm outline-none transition-all duration-200 hover:border-[#F1C24A] hover:bg-white focus:border-gold-medium focus:bg-white focus:ring-2 focus:ring-[#C79B2B]/20">
            <option value="">Todos status</option>
            <option value="active">Ativo</option>
            <option value="inactive">Inativo</option>
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
              Ativar selecionados
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
                  <th class="px-4 py-3 text-left font-medium text-gray-700">Imagem</th>
                  <th class="px-4 py-3 text-left font-medium text-gray-700">Nome</th>
                  <th class="px-4 py-3 text-left font-medium text-gray-700">SKU</th>
                  <th class="px-4 py-3 text-left font-medium text-gray-700">Categoria</th>
                  <th class="px-4 py-3 text-left font-medium text-gray-700">Preço</th>
                  <th class="px-4 py-3 text-left font-medium text-gray-700">Estoque</th>
                  <th class="px-4 py-3 text-left font-medium text-gray-700">Status</th>
                  <th class="px-4 py-3 text-center font-medium text-gray-700 w-48">Ações</th>
                </tr>
              </thead>

              <tbody class="divide-y divide-gray-100">
                @forelse ($products as $product)
                <tr class="hover:bg-gray-100/40 transition-colors">
                  <td class="px-4 py-4">
                    <input type="checkbox" class="w-4 h-4 accent-[#C79B2B] rounded">
                  </td>

                  <td class="px-4 py-4">
                    @if ($product->primaryImage)
                    <img src="{{ asset('storage/' . $product->primaryImage->image) }}"
                      class="w-12 h-12 rounded-md object-cover border border-gray-200"
                      alt="{{ $product->name }}">
                    @else
                    <div class="w-12 h-12 rounded-md bg-gray-100 border border-gray-200 flex items-center justify-center">
                      <x-heroicon-o-photo class="w-5 h-5 text-gray-400" />
                    </div>
                    @endif
                  </td>


                  <td class="px-4 py-4">
                    <div class="flex flex-col">
                      <span class="font-semibold text-gray-800">{{ $product->name ?? 'Conjunto Delicado' }}</span>
                      <span class="text-xs text-gray-500 line-clamp-1">{{ $product->description ?? 'Descrição do produto' }}</span>
                    </div>
                  </td>

                  <td class="px-4 py-4 font-mono text-xs text-gray-600">
                    {{ $product->sku ?? 'SKU-001' }}
                  </td>

                  <td class="px-4 py-4 text-gray-600">
                    {{ $product->category->name ?? 'Moda Feminina' }}
                  </td>

                  <td class="px-4 py-4 font-semibold text-gray-800">
                    R$ {{ number_format($product->price ?? 299.90, 2, ',', '.') }}
                  </td>

                  <td class="px-4 py-4">
                    <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium
                        @if(($product->stock ?? 10) > 10) bg-green-100 text-green-700
                        @elseif(($product->stock ?? 10) > 0) bg-yellow-100 text-yellow-700
                        @else bg-red-100 text-red-700
                        @endif">
                      {{ $product->stock ?? 10 }} un.
                    </span>
                  </td>

                  <td class="px-4 py-4">
                    <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium
                        @if(($product->status ?? 'active') == 'active') bg-green-100 text-green-700
                        @else bg-red-100 text-red-700
                        @endif">
                      {{ ($product->status ?? 'active') == 'active' ? 'Ativo' : 'Inativo' }}
                    </span>
                  </td>

                  <td class="px-4 py-4">
                    <div class="flex items-center justify-center gap-1">
                      <a href="{{ route('admin.products.show', $product->id) }}" class="p-2 text-blue-600 hover:bg-blue-50 rounded-md transition-colors" title="Visualizar">
                        <x-heroicon-o-eye class="w-4 h-4" />
                      </a>

                      <a href="{{ route('admin.products.edit', $product->id) }}" class="p-2 text-green-600 hover:bg-green-50 rounded-md transition-colors" title="Editar">
                        <x-heroicon-o-pencil-square class="w-4 h-4" />
                      </a>

                      <button class="p-2 text-purple-600 hover:bg-purple-50 rounded-md transition-colors" title="Duplicar">
                        <x-heroicon-o-document-duplicate class="w-4 h-4" />
                      </button>

                      <form method="POST" action="{{ route('admin.products.destroy', $product->id) }}" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="p-2 text-red-600 hover:bg-red-50 rounded-md transition-colors" onclick="return confirm('Tem certeza que deseja excluir este produto?')" title="Excluir">
                          <x-heroicon-o-trash class="w-4 h-4" />
                        </button>
                      </form>
                    </div>
                  </td>
                </tr>
                @empty
                <tr>
                  <td colspan="9" class="px-4 py-12 text-center">
                    <div class="flex flex-col items-center gap-2">
                      <x-heroicon-o-inbox class="w-12 h-12 text-gray-300" />
                      <p class="text-gray-500 font-medium">Nenhum produto encontrado</p>
                      <p class="text-gray-400 text-xs">Adicione produtos para começar</p>
                    </div>
                  </td>
                </tr>
                @endforelse
              </tbody>
            </table>
          </div>
        </div>

        @if($products->hasPages())
        <div class="flex flex-col sm:flex-row items-center justify-between gap-4 text-sm text-gray-600">
          <div>
            Mostrando <span class="font-medium">{{ $products->firstItem() }}</span> a <span class="font-medium">{{ $products->lastItem() }}</span> de <span class="font-medium">{{ $products->total() }}</span> resultados
          </div>

          <div class="flex gap-2">
            @if ($products->onFirstPage())
            <span class="px-3 py-2 rounded-md bg-gray-100 text-gray-400 cursor-not-allowed">Anterior</span>
            @else
            <a href="{{ $products->previousPageUrl() }}" class="px-3 py-2 rounded-md bg-white border border-gray-200 text-gray-700 hover:bg-gray-50 transition-colors">Anterior</a>
            @endif

            @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
            @if ($page == $products->currentPage())
            <span class="px-3 py-2 rounded-md bg-gray-500 text-white font-medium">{{ $page }}</span>
            @else
            <a href="{{ $url }}" class="px-3 py-2 rounded-md bg-white border border-gray-200 text-gray-700 hover:bg-gray-50 transition-colors">{{ $page }}</a>
            @endif
            @endforeach

            @if ($products->hasMorePages())
            <a href="{{ $products->nextPageUrl() }}" class="px-3 py-2 rounded-md bg-white border border-gray-200 text-gray-700 hover:bg-gray-50 transition-colors">Próximo</a>
            @else
            <span class="px-3 py-2 rounded-md bg-gray-100 text-gray-400 cursor-not-allowed">Próximo</span>
            @endif
          </div>
        </div>
        @endif
      </div>
    </div>
  </div>
</main>
@endsection