<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Supplier;
use Illuminate\Http\Request;
use App\Http\Requests\SupplierRequest;


class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::latest()->paginate(10);
        return view('admin.suppliers.index', compact('suppliers'));
    }

    public function create()
    {
        return view('admin.suppliers.create');
    }

    public function store(SupplierRequest $request)
    {
        Supplier::create($request->validated());

        return redirect()->route('admin.suppliers')
            ->with('success', 'Fornecedor criado com sucesso!');
    }

    public function show(string $id)
    {
        $supplier = Supplier::findOrFail($id);
        return view('admin.suppliers.show', compact('supplier'));
    }

    public function edit(string $id)
    {
        $supplier = Supplier::findOrFail($id);
        return view('admin.suppliers.edit', compact('supplier'));
    }

    public function update(SupplierRequest $request, string $id)
    {
        $supplier = Supplier::findOrFail($id);
        $supplier->update($request->validated());
        return redirect()->route('admin.suppliers')->with('success', 'Fornecedor atualizado com sucesso!');
    }

    public function destroy(string $id)
    {
        $supplier = Supplier::findOrFail($id);
        $supplier->delete();
        return redirect()->route('admin.suppliers')->with('success', 'Fornecedor excluído com sucesso!');
    }
}
