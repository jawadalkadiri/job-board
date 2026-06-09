<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(1)->admin()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
        ]);
        User::factory(1)->employer()->create([
            'name' => 'employer',
            'email' => 'employer@gmail.com',
        ]);
        User::factory(1)->seeker()->create([
            'name' => 'seeker',
            'email' => 'seeker@gmail.com',
        ]);
    }
}
