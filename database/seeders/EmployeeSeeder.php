<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;
use Faker\Factory as Faker;

class EmployeeSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 20; $i++) {
            Employee::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'phone' => $faker->phoneNumber,
                'position' => $faker->randomElement(['Manager', 'Staff', 'Supervisor', 'Direktur']),
                'department' => $faker->randomElement(['Finance', 'IT', 'HRD', 'Marketing']),
                'salary' => $faker->randomFloat(2, 3000000, 20000000),
                'hire_date' => $faker->date(),
            ]);
        }
    }
}
