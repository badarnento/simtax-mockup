<?php

namespace App\Http\Controllers;

use App\Models\TaxEntity;
use Illuminate\Http\Request;

class TaxEntityController extends Controller
{
    public function index()
    {
        $entities = TaxEntity::all();
        return view('tax_entities.index', compact('entities'));
    }

    public function create()
    {
        return view('tax_entities.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:tax_entities,name',
            'tax_number' => 'required|unique:tax_entities,tax_number',
        ]);

        TaxEntity::create($request->all());
        return redirect()->route('tax_entities.index')->with('success', 'Tax Entity added successfully.');
    }
}
