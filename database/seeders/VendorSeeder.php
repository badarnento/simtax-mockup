<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vendor;
use Faker\Factory as Faker;

class VendorSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 10; $i++) {
            Vendor::create([
                'vendor_id' => $faker->unique()->numerify('VND###'),
                'vendor_name' => $faker->company,
                'vendor_email' => $faker->unique()->companyEmail,
                'vendor_address' => $faker->address,
                'tax_type' => $faker->randomElement(['PPN', 'PPh', 'Bebas Pajak']),
                'phone' => $faker->phoneNumber,
                'contact_person' => $faker->name,
            ]);
        }
    }
}
