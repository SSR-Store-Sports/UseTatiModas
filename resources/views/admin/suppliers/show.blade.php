@extends('_layouts.app')

@section('title', 'Fornecedor: UseTatiModas Admin')

@section('content')
<main class="px-4 md:px-8 lg:px-24 py-6 md:py-12">
    <div class="max-w-7xl mx-auto">
        <div class="flex flex-col gap-4">

            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                <h1 class="text-2xl md:text-3xl font-bold tracking-tight text-gray-800">Detalhes do Fornecedor</h1>
                <div class="flex gap-2">
                    <a href="{{ route('admin.suppliers.edit', $supplier->id) }}" class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600 transition-colors text-sm font-medium flex items-center gap-2">
                        <x-heroicon-o-pencil-square class="w-4 h-4" />
                        Editar
                    </a>
                    <a href="{{ route('admin.suppliers') }}" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300 transition-colors text-sm font-medium flex items-center gap-2">
                        <x-heroicon-o-arrow-left class="w-4 h-4" />
                        Voltar
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">

                <div class="lg:col-span-2 flex flex-col gap-4">

                    <div class="rounded-md border border-gray-200 bg-white p-6 flex flex-col gap-4">
                        <h2 class="text-base font-semibold text-gray-800 border-b border-gray-100 pb-3">Informações do Fornecedor</h2>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm">
                            <div>
                                <span class="text-gray-500">Nome</span>
                                <p class="font-medium text-gray-800 mt-1">{{ $supplier->name }}</p>
                            </div>
                            <div>
                                <span class="text-gray-500">CNPJ</span>
                                <p class="font-mono text-gray-800 mt-1">{{ $supplier->cnpj }}</p>
                            </div>
                            <div>
                                <span class="text-gray-500">E-mail</span>
                                <p class="text-gray-800 mt-1">{{ $supplier->email }}</p>
                            </div>
                            <div>
                                <span class="text-gray-500">Telefone</span>
                                <p class="text-gray-800 mt-1">{{ $supplier->phone }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-md border border-gray-200 bg-white p-6 flex flex-col gap-4">
                        <h2 class="text-base font-semibold text-gray-800 border-b border-gray-100 pb-3">Endereço</h2>

                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 text-sm">
                            <div class="sm:col-span-2">
                                <span class="text-gray-500">Endereço</span>
                                <p class="text-gray-800 mt-1">{{ $supplier->address ?? '—' }}</p>
                            </div>
                            <div>
                                <span class="text-gray-500">Cidade/Estado</span>
                                <p class="text-gray-800 mt-1">{{ $supplier->city ?? '—' }}/{{ $supplier->state ?? '—' }}</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="flex flex-col gap-4">

                    <div class="rounded-md border border-gray-200 bg-white p-6 flex flex-col gap-4">
                        <h2 class="text-base font-semibold text-gray-800 border-b border-gray-100 pb-3">Organização</h2>

                        <div class="text-sm">
                            <span class="text-gray-500">Status</span>
                            <div class="mt-2">
                                @if($supplier->status == 'active')
                                    <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700">Ativo</span>
                                @else
                                    <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-red-100 text-red-700">Inativo</span>
                                @endif
                            </div>
                        </div>

                        <div class="text-sm">
                            <span class="text-gray-500">Cadastrado em</span>
                            <p class="text-gray-800 mt-1">{{ $supplier->created_at->format('d/m/Y') }}</p>
                        </div>
                    </div>

                    <div class="rounded-md border border-gray-200 bg-white p-6 flex flex-col gap-3">
                        <h2 class="text-base font-semibold text-gray-800 border-b border-gray-100 pb-3">Ações</h2>

                        <form id="delete-supplier-show" method="POST" action="{{ route('admin.suppliers.destroy', $supplier->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="button"
                                onclick="confirmDelete('delete-supplier-show', 'Tem certeza que deseja excluir o fornecedor \'{{ addslashes($supplier->name) }}\'?')"
                                class="w-full px-4 py-2.5 bg-red-500 text-white rounded-md hover:bg-red-600 transition-colors text-sm font-medium flex items-center justify-center gap-2">
                                <x-heroicon-o-trash class="w-4 h-4" />
                                Excluir Fornecedor
                            </button>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>
</main>
@endsection
