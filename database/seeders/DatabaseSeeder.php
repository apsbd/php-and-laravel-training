<?php
namespace Database\Seeders;

use App\Models\Blog;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Blog::factory()->create([
            'title' => 'My first blog',
            'body' => 'This is my first blog post'
        ]);

        Blog::factory()->create([
            'title' => 'My second blog',
            'body' => 'This is my second blog post'
        ]);

        Blog::factory()->create([
            'title' => 'My third blog',
            'body' => 'This is my third blog post'
        ]);
    }
}
