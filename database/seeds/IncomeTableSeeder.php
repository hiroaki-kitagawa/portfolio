<?php

use Illuminate\Database\Seeder;

class IncomeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("incomes")->insert([
            "id" => "1",
            "user_id" => "1",
            "fixed_income" => "210000",
            "extra_income" => "30000"
        ]);
    }
}
