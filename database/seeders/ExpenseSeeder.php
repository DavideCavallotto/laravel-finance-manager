<?php

namespace Database\Seeders;

use App\Models\Expense;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExpenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 100; $i++) {
            $new_income = new Expense();

            $new_income->category = $faker->randomElement(['abbonamenti', 'bollette', 'affitto', 'acquisto di beni', 'donazioni']);
            $new_income->amount = $faker->randomFloat(2, -1000, 0);
            $new_income->description = $faker->text(200);

            $new_income->save();
        }
    }
}
