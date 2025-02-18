<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TaxType;
use App\Models\FinancialAccount;
use App\Models\TaxEntity;

class MasterSeeder extends Seeder
{
    public function run(): void
    {
        // Tax Types (Jenis Pajak di Indonesia)
        TaxType::insert([
            ['name' => 'PPN', 'description' => 'Pajak Pertambahan Nilai', 'rate' => 11.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'PPh 21', 'description' => 'Pajak Penghasilan Pasal 21', 'rate' => 5.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'PPh 22', 'description' => 'Pajak Penghasilan Pasal 22', 'rate' => 1.50, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'PPh 23', 'description' => 'Pajak Penghasilan Pasal 23', 'rate' => 2.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'PPh Final', 'description' => 'Pajak Penghasilan Final', 'rate' => 0.50, 'created_at' => now(), 'updated_at' => now()],
        ]);

        // Financial Accounts (Rekening Keuangan)
        FinancialAccount::insert([
            ['account_name' => 'Bank BCA', 'account_number' => '1234567890', 'account_type' => 'Bank', 'created_at' => now(), 'updated_at' => now()],
            ['account_name' => 'Bank Mandiri', 'account_number' => '9876543210', 'account_type' => 'Bank', 'created_at' => now(), 'updated_at' => now()],
            ['account_name' => 'Kas Kecil', 'account_number' => 'KAS001', 'account_type' => 'Cash', 'created_at' => now(), 'updated_at' => now()],
            ['account_name' => 'Bank BRI', 'account_number' => '5556667778', 'account_type' => 'Bank', 'created_at' => now(), 'updated_at' => now()],
        ]);

        // Tax Entities (Wajib Pajak di Indonesia)
        TaxEntity::insert([
            ['name' => 'PT Indo Jaya', 'tax_number' => '01.234.567.8-999.000', 'address' => 'Jakarta', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'CV Sukses Makmur', 'tax_number' => '02.345.678.9-888.000', 'address' => 'Surabaya', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'PT Digital Nusantara', 'tax_number' => '03.456.789.0-777.000', 'address' => 'Bandung', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
