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
            "fixed_income" => "210000",
            "extra_income" => "30000",
            // 固定費
            "fixed_rent_budget" => "80000",
            "fixed_rent" => "60000",
            "fixed_insurance_budget" => "4000",
            "fixed_insurance" => "4000",
            "fixed_other_budget" => "0",
            "fixed_other" => "0",
            // 変動費
            "variable_utilities_budget" => "10000",
            "variable_utilities" => "10000",
            "variable_food_budget" => "20000",
            "variable_food" => "20000",
            "variable_daily_budget" => "3000",
            "variable_daily" => "3000",
            "variable_transportation_budget" => "0",
            "variable_transportation" => "0",
            "variable_automotive_budget" => "0",
            "variable_automotive" => "0",
            "variable_other_budget" => "0",
            "variable_other" => "0",
            // 自己投資
            "selfinvest_communication_budget" => "3000",
            "selfinvest_communication" => "3000",
            "selfinvest_education_budget" => "6000",
            "selfinvest_education" => "6000",
            "selfinvest_medical_budget" => "0",
            "selfinvest_medical" => "0",
            "selfinvest_clothing_budget" => "0",
            "selfinvest_clothing" => "0",
            "selfinvest_allowance_budget" => "20000",
            "selfinvest_allowance" => "20000",
            "selfinvest_pocketmoney_budget" => "0",
            "selfinvest_pocketmoney" => "0",
            "selfinvest_favorite_budget" => "0",
            "selfinvest_favorite" => "0",
            "selfinvest_other_budget" => "0",
            "selfinvest_other" => "0",
            // 貯蓄・投資
            "storeinvest_saving_budget" => "20000",
            "storeinvest_saving" => "20000",
            "storeinvest_investment_budget" => "80000",
            "storeinvest_investment" => "80000",
            "storeinvest_other_budget" => "0",
            "storeinvest_other" => "0",
        ]);
    }
}
