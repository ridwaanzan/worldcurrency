<?php

/**
 * This file is part of WorldCurrency package.
 *
 * (c) Ridwan Haqi or Ridwan Zan Haqqi | ridwan.haqi@gmail.com
 *
 * Created at: 26 October 2023
 *
 */

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WorldCurrencySeeder extends Seeder
{
    /**
     * Seed the package for application databases
     *
     * @return void
     */
    public function run()
    {
        $this->call(WorldCurrencyDataSeeder::class);
    }
}
