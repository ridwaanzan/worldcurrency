<?php

/**
 * This file is part of WorldCurrency package.
 *
 * (c) Ridwan Haqi or Ridwan Zan Haqqi | ridwan.haqi@gmail.com
 *
 * Created at: 26 October 2023
 *
 */

use PHPUnit\Framework\TestCase;
use Ridwaanzan\Worldcurrency\RawDataGetter as RawData;

class RawDataTest extends TestCase{
    /**
     * Test get all data
     *
     * @return void
     */
    public function test()
    {
        $data = RawData::getWorldCurrency();

        $this->assertTrue(count($data) > 0);
    }
}
