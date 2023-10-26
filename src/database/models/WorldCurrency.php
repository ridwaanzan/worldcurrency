<?php

/**
 * This file is part of WorldCurrency package.
 * 
 * (c) Ridwan Haqi or Ridwan Zan Haqqi | ridwan.haqi@gmail.com
 * 
 * Created at: 26 October 2023
 * 
 */

use Ridwaanzan\Worldcurrency\Traits\WorldCurrencyTrait;
use Illuminate\Database\Eloquent\Model;

/**
 * WorldCurrency Model
 */

class WorldCurrency extends Model
{
    use WorldCurrencyTrait;

    /**
     * Table name
     * 
     * @var string
     */
    protected $table = 'world_currencies';
}
