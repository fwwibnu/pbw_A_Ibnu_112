<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Akun dengan role berbeda (admin, staff, viewer)
        $this->call(RoleUserSeeder::class);

        Author::factory(10)->create()->each(function (Author $author) {
            Book::factory(5)->create([
                'author_id' => $author->id,
            ]);
        });
    }
}