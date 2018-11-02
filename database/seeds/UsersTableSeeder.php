<?php

use App\Models\Auth\User;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = [
            ['email' => 'user@domain.com', 'group_id' => 1, 'empno' => 1, 'password' => bcrypt('secret')],
            ['email' => 'admin@domain.com', 'group_id' => 99, 'empno' => 2, 'password' => bcrypt('secret')],
            ['email' => 'super@domain.com', 'group_id' => 999, 'empno' => 3, 'password' => bcrypt('secret')],
        ];
        foreach ($users as $user) {
            User::create($user + [
                'account_id' => 1, 'email_verified_at' => $now = Carbon::now(), 'activated_at' => $now
            ]);
        }
    }
}
