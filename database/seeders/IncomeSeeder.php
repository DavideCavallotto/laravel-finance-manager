<?php

namespace Database\Seeders;

use App\Models\Income;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IncomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 100; $i++) {
            $new_income = new Income();

            $new_income->category = $faker->randomElement(['stipendio', 'lavoro autonomo', 'pensione', 'vendite di beni', 'donazioni']);
            $new_income->amount = $faker->randomFloat(2, 0, 1000);
            $new_income->description = $faker->text(200);

            $new_income->save();
        }
    }
}
