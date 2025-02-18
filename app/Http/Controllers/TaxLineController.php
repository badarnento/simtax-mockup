<?php

namespace App\Http\Controllers;

use App\Models\TaxLine;
use Illuminate\Http\Request;
use App\Services\BaseDataTableService;

class TaxLineController extends Controller
{
    
    public function index()
    {
        return view('tax_line.index', []);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'masa_pajak' => 'required|string',
            'tahun_pajak' => 'required|integer',
            'organization_id' => 'required|integer',
            'nama_wp' => 'required|string',
            'alamat' => 'required|string',
            'npwp' => 'required|string',
            'jenis_pajak' => 'required|string',
            'invoice_number' => 'nullable|string',
            'nomor_faktur_pajak' => 'nullable|string',
            'tanggal_faktur_pajak' => 'nullable|date',
            'no_bukti_potong' => 'nullable|string',
            'tgl_bukti_potong' => 'nullable|date',
            'gl_account' => 'nullable|string',
            'kode_pajak' => 'required|string',
            'dpp' => 'required|numeric',
            'tarif' => 'required|numeric',
            'jumlah_potong' => 'required|numeric',
            'npwp_pemotong' => 'nullable|string',
            'nama_pemotong' => 'nullable|string',
            'wp_luar_negeri' => 'boolean',
            'kode_negara' => 'nullable|string'
        ]);

        $taxLine = TaxLine::create($validated);
        return response()->json($taxLine, 201);
    }

    
    public function getListing(Request $request, BaseDataTableService $datatableService)
    {
        $query = TaxLine::query();
        return response()->json(
            $datatableService->getData($request, $query, function ($tax_line, $number) {
                return [
                    'id'                   => $tax_line->id,
                    'no'                   => $number,
                    'masa_pajak'           => $tax_line->masa_pajak,
                    'tahun_pajak'          => $tax_line->tahun_pajak,
                    'organization_id'      => $tax_line->organization_id,
                    'nama_wp'              => $tax_line->nama_wp,
                    'alamat'               => $tax_line->alamat,
                    'npwp'                 => $tax_line->npwp,
                    'jenis_pajak'          => $tax_line->jenis_pajak,
                    'invoice_number'       => $tax_line->invoice_number,
                    'nomor_faktur_pajak'   => $tax_line->nomor_faktur_pajak,
                    'tanggal_faktur_pajak' => $tax_line->tanggal_faktur_pajak,
                    'no_bukti_potong'      => $tax_line->no_bukti_potong,
                    'tgl_bukti_potong'     => $tax_line->tgl_bukti_potong,
                    'gl_account'           => $tax_line->gl_account,
                    'kode_pajak'           => $tax_line->kode_pajak,
                    'dpp'                  => $tax_line->dpp,
                    'tarif'                => $tax_line->tarif,
                    'jumlah_potong'        => $tax_line->jumlah_potong,
                    'npwp_pemotong'        => $tax_line->npwp_pemotong,
                    'nama_pemotong'        => $tax_line->nama_pemotong,
                    'wp_luar_negeri'       => $tax_line->wp_luar_negeri,
                    'kode_negara'          => $tax_line->kode_negara
                ];
            }, TaxLine::$searchableColumns)
        );
    }
}
