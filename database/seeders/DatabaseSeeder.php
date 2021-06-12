<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Credit;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //User::factory(100)->create();
        Credit::factory(990)->create();

    }
}
