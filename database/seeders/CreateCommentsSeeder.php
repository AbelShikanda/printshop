<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CreateCommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        // Fetch blog and user IDs to associate with comments
        $blogIds = DB::table('blog_blog_images')->pluck('blog_images_id')->toArray();
        $userIds = DB::table('users')->pluck('id')->toArray();

        // Ensure we have blog and user IDs available
        if (empty($blogIds) || empty($userIds)) {
            $this->command->info('No blogs or users found. Skipping comments seeding.');
            return;
        }
        
        // Generate 50 random comments
        for ($i = 0; $i < 10; $i++) {
            DB::table('comments')->insert([
                'blog_id' => $blogIds[array_rand($blogIds)],
                'user_id' => $userIds[array_rand($userIds)],
                'content' => $faker->sentence(), // Random content for each comment
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
