@extends('_layouts.app')

@section('title', 'Novo Fornecedor: UseTatiModas Admin')

@section('content')
<main class="px-4 md:px-8 lg:px-24 py-6 md:py-12">
    <div class="max-w-7xl mx-auto">
        <div class="flex flex-col gap-4">

            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                <h1 class="text-2xl md:text-3xl font-bold tracking-tight text-gray-800">Novo Fornecedor</h1>
                <a href="{{ route('admin.suppliers') }}" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300 transition-colors text-sm font-medium flex items-center gap-2">
                    <x-heroicon-o-arrow-left class="w-4 h-4" />
                    Voltar
                </a>
            </div>

            <form action="{{ route('admin.suppliers.store') }}" method="POST" class="flex flex-col gap-4">
                @csrf

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">

                    <div class="lg:col-span-2 flex flex-col gap-4">

                        <div class="rounded-md border border-gray-200 bg-white p-6 flex flex-col gap-4">
                            <h2 class="text-base font-semibold text-gray-800 border-b border-gray-100 pb-3">Informações do Fornecedor</h2>

                            <div class="flex flex-col gap-2">
                                <label class="text-sm font-medium text-gray-700">Nome <span class="text-red-500">*</span></label>
                                <input type="text" name="name" value="{{ old('name') }}" placeholder="Ex: Fornecedora Moda Sul"
                                    class="px-4 py-2 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-[#F1C24A] hover:bg-white focus:border-[#C79B2B] focus:bg-white focus:ring-2 focus:ring-[#C79B2B]/20">
                                @error('name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div class="flex flex-col gap-2">
                                    <label class="text-sm font-medium text-gray-700">E-mail <span class="text-red-500">*</span></label>
                                    <input type="email" name="email" value="{{ old('email') }}" placeholder="Ex: contato@fornecedor.com"
                                        class="px-4 py-2 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-[#F1C24A] hover:bg-white focus:border-[#C79B2B] focus:bg-white focus:ring-2 focus:ring-[#C79B2B]/20">
                                    @error('email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                </div>

                                <div class="flex flex-col gap-2">
                                    <label class="text-sm font-medium text-gray-700">Telefone</label>
                                    <input type="text" name="phone" value="{{ old('phone') }}" placeholder="Ex: (11) 99999-9999"
                                        class="px-4 py-2 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-[#F1C24A] hover:bg-white focus:border-[#C79B2B] focus:bg-white focus:ring-2 focus:ring-[#C79B2B]/20">
                                    @error('phone') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div class="flex flex-col gap-2">
                                <label class="text-sm font-medium text-gray-700">CNPJ</label>
                                <input type="text" name="cnpj" value="{{ old('cnpj') }}" placeholder="Ex: 00.000.000/0001-00"
                                    class="px-4 py-2 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-[#F1C24A] hover:bg-white focus:border-[#C79B2B] focus:bg-white focus:ring-2 focus:ring-[#C79B2B]/20">
                                @error('cnpj') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="rounded-md border border-gray-200 bg-white p-6 flex flex-col gap-4">
                            <h2 class="text-base font-semibold text-gray-800 border-b border-gray-100 pb-3">Endereço</h2>

                            <div class="flex flex-col gap-2">
                                <label class="text-sm font-medium text-gray-700">Endereço</label>
                                <input type="text" name="address" value="{{ old('address') }}" placeholder="Ex: Rua das Flores, 123"
                                    class="px-4 py-2 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-[#F1C24A] hover:bg-white focus:border-[#C79B2B] focus:bg-white focus:ring-2 focus:ring-[#C79B2B]/20">
                                @error('address') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div class="flex flex-col gap-2">
                                    <label class="text-sm font-medium text-gray-700">Cidade</label>
                                    <input type="text" name="city" value="{{ old('city') }}" placeholder="Ex: São Paulo"
                                        class="px-4 py-2 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-[#F1C24A] hover:bg-white focus:border-[#C79B2B] focus:bg-white focus:ring-2 focus:ring-[#C79B2B]/20">
                                    @error('city') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                </div>
                                <div class="flex flex-col gap-2">
                                    <label class="text-sm font-medium text-gray-700">Estado</label>
                                    <input type="text" name="state" value="{{ old('state') }}" placeholder="Ex: SP"
                                        class="px-4 py-2 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-[#F1C24A] hover:bg-white focus:border-[#C79B2B] focus:bg-white focus:ring-2 focus:ring-[#C79B2B]/20">
                                    @error('state') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="flex flex-col gap-4">

                        <div class="rounded-md border border-gray-200 bg-white p-6 flex flex-col gap-4">
                            <h2 class="text-base font-semibold text-gray-800 border-b border-gray-100 pb-3">Organização</h2>

                            <div class="flex flex-col gap-2">
                                <label class="text-sm font-medium text-gray-700">Status</label>
                                <select name="status"
                                    class="px-4 py-2 rounded-md border border-gray-200 bg-gray-50 text-gray-800 text-sm outline-none transition-all duration-200 hover:border-[#F1C24A] hover:bg-white focus:border-[#C79B2B] focus:bg-white focus:ring-2 focus:ring-[#C79B2B]/20">
                                    <option value="active" {{ old('status', 'active') == 'active' ? 'selected' : '' }}>Ativo</option>
                                    <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inativo</option>
                                </select>
                            </div>
                        </div>

                        <div class="rounded-md border border-gray-200 bg-white p-6 flex flex-col gap-3">
                            <h2 class="text-base font-semibold text-gray-800 border-b border-gray-100 pb-3">Ações</h2>

                            <button type="submit"
                                class="px-4 py-2.5 bg-green-500 text-white rounded-md hover:bg-green-600 transition-colors text-sm font-medium flex items-center justify-center gap-2">
                                <x-heroicon-o-check class="w-4 h-4" />
                                Salvar Fornecedor
                            </button>

                            <a href="{{ route('admin.suppliers') }}"
                                class="px-4 py-2.5 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300 transition-colors text-sm font-medium flex items-center justify-center gap-2">
                                <x-heroicon-o-x-mark class="w-4 h-4" />
                                Cancelar
                            </a>
                        </div>

                    </div>
                </div>
            </form>

        </div>
    </div>
</main>
@endsection