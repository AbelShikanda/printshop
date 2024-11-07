<?php

namespace Database\Seeders;

use App\Models\BlogBlogImages;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class CreateBlogImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $imagesData = [
            [
                'id' => 1,
                'thumbnail' => 'istockphoto-1185540944-612x612.jpg',
                'full' => 'The Walking Dad',
                'blogs_id' => 1,
                'created_at' => Carbon::create('2022', '11', '26', '14', '41', '19'),
                'updated_at' => Carbon::create('2022', '11', '26', '14', '41', '19'),
            ],
            [
                'id' => 2,
                'thumbnail' => 'istockphoto-1185540944-612x612.jpg',
                'full' => 'Don\'t Be A Suck Up',
                'blogs_id' => 2,
                'created_at' => Carbon::create('2022', '11', '26', '14', '41', '39'),
                'updated_at' => Carbon::create('2022', '11', '26', '14', '41', '39'),
            ],
            [
                'id' => 3,
                'thumbnail' => 'how-to-make-embroidery.jpg',
                'full' => 'Choose Kind',
                'blogs_id' => 3,
                'created_at' => Carbon::create('2022', '11', '26', '14', '41', '55'),
                'updated_at' => Carbon::create('2022', '11', '26', '14', '41', '55'),
            ],
            [
                'id' => 4,
                'thumbnail' => 'post-1.jpg',
                'full' => 'Millenial',
                'blogs_id' => 4,
                'created_at' => Carbon::create('2022', '11', '26', '14', '42', '04'),
                'updated_at' => Carbon::create('2022', '11', '26', '14', '42', '04'),
            ],
            [
                'id' => 5,
                'thumbnail' => 'top_custom_embroidery_tips_for_your_embroidery_business.png',
                'full' => 'Be His Queen',
                'blogs_id' => 5,
                'created_at' => Carbon::create('2022', '11', '26', '14', '42', '20'),
                'updated_at' => Carbon::create('2022', '11', '26', '14', '42', '20'),
            ],
            [
                'id' => 6,
                'thumbnail' => 'Embroidery-Services-2-1.jpg',
                'full' => 'A Life Without Prayer Is  A Life Without Power',
                'blogs_id' => 6,
                'created_at' => Carbon::create('2022', '11', '26', '14', '42', '35'),
                'updated_at' => Carbon::create('2022', '11', '26', '14', '42', '35'),
            ],
            [
                'id' => 7,
                'thumbnail' => 'istockphoto-614950614-612x612.jpg',
                'full' => 'Energy Is Contagious',
                'blogs_id' => 7,
                'created_at' => Carbon::create('2022', '11', '26', '14', '43', '16'),
                'updated_at' => Carbon::create('2022', '11', '26', '14', '43', '16'),
            ],
        ];
        foreach ($imagesData as $index => $imageData) {
            $sourcePath = public_path("assets/img/blogs/{$imageData['thumbnail']}");

            if (file_exists($sourcePath)) {
                // Process the image with Intervention Image
                $currentDate = now()->toDateString();
                $fileName = $currentDate . '-' . uniqid() . '.' . pathinfo($sourcePath, PATHINFO_EXTENSION);
                
                $manager = new ImageManager(Driver::class);
                $interventionImage = $manager->read($sourcePath);
                $croppedImage = $interventionImage->resize(1001, 667);;
                
                $croppedImagePath = "img/blogs/". $fileName;
                
                Storage::disk('public')->put($croppedImagePath, (string) $croppedImage->toJpeg());

                $imageData['thumbnail'] = $fileName;
            }else {
                echo "Source image not found at path: {$sourcePath}\n";
            }

            DB::table('blog_images')->insert([
                'id' => $imageData['id'],
                'thumbnail' => $imageData['thumbnail'],
                'full' => $imageData['full'],
                'blogs_id' => $imageData['blogs_id'],
                'created_at' => $imageData['created_at'],
                'updated_at' => $imageData['updated_at'],
            ]);

            // Add related entry in the blogblogImages table
            BlogBlogImages::create([
                'blogs_id' => $imageData['blogs_id'],
                'blog_images_id' => $imageData['id'],
            ]);
        }
    }
}
