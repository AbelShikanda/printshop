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
            CreateUsersSeeder::class,
            // ++++++++++++++++++++++++++++++++++++++++++++++++
            CreateRolesSeeder::class,
            // ++++++++++++++++++++++++++++++++++++++++++++++++
            CreateProductPriceTriggerSeeder::class,
            UpdateProductPriceTriggerSeeder::class,
            // ++++++++++++++++++++++++++++++++++++++++++++++++
            CreateOrdersMirrorTriggerSeeder::class,
            CreateBlogsMirrorTriggerSeeder::class,
            CreateProductsMirrorTriggerSeeder::class,
            CreateUsersMirrorTriggerSeeder::class,
            CreateWishlistMirrorTriggerSeeder::class,
            // ++++++++++++++++++++++++++++++++++++++++++++++++
            CreatePersonalAcessTokensMirrorTriggerSeeder::class,
            CreateFailedJobsMirrorTriggerSeeder::class,
            CreatePasswordResetTokensMirrorTriggerSeeder::class,
        ]);
    }
}
