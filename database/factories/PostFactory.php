<?php

namespace Spatie\WorkshopLaravelPackage\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Spatie\WorkshopLaravelPackage\Models\Post;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
        ];
    }
}
