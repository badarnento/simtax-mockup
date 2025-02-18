<?php

namespace App\Models;

class TaxLine extends BaseModel
{

    protected $fillable = [
        'masa_pajak',
        'tahun_pajak',
        'organization_id',
        'nama_wp',
        'alamat',
        'npwp',
        'jenis_pajak',
        'invoice_number',
        'nomor_faktur_pajak',
        'tanggal_faktur_pajak',
        'no_bukti_potong',
        'tgl_bukti_potong',
        'gl_account',
        'kode_pajak',
        'dpp',
        'tarif',
        'jumlah_potong',
        'npwp_pemotong',
        'nama_pemotong',
        'wp_luar_negeri',
        'kode_negara'
    ];
}
