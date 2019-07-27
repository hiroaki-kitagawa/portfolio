<?php

use Illuminate\Database\Seeder;

class SpendingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("spendings")->insert([
            "id" => "1",
            "user_id" => "1",
            "fixed_rent" => "30000",
            "fixed_insurance" => "4000",
            "variable_utilities" => "10000",
            "variable_food" => "20000",
            "variable_daily" => "3000",
            "variable_transportation" => "0",
            "variable_automotive" => "0",
            "variable_communication" => "3000",
            "variable_education" => "6000",
            "variable_medical" => "0",
            "variable_clothing" => "0",
            "variable_allowance" => "20000",
            "variable_pocketmoney" => "0",
            "variable_favorite" => "0",
            "variable_saving" => "20000",
            "variable_investment" => "80000",
        ]);
    }
}
