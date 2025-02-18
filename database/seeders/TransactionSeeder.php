<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transaction;
use App\Models\TaxType;
use App\Models\FinancialAccount;
use App\Models\TaxEntity;
use Faker\Factory as Faker;

class TransactionSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $taxTypes = TaxType::pluck('id')->toArray();
        $financialAccounts = FinancialAccount::pluck('id')->toArray();
        $taxEntities = TaxEntity::pluck('id')->toArray();

        for ($i = 0; $i < 20; $i++) {
            Transaction::create([
                'tax_type_id' => $faker->randomElement($taxTypes),
                'financial_account_id' => $faker->randomElement($financialAccounts),
                'tax_entity_id' => $faker->randomElement($taxEntities),
                'amount' => $faker->randomFloat(2, 100000, 10000000),
                'transaction_date' => $faker->date(),
                'description' => $faker->sentence(),
            ]);
        }
    }
}

