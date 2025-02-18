<?php

namespace App\Http\Controllers;

use App\Models\TaxType;
use Illuminate\Http\Request;
use App\Services\BaseDataTableService;

class TaxTypeController extends Controller
{
    public function index()
    {
        return view('tax_types.index');
    }
    
    public function getListing(Request $request, BaseDataTableService $datatableService)
    {
        $query = TaxType::select(['id', 'name', 'description', 'rate']);
        return response()->json(
            $datatableService->getData($request, $query, function ($tax_type, $number) {
                return [
                    'id'          => $tax_type->id,
                    'no'          => $number,
                    'name'        => $tax_type->name,
                    'description' => $tax_type->description,
                    'rate'        => $tax_type->rate
                ];
            }, TaxType::$searchableColumns)
        );
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
