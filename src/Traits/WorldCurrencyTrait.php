<?php

/**
 * This file is part of WorldCurrency package.
 * 
 * (c) Ridwan Haqi or Ridwan Zan Haqqi | ridwan.haqi@gmail.com
 * 
 * Created at: 26 October 2023
 * 
 */

namespace Ridwaanzan\Worldcurrency\Traits;

trait WorldCurrencyTrait
{
    public function isCurrency($id)
    {
        return $this->currency->id == $id ? true : false;
    }
}
