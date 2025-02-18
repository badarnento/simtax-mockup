<?php

namespace Database\Seeders;

use App\Models\TaxLine;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TaxLineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 10; $i++) {
            TaxLine::create([
                'masa_pajak' => $faker->randomElement(['Januari', 'Februari', 'Maret', 'April']),
                'tahun_pajak' => $faker->year,
                'organization_id' => $faker->numberBetween(1, 50),
                'nama_wp' => $faker->name,
                'alamat' => $faker->address,
                'npwp' => $faker->numerify('##.###.###.#-###.###'),
                'jenis_pajak' => $faker->randomElement(['PPN', 'PPh 21', 'PPh 23']),
                'invoice_number' => $faker->unique()->numerify('INV-#####'),
                'nomor_faktur_pajak' => $faker->unique()->numerify('FP-######'),
                'tanggal_faktur_pajak' => $faker->date,
                'no_bukti_potong' => $faker->unique()->numerify('BP-######'),
                'tgl_bukti_potong' => $faker->date,
                'gl_account' => $faker->numerify('GL-####'),
                'kode_pajak' => $faker->randomElement(['01', '02', '03']),
                'dpp' => $faker->randomFloat(2, 100000, 5000000),
                'tarif' => $faker->randomFloat(2, 1, 10),
                'jumlah_potong' => $faker->randomFloat(2, 50000, 1000000),
                'npwp_pemotong' => $faker->numerify('##.###.###.#-###.###'),
                'nama_pemotong' => $faker->name,
                'wp_luar_negeri' => $faker->boolean,
                'kode_negara' => $faker->randomElement(['ID', 'US', 'SG', 'JP']),
            ]);
        }
    }
}
