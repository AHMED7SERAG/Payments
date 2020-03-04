<?php

use Illuminate\Database\Seeder;
use App\PaymentPlatform;
use App\Currency;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CurrenciesTableSeeder::class);
        $this->call(PaymentPlatformsTableSeeder::class);

    }
}
