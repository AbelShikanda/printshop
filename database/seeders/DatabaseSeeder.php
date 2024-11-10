<?php

namespace Database\Seeders;

use App\Models\User;
use CreateBlogImagesTable;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            // ++++++++++++++++++++++++++++++++++++++++++++++++
            BlogCategories::class,
            ProductCategories::class,
            ProductColors::class, 
            ProductMaterials::class,
            ProductSizes::class,
            ProductTypes::class,
            PriceTypeSeeder::class,
            // ++++++++++++++++++++++++++++++++++++++++++++++++
            CreateProductPriceTriggerSeeder::class,
            UpdateProductPriceTriggerSeeder::class,
            // ++++++++++++++++++++++++++++++++++++++++++++++++
            CreateUsersSeeder::class,
            // ++++++++++++++++++++++++++++++++++++++++++++++++
            CreateProductsSeeder::class,
            CreateProductImagesSeeder::class,
            // ++++++++++++++++++++++++++++++++++++++++++++++++
            CreateBlogSeeder::class,
            CreateBlogImagesSeeder::class,
            // ++++++++++++++++++++++++++++++++++++++++++++++++
            CreateCustomersSeeder::class,
            // ++++++++++++++++++++++++++++++++++++++++++++++++
            CreateCommentsSeeder::class,
            // ++++++++++++++++++++++++++++++++++++++++++++++++
            CreateRolesSeeder::class,
        ]);
    }
}
