@extends('_layouts.app')

@section('title', 'Usuários: UseTatiModas Admin')

@section('content')
<main class="px-4 md:px-8 lg:px-24 py-6 md:py-12">
  <div class="max-w-7xl mx-auto">
    <div class="flex flex-col gap-4">
      <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
        <div class="flex items-center gap-3">
          <a href="{{ route('admin.dashboard') }}" class="p-2 bg-gray-100 text-gray-600 rounded-md hover:bg-gray-200 transition-colors" title="Voltar ao dashboard">
            <x-heroicon-o-arrow-left class="w-4 h-4" />
          </a>
          <h1 class="text-2xl md:text-3xl font-bold tracking-tight text-gray-800">Gerenciar Usuários</h1>
        </div>
        <a href="{{ route('admin.users.create') }}" class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600 transition-colors text-sm font-medium flex items-center gap-2">
          <x-heroicon-o-plus class="w-4 h-4" />
          Novo Usuário
        </a>
      </div>

      <div class="space-y-2.5">
        <form method="GET" action="{{ route('admin.users') }}" class="flex flex-col sm:flex-row gap-2">
          <input type="text" name="search" value="{{ request('search') }}" placeholder="Buscar por nome ou email"
            class="flex-1 px-4 py-2 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-[#F1C24A] hover:bg-white focus:border-gold-medium focus:bg-white focus:ring-2 focus:ring-[#C79B2B]/20">
          <select name="status" class="px-4 py-2 rounded-md border border-gray-200 bg-gray-50 text-gray-800 text-sm outline-none transition-all duration-200 hover:border-[#F1C24A] hover:bg-white focus:border-gold-medium focus:bg-white focus:ring-2 focus:ring-[#C79B2B]/20">
            <option value="">Todos status</option>
            <option value="active" {{ request('status') == 'active' ? 'selected' : '' }}>Ativo</option>
            <option value="inactive" {{ request('status') == 'inactive' ? 'selected' : '' }}>Inativo</option>
          </select>
          <button type="submit" class="px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gold-dark transition-colors text-sm font-medium flex items-center gap-2">
            <x-heroicon-o-funnel class="w-4 h-4" /> Filtrar
          </button>
          <a href="{{ route('admin.users') }}" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300 transition-colors text-sm font-medium flex items-center gap-2">
            <x-heroicon-o-x-mark class="w-4 h-4" /> Limpar
          </a>
        </form>

        {{-- <div class="flex items-center gap-2 p-3 bg-gray-50 rounded-md border border-gray-200">
          Ativar/desativar selecionados
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
                  <th class="px-4 py-3 text-left font-medium text-gray-700">Email</th>
                  <th class="px-4 py-3 text-left font-medium text-gray-700">Função</th>
                  <th class="px-4 py-3 text-left font-medium text-gray-700">Status</th>
                  <th class="px-4 py-3 text-left font-medium text-gray-700">Criado há</th>
                  <th class="px-4 py-3 text-center font-medium text-gray-700 w-48">Ações</th>
                </tr>
              </thead>

              <tbody class="divide-y divide-gray-100">
                @forelse ($users as $user)
                <tr class="hover:bg-gray-100/40 transition-colors">
                  <td class="px-4 py-4">
                    <input type="checkbox" class="w-4 h-4 accent-[#C79B2B] rounded" {{ $user->id === auth()->id() ? 'disabled' : '' }}>
                  </td>

                  <td class="px-4 py-4 font-mono text-xs text-gray-600">
                    #{{ str_pad($user->id, 3, '0', STR_PAD_LEFT) }}
                  </td>

                  <td class="px-4 py-4">
                    <div class="flex items-center gap-2">
                      <div class="w-8 h-8 rounded-full {{ $user->role === 'admin' ? 'bg-purple-100' : 'bg-gray-100' }} flex items-center justify-center">
                        <x-heroicon-o-user class="w-4 h-4 {{ $user->role === 'admin' ? 'text-purple-600' : 'text-gray-600' }}" />
                      </div>
                      <div class="flex flex-col">
                        <span class="font-semibold text-gray-800">{{ $user->name }}</span>
                        @if($user->id === auth()->id())
                        <span class="text-xs text-blue-600 font-medium">(Você)</span>
                        @endif
                      </div>
                    </div>
                  </td>

                  <td class="px-4 py-4 text-gray-600">
                    {{ $user->email }}
                  </td>

                  <td class="px-4 py-4">
                    <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium
                        @if($user->role === 'admin') bg-purple-100 text-purple-700
                        @else bg-gray-100 text-gray-700
                        @endif">
                      {{ $user->role === 'admin' ? 'Administrador' : 'Cliente' }}
                    </span>
                  </td>

                  <td class="px-4 py-4">
                    <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium
                        @if(($user->status ?? 'active') == 'active') bg-green-100 text-green-700
                        @else bg-red-100 text-red-700
                        @endif">
                      {{ ($user->status ?? 'active') == 'active' ? 'Ativo' : 'Inativo' }}
                    </span>
                  </td>

                  <td class="px-4 py-4 text-gray-500">
                    <div class="flex flex-col">
                      <span>{{ $user->created_at->diffForHumans() }}</span>
                      <span class="text-xs text-gray-400">{{ $user->created_at->format('d/m/Y') }}</span>
                    </div>
                  </td>

                  <td class="px-4 py-4">
                    <div class="flex items-center justify-center gap-1">
                      <!-- <a href="{{ route('admin.users.show', $user->id) }}" class="p-2 text-blue-600 hover:bg-blue-50 rounded-md transition-colors" title="Visualizar">
                          <x-heroicon-o-eye class="w-4 h-4" />
                        </a> -->

                      <a href="{{ route('admin.users.edit', $user->id) }}" class="p-2 text-green-600 hover:bg-green-50 rounded-md transition-colors" title="Editar">
                        <x-heroicon-o-pencil-square class="w-4 h-4" />
                      </a>

                      @if($user->id !== auth()->id())
                      <!-- <button class="p-2 text-orange-600 hover:bg-orange-50 rounded-md transition-colors" title="Reset Senha">
                        <x-heroicon-o-key class="w-4 h-4" />
                      </button> -->

                      <form id="delete-user-{{ $user->id }}" method="POST" action="{{ route('admin.users.destroy', $user->id) }}" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="confirmDelete('delete-user-{{ $user->id }}', 'Tem certeza que deseja excluir o usuário \'{{ addslashes($user->name) }}\'?')" class="p-2 text-red-600 hover:bg-red-50 rounded-md transition-colors" title="Excluir">
                          <x-heroicon-o-trash class="w-4 h-4" />
                        </button>
                      </form>
                      @endif
                    </div>
                  </td>
                </tr>
                @empty
                <tr>
                  <td colspan="8" class="px-4 py-12 text-center">
                    <div class="flex flex-col items-center gap-2">
                      <x-heroicon-o-inbox class="w-12 h-12 text-gray-300" />
                      <p class="text-gray-500 font-medium">Nenhum usuário encontrado</p>
                      <p class="text-gray-400 text-xs">Adicione usuários para gerenciar o sistema</p>
                    </div>
                  </td>
                </tr>
                @endforelse
              </tbody>
            </table>
          </div>
        </div>

        @if($users->hasPages())
        <div class="flex flex-col sm:flex-row items-center justify-between gap-4 text-sm text-gray-600">
          <div>
            Mostrando <span class="font-medium">{{ $users->firstItem() }}</span> a <span class="font-medium">{{ $users->lastItem() }}</span> de <span class="font-medium">{{ $users->total() }}</span> resultados
          </div>

          <div class="flex gap-2">
            @if ($users->onFirstPage())
            <span class="px-3 py-2 rounded-md bg-gray-100 text-gray-400 cursor-not-allowed">Anterior</span>
            @else
            <a href="{{ $users->previousPageUrl() }}" class="px-3 py-2 rounded-md bg-white border border-gray-200 text-gray-700 hover:bg-gray-50 transition-colors">Anterior</a>
            @endif

            @foreach ($users->getUrlRange(1, $users->lastPage()) as $page => $url)
            @if ($page == $users->currentPage())
            <span class="px-3 py-2 rounded-md bg-gray-500 text-white font-medium">{{ $page }}</span>
            @else
            <a href="{{ $url }}" class="px-3 py-2 rounded-md bg-white border border-gray-200 text-gray-700 hover:bg-gray-50 transition-colors">{{ $page }}</a>
            @endif
            @endforeach

            @if ($users->hasMorePages())
            <a href="{{ $users->nextPageUrl() }}" class="px-3 py-2 rounded-md bg-white border border-gray-200 text-gray-700 hover:bg-gray-50 transition-colors">Próximo</a>
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