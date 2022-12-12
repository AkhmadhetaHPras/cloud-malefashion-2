<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            AddressSeeder::class,
            BrandSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
            VariantSeeder::class,
            CartItemSeeder::class,
            OrderSeeder::class,
            DetailOrderSeeder::class,
            ReviewSeeder::class,
        ]);
    }
}
