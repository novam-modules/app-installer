<?php

use App\Models\Auth\Account;
use Illuminate\Database\Seeder;

class AccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Account::create([
            "admin_id" => 999,
            "name" => "Holbrook",
            "fein" => "000000",
            "agree" => true,
            "db" => config('database'),
            "mail" => config('mail'),
            "mods" => "all",
        ]);
    }
}
