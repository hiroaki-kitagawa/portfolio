<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(IncomeTableSeeder::class);
        $this->call(SpendingTableSeeder::class);
        $this->call(InvestmentTableSeeder::class);
    }
}
