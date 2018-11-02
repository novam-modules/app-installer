<?php

use App\Models\Auth\Group;
use Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $groups = [
            ['name' => 'User', 'id' => 1],
            ['name' => 'Admin', 'id' => 99],
            ['name' => 'Super', 'id' => 999]
        ];
        foreach ($groups as $group)
        {
            Group::create($group);
        }
    }
}
