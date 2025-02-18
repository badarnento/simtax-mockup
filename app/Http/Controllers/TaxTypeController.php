<?php

namespace App\Http\Controllers;

use App\Models\TaxType;
use Illuminate\Http\Request;

class TaxTypeController extends Controller
{
    public function index()
    {
        $taxTypes = TaxType::all();
        return view('tax_types.index', compact('taxTypes'));
    }

    public function create()
    {
        return view('tax_types.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:tax_types,name',
            'rate' => 'required|numeric|min:0|max:100',
        ]);

        TaxType::create($request->all());
        return redirect()->route('tax_types.index')->with('success', 'Tax Type added successfully.');
    }
}
