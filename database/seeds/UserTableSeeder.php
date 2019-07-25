<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            "id" => "1",
            "name" => "TEST",
            "email" => "test@test.com",
            "password" => Hash::make('test'),
            'remember_token' => str_random(10),

        ]);
    }
}
