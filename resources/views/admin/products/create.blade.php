@extends('_layouts.app')

@section('title', 'Novo Produto: UseTatiModas Admin')

@section('content')
<main class="px-4 md:px-8 lg:px-24 py-6 md:py-12">
    <div class="max-w-7xl mx-auto">
        <div class="flex flex-col gap-4">

            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                <h1 class="text-2xl md:text-3xl font-bold tracking-tight text-gray-800">Novo Produto</h1>
                <a href="{{ route('admin.products') }}" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300 transition-colors text-sm font-medium flex items-center gap-2">
                    <x-heroicon-o-arrow-left class="w-4 h-4" />
                    Voltar
                </a>
            </div>

            <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data" class="flex flex-col gap-4">
                @csrf

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">

                    {{-- Coluna principal --}}
                    <div class="lg:col-span-2 flex flex-col gap-4">

                        <div class="rounded-md border border-gray-200 bg-white p-6 flex flex-col gap-4">
                            <h2 class="text-base font-semibold text-gray-800 border-b border-gray-100 pb-3">Informações Gerais</h2>

                            <div class="flex flex-col gap-2">
                                <label class="text-sm font-medium text-gray-700">Nome <span class="text-red-500">*</span></label>
                                <input type="text" name="name" value="{{ old('name') }}" placeholder="Ex: Conjunto Delicado Feminino"
                                    class="px-4 py-2 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-[#F1C24A] hover:bg-white focus:border-[#C79B2B] focus:bg-white focus:ring-2 focus:ring-[#C79B2B]/20">
                                @error('name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                            </div>

                            <div class="flex flex-col gap-2">
                                <label class="text-sm font-medium text-gray-700">Descrição <span class="text-red-500">*</span></label>
                                <textarea name="description" rows="4" placeholder="Descreva o produto..."
                                    class="px-4 py-2 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-[#F1C24A] hover:bg-white focus:border-[#C79B2B] focus:bg-white focus:ring-2 focus:ring-[#C79B2B]/20 resize-none">{{ old('description') }}</textarea>
                                @error('description') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div class="flex flex-col gap-2">
                                    <label class="text-sm font-medium text-gray-700">SKU <span class="text-red-500">*</span></label>
                                    <input type="text" name="sku" value="{{ old('sku') }}" placeholder="Ex: SKU-001"
                                        class="px-4 py-2 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-[#F1C24A] hover:bg-white focus:border-[#C79B2B] focus:bg-white focus:ring-2 focus:ring-[#C79B2B]/20">
                                    @error('sku') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                </div>

                                <div class="flex flex-col gap-2">
                                    <label class="text-sm font-medium text-gray-700">Material</label>
                                    <input type="text" name="material" value="{{ old('material') }}" placeholder="Ex: 100% Algodão"
                                        class="px-4 py-2 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-[#F1C24A] hover:bg-white focus:border-[#C79B2B] focus:bg-white focus:ring-2 focus:ring-[#C79B2B]/20">
                                </div>
                            </div>
                        </div>

                        <div class="rounded-md border border-gray-200 bg-white p-6 flex flex-col gap-4">
                            <h2 class="text-base font-semibold text-gray-800 border-b border-gray-100 pb-3">Preço & Estoque</h2>

                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                                <div class="flex flex-col gap-2">
                                    <label class="text-sm font-medium text-gray-700">Preço <span class="text-red-500">*</span></label>
                                    <input type="number" name="price" value="{{ old('price') }}" placeholder="0,00" step="0.01" min="0"
                                        class="px-4 py-2 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-[#F1C24A] hover:bg-white focus:border-[#C79B2B] focus:bg-white focus:ring-2 focus:ring-[#C79B2B]/20">
                                    @error('price') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                </div>

                                <div class="flex flex-col gap-2">
                                    <label class="text-sm font-medium text-gray-700">Preço Antigo</label>
                                    <input type="number" name="old_price" value="{{ old('old_price') }}" placeholder="0,00" step="0.01" min="0"
                                        class="px-4 py-2 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-[#F1C24A] hover:bg-white focus:border-[#C79B2B] focus:bg-white focus:ring-2 focus:ring-[#C79B2B]/20">
                                </div>

                                <div class="flex flex-col gap-2">
                                    <label class="text-sm font-medium text-gray-700">Estoque <span class="text-red-500">*</span></label>
                                    <input type="number" name="stock" value="{{ old('stock') }}" placeholder="0" min="0"
                                        class="px-4 py-2 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-[#F1C24A] hover:bg-white focus:border-[#C79B2B] focus:bg-white focus:ring-2 focus:ring-[#C79B2B]/20">
                                    @error('stock') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>

                        <div class="rounded-md border border-gray-200 bg-white p-6 flex flex-col gap-4">
                            <h2 class="text-base font-semibold text-gray-800 border-b border-gray-100 pb-3">Imagens</h2>

                            <div class="flex flex-col gap-2">
                                <label class="text-sm font-medium text-gray-700">Imagens do Produto</label>
                                <label class="flex flex-col items-center justify-center w-full h-32 border-2 border-dashed border-gray-300 rounded-md cursor-pointer bg-gray-50 hover:border-[#C79B2B] hover:bg-white transition-all duration-200">
                                    <div class="flex flex-col items-center gap-1">
                                        <x-heroicon-o-photo class="w-8 h-8 text-gray-400" />
                                        <span class="text-sm text-gray-500">Clique para selecionar imagens</span>
                                        <span class="text-xs text-gray-400">PNG, JPG até 2MB</span>
                                    </div>
                                    <input type="file" name="images[]" multiple accept="image/*" class="hidden">
                                </label>
                            </div>
                        </div>

                    </div>

                    {{-- Coluna lateral --}}
                    <div class="flex flex-col gap-4">

                        <div class="rounded-md border border-gray-200 bg-white p-6 flex flex-col gap-4">
                            <h2 class="text-base font-semibold text-gray-800 border-b border-gray-100 pb-3">Organização</h2>

                            <div class="flex flex-col gap-2">
                                <label class="text-sm font-medium text-gray-700">Categoria <span class="text-red-500">*</span></label>
                                <select name="category_id"
                                    class="px-4 py-2 rounded-md border border-gray-200 bg-gray-50 text-gray-800 text-sm outline-none transition-all duration-200 hover:border-[#F1C24A] hover:bg-white focus:border-[#C79B2B] focus:bg-white focus:ring-2 focus:ring-[#C79B2B]/20">
                                    <option value="">Selecione uma categoria</option>
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                    @endforeach
                                </select>
                                @error('category_id') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                            </div>

                            <div class="flex flex-col gap-2">
                                <label class="text-sm font-medium text-gray-700">Fornecedor</label>
                                <select name="supplier_id"
                                    class="px-4 py-2 rounded-md border border-gray-200 bg-gray-50 text-gray-800 text-sm outline-none transition-all duration-200 hover:border-[#F1C24A] hover:bg-white focus:border-[#C79B2B] focus:bg-white focus:ring-2 focus:ring-[#C79B2B]/20">
                                    <option value="">Selecione um fornecedor</option>
                                    @foreach ($suppliers as $supplier)
                                    <option value="{{ $supplier->id }}" {{ old('supplier_id') == $supplier->id ? 'selected' : '' }}>
                                        {{ $supplier->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

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
                                Salvar Produto
                            </button>

                            <a href="{{ route('admin.products') }}"
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