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
        DB::table("investment")->insert([
            "invest_id" => "1",
            "user_id" => "1",
            "domestic_stock" => "5000",
            "developed_stocks" => "20000",
            "emerging_stocks" => "5000",
            "domestic_bonds" => "10000",
            "developed_bonds" => "10000",
            "emerging_bonds" => "10000",
            "japan_riet" => "25000",
            "oversea_riet" => "25000",
            "other" => "0"
        ]);
    }
}
