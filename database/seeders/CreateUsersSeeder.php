<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Run a raw SQL insert
        DB::statement("
            INSERT INTO `admins` (`id`, `username`, `name`, `avatar`, `email`, `password`, `is_admin`, `created_at`, `updated_at`) 
            VALUES (5, 'abel', 'abel', NULL, 'abelshikanda3@gmail.com', '$2y$10$3LYZlEfKFA4xzo84LPmtHuqDHxWIEcEeMqFNho/FXlLFFOs14aE1a', '1', NULL, NULL);

        ");
    }
}
