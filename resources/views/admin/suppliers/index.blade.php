@extends('_layouts.app')

@section('title', 'Fornecedores: UseTatiModas Admin')

@section('content')
  <main class="px-4 md:px-8 lg:px-24 py-6 md:py-12">
    <div class="max-w-7xl mx-auto">
      <div class="flex flex-col gap-4">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
          <div class="flex items-center gap-3">
            <a href="{{ route('admin.dashboard') }}" class="p-2 bg-gray-100 text-gray-600 rounded-md hover:bg-gray-200 transition-colors" title="Voltar ao dashboard">
              <x-heroicon-o-arrow-left class="w-4 h-4" />
            </a>
            <h1 class="text-2xl md:text-3xl font-bold tracking-tight text-gray-800">Gerenciar Fornecedores</h1>
          </div>
          <a href="{{ route('admin.suppliers.create') }}" class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600 transition-colors text-sm font-medium flex items-center gap-2">
            <x-heroicon-o-plus class="w-4 h-4" />
            Novo Fornecedor
          </a>
        </div>

        <div class="space-y-2.5">
          <form method="GET" action="{{ route('admin.suppliers') }}" class="flex flex-col sm:flex-row gap-2">
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Buscar por nome ou CNPJ"
              class="flex-1 px-4 py-2 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-[#F1C24A] hover:bg-white focus:border-gold-medium focus:bg-white focus:ring-2 focus:ring-[#C79B2B]/20">
            <select name="status" class="px-4 py-2 rounded-md border border-gray-200 bg-gray-50 text-gray-800 text-sm outline-none transition-all duration-200 hover:border-[#F1C24A] hover:bg-white focus:border-gold-medium focus:bg-white focus:ring-2 focus:ring-[#C79B2B]/20">
              <option value="">Todos status</option>
              <option value="active" {{ request('status') == 'active' ? 'selected' : '' }}>Ativo</option>
              <option value="inactive" {{ request('status') == 'inactive' ? 'selected' : '' }}>Inativo</option>
            </select>
            <button type="submit" class="px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gold-dark transition-colors text-sm font-medium flex items-center gap-2">
              <x-heroicon-o-funnel class="w-4 h-4" /> Filtrar
            </button>
            <a href="{{ route('admin.suppliers') }}" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300 transition-colors text-sm font-medium flex items-center gap-2">
              <x-heroicon-o-x-mark class="w-4 h-4" /> Limpar
            </a>
          </form>

          {{-- <div class="flex items-center gap-2 p-3 bg-gray-50 rounded-md border border-gray-200">
            <input type="checkbox" id="select-all" class="w-4 h-4 accent-[#C79B2B] rounded">
            <label for="select-all" class="text-sm text-gray-600 cursor-pointer">Selecionar todos</label>
            <div class="flex gap-2 ml-auto">
              <button class="px-3 py-1.5 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition-colors text-xs font-medium flex items-center gap-1">
                <x-heroicon-o-check-circle class="w-4 h-4" /> Ativar selecionados
              </button>
              <button class="px-3 py-1.5 bg-red-500 text-white rounded-md hover:bg-red-600 transition-colors text-xs font-medium flex items-center gap-1">
                <x-heroicon-o-trash class="w-4 h-4" /> Excluir selecionados
              </button>
            </div>
          </div> --}}

          <div class="rounded-md border border-gray-200 bg-white overflow-hidden">
            <div class="overflow-x-auto">
              <table class="w-full text-sm">
                <thead>
                  <tr class="border-b border-gray-200 bg-gray-50">
                    <th class="px-4 py-3 text-left font-medium text-gray-700 w-16">
                      <input type="checkbox" class="w-4 h-4 accent-[#C79B2B] rounded">
                    </th>
                    <th class="px-4 py-3 text-left font-medium text-gray-700">ID</th>
                    <th class="px-4 py-3 text-left font-medium text-gray-700">Nome</th>
                    <th class="px-4 py-3 text-left font-medium text-gray-700">CNPJ</th>
                    <th class="px-4 py-3 text-left font-medium text-gray-700">Contato</th>
                    <th class="px-4 py-3 text-left font-medium text-gray-700">Cidade/Estado</th>
                    <th class="px-4 py-3 text-left font-medium text-gray-700">Status</th>
                    <th class="px-4 py-3 text-left font-medium text-gray-700">Criado há</th>
                    <th class="px-4 py-3 text-center font-medium text-gray-700 w-48">Ações</th>
                  </tr>
                </thead>

                <tbody class="divide-y divide-gray-100">
                  @forelse ($suppliers as $supplier)
                    <tr class="hover:bg-gray-100/40 transition-colors">
                      <td class="px-4 py-4">
                        <input type="checkbox" class="w-4 h-4 accent-[#C79B2B] rounded">
                      </td>

                      <td class="px-4 py-4 font-mono text-xs text-gray-600">
                        #{{ str_pad($supplier->id, 3, '0', STR_PAD_LEFT) }}
                      </td>

                      <td class="px-4 py-4">
                        <div class="flex items-center gap-2">
                          <div class="w-8 h-8 rounded-full bg-purple-100 flex items-center justify-center">
                            <x-heroicon-o-building-storefront class="w-4 h-4 text-purple-600" />
                          </div>
                          <span class="font-semibold text-gray-800">{{ $supplier->name ?? 'Fornecedor XYZ Ltda' }}</span>
                        </div>
                      </td>

                      <td class="px-4 py-4 font-mono text-xs text-gray-600">
                        {{ $supplier->cnpj ?? '12.345.678/0001-90' }}
                      </td>

                      <td class="px-4 py-4">
                        <div class="flex flex-col">
                          <span class="text-gray-800">{{ $supplier->phone ?? '(11) 98765-4321' }}</span>
                          <span class="text-xs text-gray-500">{{ $supplier->email ?? 'contato@fornecedor.com' }}</span>
                        </div>
                      </td>

                      <td class="px-4 py-4 text-gray-600">
                        {{ $supplier->city ?? 'São Paulo' }}/{{ $supplier->state ?? 'SP' }}
                      </td>

                      <td class="px-4 py-4">
                        <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium
                            @if(($supplier->status ?? 'active') == 'active') bg-green-100 text-green-700 
                            @else bg-red-100 text-red-700
                            @endif">
                          {{ ($supplier->status ?? 'active') == 'active' ? 'Ativo' : 'Inativo' }}
                        </span>
                      </td>

                      <td class="px-4 py-4 text-gray-500">
                        <div class="flex flex-col">
                          <span>{{ $supplier->created_at ? $supplier->created_at->diffForHumans() : '2 meses atrás' }}</span>
                          <span
                            class="text-xs text-gray-400">{{ $supplier->created_at ? $supplier->created_at->format('d/m/Y') : '01/10/2025' }}</span>
                        </div>
                      </td>

                      <td class="px-4 py-4">
                        <div class="flex items-center justify-center gap-1">
                          <a href="{{ route('admin.suppliers.show', $supplier->id) }}"
                            class="p-2 text-blue-600 hover:bg-blue-50 rounded-md transition-colors" title="Visualizar">
                            <x-heroicon-o-eye class="w-4 h-4" />
                          </a>

                          <a href="{{ route('admin.suppliers.edit', $supplier->id) }}"
                            class="p-2 text-green-600 hover:bg-green-50 rounded-md transition-colors" title="Editar">
                            <x-heroicon-o-pencil-square class="w-4 h-4" />
                          </a>

                          <button class="p-2 text-purple-600 hover:bg-purple-50 rounded-md transition-colors"
                            title="Enviar email">
                            <x-heroicon-o-envelope class="w-4 h-4" />
                          </button>

                          <form id="delete-supplier-{{ $supplier->id }}" method="POST" action="{{ route('admin.suppliers.destroy', $supplier->id) }}" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="button" onclick="confirmDelete('delete-supplier-{{ $supplier->id }}', 'Tem certeza que deseja excluir o fornecedor \'{{ addslashes($supplier->name) }}\'?')" class="p-2 text-red-600 hover:bg-red-50 rounded-md transition-colors" title="Excluir">
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
                          <p class="text-gray-500 font-medium">Nenhum fornecedor encontrado</p>
                          <p class="text-gray-400 text-xs">Adicione fornecedores para gerenciar seus produtos</p>
                        </div>
                      </td>
                    </tr>
                  @endforelse
                </tbody>
              </table>
            </div>
          </div>

          @if($suppliers->hasPages())
            <div class="flex flex-col sm:flex-row items-center justify-between gap-4 text-sm text-gray-600">
              <div>
                Mostrando <span class="font-medium">{{ $suppliers->firstItem() }}</span> a <span
                  class="font-medium">{{ $suppliers->lastItem() }}</span> de <span
                  class="font-medium">{{ $suppliers->total() }}</span> resultados
              </div>

              <div class="flex gap-2">
                @if ($suppliers->onFirstPage())
                  <span class="px-3 py-2 rounded-md bg-gray-100 text-gray-400 cursor-not-allowed">Anterior</span>
                @else
                  <a href="{{ $suppliers->previousPageUrl() }}"
                    class="px-3 py-2 rounded-md bg-white border border-gray-200 text-gray-700 hover:bg-gray-50 transition-colors">Anterior</a>
                @endif

                @foreach ($suppliers->getUrlRange(1, $suppliers->lastPage()) as $page => $url)
                  @if ($page == $suppliers->currentPage())
                    <span class="px-3 py-2 rounded-md bg-gray-500 text-white font-medium">{{ $page }}</span>
                  @else
                    <a href="{{ $url }}"
                      class="px-3 py-2 rounded-md bg-white border border-gray-200 text-gray-700 hover:bg-gray-50 transition-colors">{{ $page }}</a>
                  @endif
                @endforeach

                @if ($suppliers->hasMorePages())
                  <a href="{{ $suppliers->nextPageUrl() }}"
                    class="px-3 py-2 rounded-md bg-white border border-gray-200 text-gray-700 hover:bg-gray-50 transition-colors">Próximo</a>
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

