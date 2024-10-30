<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            BlogCategories::class,
            ProductCategories::class,
            ProductColors::class, 
            ProductMaterials::class,
            ProductSizes::class,
            ProductTypes::class,
            PriceTypeSeeder::class,
            CreateProductPriceTriggerSeeder::class,
            CreateUsersSeeder::class,
            UpdateProductPriceTriggerSeeder::class,
        ]);
    }
}
