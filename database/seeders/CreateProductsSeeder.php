<?php

namespace Database\Seeders;

use App\Models\ProductProductCategories;
use App\Models\ProductProductColors;
use App\Models\ProductProductMaterials;
use App\Models\ProductProductSizes;
use App\Models\ProductProductTypes;
use App\Models\Products;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Sample product data
        $products = [
            [
                'id' => 1,
                'categories_id' => 1, 
                'type_id' => 1,       
                'colors_id' => 1,     
                'sizes_id' => 2,      
                'materials_id' => 1,  
                'price' => 850,
                'name' => 'February Legends',
                'slug' => 'february-legends',
                'description' => 'legends are born in February',
                'meta_keywords' => 'February, Legends, birthday',
                'whatsapp' => 0,
                'telegram' => 0,
                'website' => 0,
                'promotion' => 0,
                'created_at' => Carbon::create('2022', '11', '26', '14', '32', '35'),
                'updated_at' => Carbon::create('2022', '11', '26', '14', '32', '35'),
            ],
            [
                'id' => 2,
                'categories_id' => 2, 
                'type_id' => 1,       
                'colors_id' => 2,     
                'sizes_id' => 3,      
                'materials_id' => 1,  
                'price' => 850,
                'name' => 'Never Give Up Praying',
                'slug' => 'never-give-up-praying',
                'description' => 'Prayer is the most powerful action in any person\'s life.',
                'meta_keywords' => 'Custom, Christian, T-shirt',
                'whatsapp' => 0,
                'telegram' => 0,
                'website' => 0,
                'promotion' => 0,
                'created_at' => Carbon::create('2022', '11', '26', '14', '32', '35'),
                'updated_at' => Carbon::create('2022', '11', '26', '14', '32', '35'),
            ],
            [
                'id' => 3,
                'categories_id' => 3, 
                'type_id' => 8,       
                'colors_id' => 3,     
                'sizes_id' => 4,      
                'materials_id' => 1,  
                'price' => 2500,
                'name' => 'You Matter',
                'slug' => 'you-matter',
                'description' => 'Love yourself',
                'meta_keywords' => 'Hoodie, inspiring',
                'whatsapp' => 0,
                'telegram' => 0,
                'website' => 0,
                'promotion' => 0,
                'created_at' => Carbon::create('2022', '11', '26', '14', '32', '35'),
                'updated_at' => Carbon::create('2022', '11', '26', '14', '32', '35'),
            ],
            [
                'id' => 4,
                'categories_id' => 4, 
                'type_id' => 8,       
                'colors_id' => 4,     
                'sizes_id' => 5,      
                'materials_id' => 1,  
                'price' => 2500,
                'name' => 'Relationship Goals',
                'slug' => 'relationship-goals',
                'description' => 'The most important relationships in people\'s lives.',
                'meta_keywords' => 'Funny, hoodie',
                'whatsapp' => 0,
                'telegram' => 0,
                'website' => 0,
                'promotion' => 0,
                'created_at' => Carbon::create('2022', '11', '26', '14', '32', '35'),
                'updated_at' => Carbon::create('2022', '11', '26', '14', '32', '35'),
            ],
            [
                'id' => 5,
                'categories_id' => 5, 
                'type_id' => 4,       
                'colors_id' => 5,     
                'sizes_id' => 6,      
                'materials_id' => 1,  
                'price' => 2000,
                'name' => 'Blue Fire',
                'slug' => 'blue-fire',
                'description' => 'Anime inspired',
                'meta_keywords' => 'Anime, Sweatshirt',
                'whatsapp' => 0,
                'telegram' => 0,
                'website' => 0,
                'promotion' => 0,
                'created_at' => Carbon::create('2022', '11', '26', '14', '32', '35'),
                'updated_at' => Carbon::create('2022', '11', '26', '14', '32', '35'),
            ],
            [
                'id' => 6,
                'categories_id' => 6, 
                'type_id' => 4,       
                'colors_id' => 6,     
                'sizes_id' => 7,      
                'materials_id' => 1,  
                'price' => 2000,
                'name' => 'Good Leader',
                'slug' => 'good-leader',
                'description' => 'When you want to lead, learn how to follow.',
                'meta_keywords' => 'Game of Thrones',
                'whatsapp' => 0,
                'telegram' => 0,
                'website' => 0,
                'promotion' => 0,
                'created_at' => Carbon::create('2022', '11', '26', '14', '32', '35'),
                'updated_at' => Carbon::create('2022', '11', '26', '14', '32', '35'),
            ],
            [
                'id' => 7,
                'categories_id' => 7, 
                'type_id' => 1,       
                'colors_id' => 7,     
                'sizes_id' => 8,      
                'materials_id' => 1,  
                'price' => 850,
                'name' => 'Bad Choices Make Good Stories',
                'slug' => 'bad-choices-make-good-stories',
                'description' => 'No regrets in life',
                'meta_keywords' => 'Inspiring, Tshirt, Quotes',
                'whatsapp' => 0,
                'telegram' => 0,
                'website' => 0,
                'promotion' => 0,
                'created_at' => Carbon::create('2022', '11', '26', '14', '32', '35'),
                'updated_at' => Carbon::create('2022', '11', '26', '14', '32', '35'),
            ],
        ];

        // Insert each product
        foreach ($products as $productData) {
            $product = Products::create($productData);

            // Populate pivot tables
            ProductProductCategories::create([
                'products_id' => $product->id,
                'product_categories_id' => $productData['categories_id'],
            ]);

            ProductProductColors::create([
                'products_id' => $product->id,
                'product_colors_id' => $productData['colors_id'],
            ]);

            ProductProductSizes::create([
                'products_id' => $product->id,
                'product_sizes_id' => $productData['sizes_id'],
            ]);

            ProductProductMaterials::create([
                'products_id' => $product->id,
                'product_materials_id' => $productData['materials_id'],
            ]);

            ProductProductTypes::create([
                'products_id' => $product->id,
                'product_types_id' => $productData['type_id'],
            ]);
        }
    }
}
