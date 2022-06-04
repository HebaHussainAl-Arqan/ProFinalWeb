<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
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
           // UserSeeder::class,
            ProductSeeder::class,
            AdSeeder::class,
        ]);

        // \App\Models\User::factory(10)->create();
    }
}
