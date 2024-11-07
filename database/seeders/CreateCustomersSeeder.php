<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class CreateCustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Generate 10 random users
        for ($i = 0; $i < 10; $i++) {
            User::create([
                'uuid' => (string) Str::uuid(), // Generate a unique UUID
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'email' => $faker->unique()->safeEmail,
                'gender' => $faker->randomElement(['male', 'female']),
                'phone' => $faker->phoneNumber,
                'town' => $faker->city,
                'location' => $faker->address,
                // 'email_verified_at' => now(),
                'password' => bcrypt('Qwerty123.'), // Encrypted password
                // 'remember_token' => Str::random(10),
            ]);
        }
    }
}
