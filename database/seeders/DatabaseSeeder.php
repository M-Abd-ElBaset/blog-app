<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'John Doe'
        ]);

        $categories = Category::factory(3)->create();

        Log::alert($categories);

        Post::factory(5)->create([
            'user_id' => $user->id,
            'category_id' => $categories->first()->id
        ]);

        Post::factory(5)->create([
            'user_id' => $user->id,
            'category_id' => $categories->last()->id
        ]);

        Post::factory(5)->create([
            'user_id' => $user->id,
            'category_id' => $categories->last()->id - 1
        ]);
    }
}
