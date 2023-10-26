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
use Ridwaanzan\Worldcurrency\RawDataGetter;
use Illuminate\Support\Facades\DB;

class WorldCurrencyDataSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Get all Data from csv
        $worldCurrences = RawDataGetter::getWorldCurrency();

        // Insert Data to Database
        DB::table('world_currencies')->insert($worldCurrences);
    }
}
