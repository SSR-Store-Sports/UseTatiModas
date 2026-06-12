@extends('_layouts.app')

@section('title', 'Editar Produto: UseTatiModas Admin')

@section('content')
<main class="px-4 md:px-8 lg:px-24 py-6 md:py-12">
    <div class="max-w-7xl mx-auto">
        <div class="flex flex-col gap-4">

            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                <h1 class="text-2xl md:text-3xl font-bold tracking-tight text-gray-800">Editar Produto</h1>
                <a href="{{ route('admin.products') }}" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300 transition-colors text-sm font-medium flex items-center gap-2">
                    <x-heroicon-o-arrow-left class="w-4 h-4" />
                    Voltar
                </a>
            </div>

            <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data" class="flex flex-col gap-4">
                @csrf
                @method('PUT')
                @if ($errors->any())
                <div class="bg-red-50 border border-red-200 rounded-md p-4">
                    <ul class="text-red-600 text-sm list-disc list-inside">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">

                    <div class="lg:col-span-2 flex flex-col gap-4">

                        <div class="rounded-md border border-gray-200 bg-white p-6 flex flex-col gap-4">
                            <h2 class="text-base font-semibold text-gray-800 border-b border-gray-100 pb-3">Informações Gerais</h2>

                            <div class="flex flex-col gap-2">
                                <label class="text-sm font-medium text-gray-700">Nome <span class="text-red-500">*</span></label>
                                <input type="text" name="name" value="{{ old('name', $product->name) }}" placeholder="Ex: Conjunto Delicado Feminino"
                                    class="px-4 py-2 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-[#F1C24A] hover:bg-white focus:border-[#C79B2B] focus:bg-white focus:ring-2 focus:ring-[#C79B2B]/20">
                                @error('name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                            </div>

                            <div class="flex flex-col gap-2">
                                <label class="text-sm font-medium text-gray-700">Descrição <span class="text-red-500">*</span></label>
                                <textarea name="description" rows="4" placeholder="Descreva o produto..."
                                    class="px-4 py-2 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-[#F1C24A] hover:bg-white focus:border-[#C79B2B] focus:bg-white focus:ring-2 focus:ring-[#C79B2B]/20 resize-none">{{ old('description', $product->description) }}</textarea>
                                @error('description') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div class="flex flex-col gap-2">
                                    <label class="text-sm font-medium text-gray-700">SKU</label>
                                    <input type="text" value="{{ $product->sku }}" readonly
                                        class="px-4 py-2 rounded-md border border-gray-200 bg-gray-100 text-gray-500 text-sm outline-none cursor-not-allowed">
                                </div>

                                <div class="flex flex-col gap-2">
                                    <label class="text-sm font-medium text-gray-700">Material</label>
                                    <input type="text" name="material" value="{{ old('material', $product->material) }}" placeholder="Ex: 100% Algodão"
                                        class="px-4 py-2 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-[#F1C24A] hover:bg-white focus:border-[#C79B2B] focus:bg-white focus:ring-2 focus:ring-[#C79B2B]/20">
                                </div>
                            </div>
                        </div>

                        <div class="rounded-md border border-gray-200 bg-white p-6 flex flex-col gap-4">
                            <h2 class="text-base font-semibold text-gray-800 border-b border-gray-100 pb-3">Preço & Estoque</h2>

                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                                <div class="flex flex-col gap-2">
                                    <label class="text-sm font-medium text-gray-700">Preço <span class="text-red-500">*</span></label>
                                    <input type="number" name="price" value="{{ old('price', $product->price) }}" placeholder="0,00" step="0.01" min="0"
                                        class="px-4 py-2 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-[#F1C24A] hover:bg-white focus:border-[#C79B2B] focus:bg-white focus:ring-2 focus:ring-[#C79B2B]/20">
                                    @error('price') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                </div>

                                <div class="flex flex-col gap-2">
                                    <label class="text-sm font-medium text-gray-700">Preço Antigo</label>
                                    <input type="number" name="old_price" value="{{ old('old_price', $product->old_price) }}" placeholder="0,00" step="0.01" min="0"
                                        class="px-4 py-2 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-[#F1C24A] hover:bg-white focus:border-[#C79B2B] focus:bg-white focus:ring-2 focus:ring-[#C79B2B]/20">
                                </div>

                                <div class="flex flex-col gap-2">
                                    <label class="text-sm font-medium text-gray-700">Estoque <span class="text-red-500">*</span></label>
                                    <input type="number" name="stock" value="{{ old('stock', $product->stock) }}" placeholder="0" min="0"
                                        class="px-4 py-2 rounded-md border border-gray-200 bg-gray-50 text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 hover:border-[#F1C24A] hover:bg-white focus:border-[#C79B2B] focus:bg-white focus:ring-2 focus:ring-[#C79B2B]/20">
                                    @error('stock') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>

                        <div class="rounded-md border border-gray-200 bg-white p-6 flex flex-col gap-4">
                            <h2 class="text-base font-semibold text-gray-800 border-b border-gray-100 pb-3">Imagens</h2>

                            @if($product->images->count())
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                                @foreach($product->images as $image)
                                <div class="relative group">
                                    <img src="{{ asset('storage/' . $image->image) }}" class="w-full h-24 object-cover rounded-md border border-gray-200">
                                    @if($image->is_primary)
                                    <span class="absolute top-1 left-1 bg-gold-dark text-white text-xs px-1.5 py-0.5 rounded">Principal</span>
                                    @endif
                                </div>
                                @endforeach
                            </div>
                            @endif

                            <div class="flex flex-col gap-2">
                                <label class="text-sm font-medium text-gray-700">Adicionar novas imagens</label>
                                <label class="flex flex-col items-center justify-center w-full h-32 border-2 border-dashed border-gray-300 rounded-md cursor-pointer bg-gray-50 hover:border-[#C79B2B] hover:bg-white transition-all duration-200">
                                    <div class="flex flex-col items-center gap-1">
                                        <x-heroicon-o-photo class="w-8 h-8 text-gray-400" />
                                        <span class="text-sm text-gray-500">Clique para selecionar imagens</span>
                                        <span class="text-xs text-gray-400">PNG, JPG até 2MB</span>
                                    </div>
                                    <input id="images" type="file" name="images[]" multiple accept="image/*" class="hidden">
                                </label>
                                <div id="preview-images" class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-4"></div>
                            </div>
                        </div>

                    </div>

                    <div class="flex flex-col gap-4">

                        <div class="rounded-md border border-gray-200 bg-white p-6 flex flex-col gap-4">
                            <h2 class="text-base font-semibold text-gray-800 border-b border-gray-100 pb-3">Organização</h2>

                            <div class="flex flex-col gap-2">
                                <label class="text-sm font-medium text-gray-700">Categoria <span class="text-red-500">*</span></label>
                                <select name="category_id"
                                    class="px-4 py-2 rounded-md border border-gray-200 bg-gray-50 text-gray-800 text-sm outline-none transition-all duration-200 hover:border-[#F1C24A] hover:bg-white focus:border-[#C79B2B] focus:bg-white focus:ring-2 focus:ring-[#C79B2B]/20">
                                    <option value="">Selecione uma categoria</option>
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                    @endforeach
                                </select>
                                @error('category_id') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                            </div>

                            <div class="flex flex-col gap-2">
                                <label class="text-sm font-medium text-gray-700">Fornecedor <span class="text-red-500">*</span></label>
                                <select name="supplier_id"
                                    class="px-4 py-2 rounded-md border border-gray-200 bg-gray-50 text-gray-800 text-sm outline-none transition-all duration-200 hover:border-[#F1C24A] hover:bg-white focus:border-[#C79B2B] focus:bg-white focus:ring-2 focus:ring-[#C79B2B]/20">
                                    <option value="">Selecione um fornecedor</option>
                                    @foreach ($suppliers as $supplier)
                                    <option value="{{ $supplier->id }}" {{ old('supplier_id', $product->supplier_id) == $supplier->id ? 'selected' : '' }}>
                                        {{ $supplier->name }}
                                    </option>
                                    @endforeach
                                </select>
                                @error('supplier_id') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                            </div>

                            <div class="flex flex-col gap-2">
                                <label class="text-sm font-medium text-gray-700">Status</label>
                                <select name="status"
                                    class="px-4 py-2 rounded-md border border-gray-200 bg-gray-50 text-gray-800 text-sm outline-none transition-all duration-200 hover:border-[#F1C24A] hover:bg-white focus:border-[#C79B2B] focus:bg-white focus:ring-2 focus:ring-[#C79B2B]/20">
                                    <option value="active" {{ old('status', $product->status) == 'active' ? 'selected' : '' }}>Ativo</option>
                                    <option value="inactive" {{ old('status', $product->status) == 'inactive' ? 'selected' : '' }}>Inativo</option>
                                </select>
                            </div>
                        </div>

                        <div class="rounded-md border border-gray-200 bg-white p-6 flex flex-col gap-3">
                            <h2 class="text-base font-semibold text-gray-800 border-b border-gray-100 pb-3">Ações</h2>

                            <button type="submit"
                                class="px-4 py-2.5 bg-green-500 text-white rounded-md hover:bg-green-600 transition-colors text-sm font-medium flex items-center justify-center gap-2">
                                <x-heroicon-o-check class="w-4 h-4" />
                                Salvar Alterações
                            </button>

                            <a href="{{ route('admin.products.show', $product->id) }}"
                                class="px-4 py-2.5 bg-blue-100 text-blue-700 rounded-md hover:bg-blue-200 transition-colors text-sm font-medium flex items-center justify-center gap-2">
                                <x-heroicon-o-eye class="w-4 h-4" />
                                Visualizar
                            </a>

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

@push('scripts')
<script src="{{ asset('js/products-images.js') }}"></script>
@endpush
