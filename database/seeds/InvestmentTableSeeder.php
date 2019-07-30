<?php

use Illuminate\Database\Seeder;

class InvestmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("investments")->insert([
            "id" => "1",
            "user_id" => "1",
            "total_amount" => "100000",
            "cash" => "10000",
            "government_bonds" => "10000",
            "domestic_stocks" => "15000",
            "developed_stocks" => "10000",
            "emerging_stocks" => "10000",
            "domestic_bonds" => "20000",
            "developed_bonds" => "30000",
            "emerging_bonds" => "10000",
            "japan_riet" => "2500",
            "oversea_riet" => "2500",
            "other" => "0"
        ]);
    }
}
