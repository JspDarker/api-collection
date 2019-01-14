<?php

use Illuminate\Database\Seeder;

class ManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $group_roles = factory(\App\GroupRole::class, 5)->create();
        $accounts = factory(\App\Account::class, 500)->create();
    }
}
