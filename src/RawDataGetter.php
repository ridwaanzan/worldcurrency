<?php

/**
 * This file is part of WorldCurrency package.
 *
 * (c) Ridwan Haqi or Ridwan Zan Haqqi | ridwan.haqi@gmail.com
 *
 * Created at: 26 October 2023
 *
 */

namespace Ridwaanzan\Worldcurrency;

use ParseCsv\Csv;

class RawDataGetter
{
    /**
     * Raw Data file path.
     *
     * @return string
     */
    protected static $path = __DIR__ . '/data/csv';

    /**
     * Get world currency data.
     *
     * @return array
     */
    public static function getWorldCurrency()
    {
        $result = self::getCsvData(self::$path . 'worldcurrency.csv');

        return $result;
    }

    public static function getCsvData($path = '')
    {
        $csv = new Csv();
        $csv->auto($path);

        return $csv->data;
    }
}
