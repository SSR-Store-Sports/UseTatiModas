@extends('_layouts.app')

@section('title', 'Usuários: UseTatiModas Admin')

@section('content')
<main class="px-4 md:px-8 lg:px-24 py-6 md:py-12">
  <div class="max-w-7xl mx-auto">
    <div class="flex flex-col gap-4">
      <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
        <h1 class="text-2xl md:text-3xl font-bold tracking-tight text-gray-800">Gerenciar Usuários</h1>
        
        <div class="flex gap-2">
          <button class="px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gold-dark transition-colors text-sm font-medium flex items-center gap-2">
            <x-heroicon-o-arrow-path class="w-4 h-4" />
            Atualizar
          </button>
        </div>
      </div>
      
      <div class="space-y-2.5">
        <div class="rounded-md border border-gray-200 bg-white overflow-hidden">
          <div class="overflow-x-auto">
            <table class="w-full text-sm">
              <thead>
                <tr class="border-b border-gray-200 bg-gray-50">
                  <th class="px-4 py-3 text-left font-medium text-gray-700">ID</th>
                  <th class="px-4 py-3 text-left font-medium text-gray-700">Nome</th>
                  <th class="px-4 py-3 text-left font-medium text-gray-700">Email</th>
                  <th class="px-4 py-3 text-left font-medium text-gray-700">Função</th>
                  <th class="px-4 py-3 text-left font-medium text-gray-700">Criado em</th>
                  <th class="px-4 py-3 text-center font-medium text-gray-700 w-48">Ações</th>
                </tr>
              </thead>

              <tbody class="divide-y divide-gray-100">
                @forelse ($users as $user)
                  <tr class="hover:bg-gray-100/40 transition-colors">
                    <td class="px-4 py-4 font-mono text-xs text-gray-600">
                      #{{ str_pad($user->id, 3, '0', STR_PAD_LEFT) }}
                    </td>

                    <td class="px-4 py-4">
                      <div class="flex items-center gap-2">
                        <div class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center">
                          <x-heroicon-o-user class="w-4 h-4 text-gray-600" />
                        </div>
                        <span class="font-semibold text-gray-800">{{ $user->name }}</span>
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
                        {{ $user->role === 'admin' ? 'Administrador' : 'Membro' }}
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
                        <a href="{{ route('admin.users.edit', $user->id) }}" class="p-2 text-green-600 hover:bg-green-50 rounded-md transition-colors" title="Editar">
                          <x-heroicon-o-pencil-square class="w-4 h-4" />
                        </a>
                        
                        @if($user->id !== auth()->id())
                        <form method="POST" action="{{ route('admin.users.destroy', $user->id) }}" class="inline">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="p-2 text-red-600 hover:bg-red-50 rounded-md transition-colors" onclick="return confirm('Tem certeza que deseja excluir este usuário?')" title="Excluir">
                            <x-heroicon-o-trash class="w-4 h-4" />
                          </button>
                        </form>
                        @endif
                      </div>
                    </td>
                  </tr>
                @empty
                  <tr>
                    <td colspan="6" class="px-4 py-12 text-center">
                      <div class="flex flex-col items-center gap-2">
                        <x-heroicon-o-inbox class="w-12 h-12 text-gray-300" />
                        <p class="text-gray-500 font-medium">Nenhum usuário encontrado</p>
                      </div>
                    </td>
                  </tr>
                @endforelse
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection