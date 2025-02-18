<?php

namespace App\Http\Controllers;

use App\Models\FinancialAccount;
use Illuminate\Http\Request;

class FinancialAccountController extends Controller
{
    public function index()
    {
        $accounts = FinancialAccount::all();
        return view('financial_accounts.index', compact('accounts'));
    }

    public function create()
    {
        return view('financial_accounts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'account_name' => 'required|unique:financial_accounts,account_name',
            'account_number' => 'required|unique:financial_accounts,account_number',
            'account_type' => 'required',
        ]);

        FinancialAccount::create($request->all());
        return redirect()->route('financial_accounts.index')->with('success', 'Financial Account added successfully.');
    }
}
