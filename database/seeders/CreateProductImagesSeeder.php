<?php

namespace Database\Seeders;

use App\Models\ProductProductImages;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class CreateProductImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $imagesData = [
            [
                'id' => 1,
                'thumbnail' => 'legends-2023-02-02-63dc14ca434a3.jpg',
                'full' => 'Legends',
                'products_id' => 1,
                'created_at' => Carbon::create('2022', '11', '26', '14', '41', '19'),
                'updated_at' => Carbon::create('2022', '11', '26', '14', '41', '19'),
            ],
            [
                'id' => 2,
                'thumbnail' => 'never-give-up-praying-2023-02-02-63dc1db9bfd5d.jpg',
                'full' => 'Never Give Up Praying',
                'products_id' => 2,
                'created_at' => Carbon::create('2022', '11', '26', '14', '41', '39'),
                'updated_at' => Carbon::create('2022', '11', '26', '14', '41', '39'),
            ],
            [
                'id' => 3,
                'thumbnail' => 'you-matter-2023-02-02-63dc20b492e36.jpg',
                'full' => 'You Matter',
                'products_id' => 3,
                'created_at' => Carbon::create('2022', '11', '26', '14', '41', '55'),
                'updated_at' => Carbon::create('2022', '11', '26', '14', '41', '55'),
            ],
            [
                'id' => 4,
                'thumbnail' => 'relationship-goals-2023-02-02-63dc21f933e32.jpg',
                'full' => 'Relationship Goals',
                'products_id' => 4,
                'created_at' => Carbon::create('2022', '11', '26', '14', '42', '04'),
                'updated_at' => Carbon::create('2022', '11', '26', '14', '42', '04'),
            ],
            [
                'id' => 5,
                'thumbnail' => 'blue-fire-2023-02-02-63dc23a9396d3.jpg',
                'full' => 'Blue Fire',
                'products_id' => 5,
                'created_at' => Carbon::create('2022', '11', '26', '14', '42', '20'),
                'updated_at' => Carbon::create('2022', '11', '26', '14', '42', '20'),
            ],
            [
                'id' => 6,
                'thumbnail' => 'good-leader-2023-02-02-63dc24fadf6dc.jpg',
                'full' => 'Good Leader',
                'products_id' => 6,
                'created_at' => Carbon::create('2022', '11', '26', '14', '42', '35'),
                'updated_at' => Carbon::create('2022', '11', '26', '14', '42', '35'),
            ],
            [
                'id' => 7,
                'thumbnail' => 'bad-choices-make-good-stories-2023-02-10-63e652057504f.jpg',
                'full' => 'Bad Choices Make Good Stories',
                'products_id' => 7,
                'created_at' => Carbon::create('2022', '11', '26', '14', '43', '16'),
                'updated_at' => Carbon::create('2022', '11', '26', '14', '43', '16'),
            ],
        ];
        foreach ($imagesData as $index => $imageData) {
            $sourcePath = public_path("assets/img/products/{$imageData['thumbnail']}");
            // dd($sourcePath);

            if (file_exists($sourcePath)) {
                // Process the image with Intervention Image
                $currentDate = now()->toDateString();
                $fileName = $currentDate . '-' . uniqid() . '.' . pathinfo($sourcePath, PATHINFO_EXTENSION);
                
                $manager = new ImageManager(Driver::class);
                $interventionImage = $manager->read($sourcePath);
                $croppedImage = $interventionImage->resize(1280, 853);;
                
                $croppedImagePath = "img/products/". $fileName;
                
                Storage::disk('public')->put($croppedImagePath, (string) $croppedImage->toJpeg());

                $imageData['thumbnail'] = $fileName;
            }else {
                echo "Source image not found at path: {$sourcePath}\n";
            }

            // Insert record into database
            DB::table('product_images')->insert([
                'id' => $imageData['id'],
                'thumbnail' => $imageData['thumbnail'],
                'full' => $imageData['full'],
                'products_id' => $imageData['products_id'],
                'created_at' => $imageData['created_at'],
                'updated_at' => $imageData['updated_at'],
            ]);

            // Add related entry in the ProductProductImages table
            ProductProductImages::create([
                'products_id' => $imageData['products_id'],
                'product_images_id' => $imageData['id'],
            ]);
        }
    }
}
