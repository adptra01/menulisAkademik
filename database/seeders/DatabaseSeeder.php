<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Database\Factories\AcademyFactory;
use Database\Factories\ArgumentCategoryFactory;
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
        // \App\Models\User::factory(10)->create();
        AcademyFactory::factory(10)->create();
        // ArgumentCategoryFactory::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'testing@testing.com',
            'password' => bcrypt('testing'),
            // 'isAdmin' => true,
        ]);
    }
}
