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

use Illuminate\Support\ServiceProvider;
use Ridwaanzan\Worldcurrency\WorldCurrencyPublishCommand;

/**
 * WorldCurrency Service Provider
 */
class WorldcurrencyServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                WorldCurrencyPublishCommand::class,
            ]);
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        # code...
    }
}
