[![License](https://img.shields.io/badge/License-MIT-yellow.svg)](https://packagist.org/packages/ridwaanzan/worldcurrency) [![Latest Stable Version](http://badges.github.io/stability-badges/dist/stable.svg)](https://packagist.org/packages/ridwaanzan/worldcurrency)

`ridwaanzan/worldcurrency` is a Laravel package for all of currency around the world. The package will add files for migrations, seeder (to import data to database) and Model to your Laravel Project.

All currency data will be saved to database, and if you want to get the currency data, you can access trough the Model.

All currency data are from Microsoft official website that i get it at: 26 Oct, 2023. Source: [https://learn.microsoft.com/en-us/linkedin/shared/references/reference-tables/currency-codes](https://learn.microsoft.com/en-us/linkedin/shared/references/reference-tables/currency-codes)

## Quick Instalation

Open command line or terminal inside the root of your Laravel project, and run this command to install the package:

```
composer require ridwaanzan/worldcurrency
```

## Supported Versions

| Laravel Version | Version | Composer Installation                       |
| --------------- | ------- | ------------------------------------------- |
| 7,8,9           | 1.0.0   | `composer require ridwaanzan/worldcurrency` |

### Register Service Provider

#### Laravel

If you want to try to use this package in Laravel 6 or the older, it will be error when doing the migrations.

To ensure the use of the service providers class you can open file **config/app.php** and add Class `IndoRegionServiceProvider` inside the array of Service Providers:

```
// Provider Lain
Ridwaanzan\Worldcurrency\WorldCurrencyServiceProvider::class,
```

### Publish File

Run this command inside your command line or terminal:

```
php artisan worldcurrency:publish
```

When you run the command, it will copying files:

-   Migration files from `/packages/ridwaanzan/worldcurrency/src/database/migrations` to `/database/migrations`
-   Seeder files from `/packages/ridwaanzan/worldcurrency/src/database/seeds` to `/database/seeds`
-   Model files from `/packages/ridwaanzan/worldcurrency/src/database/models` to `/app/Models`

After you run the publish command, you should to run:

```
composer dump-autoload
```

### Migrate and Seeder

You have to run this command to insert the data of world currencies to your database:

```
php artisan migrate
```

Import the data of world currencies:

```
php artisan db:seed --class=WorldCurrencySeeder
```

## Basic Usage

You can use this example of code, to your Laravel project controllers:

```
<?php

use App\Models\WorldCurrency;

// Get all currencies data
$currencies = WorldCurrency::all();

// Search data or find data using id.
$currencies = WorldCurrency::where('code', 'IDR')->first();

$currencyByName = WorldCurrency::where('currency_name', 'LIKE', '%rupiah%')->first();

$currencyByCountry = WorldCurrency::where('country', 'LIKE', '%indonesia%')->first();
```

## Advance Usage

```
Will be updated in 3 days.
```
