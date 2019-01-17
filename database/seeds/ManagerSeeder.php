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
        $accounts = factory(\App\Account::class, 15)->create();
        $films = factory(\App\Film::class, 1000)->create();
        $actors = factory(\App\Actor::class, 1000)->create();
        $filmActor = factory(\App\FilmActor::class, 1000)->create();
    }
}
