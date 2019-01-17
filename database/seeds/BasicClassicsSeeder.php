<?php

use Illuminate\Database\Seeder;

class BasicClassicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customers = factory(\App\Customer::class, 5)->create();
        //$accounts = factory(\App\Order::class, 10)->create();
    }
}
