<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;     // ✅ correct import
use App\Models\User;     // ✅ correct import if you use user_id

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraph,
            // Optional: only if posts table has user_id
            // 'user_id' => User::inRandomOrder()->first()->id,
        ];
    }
}
