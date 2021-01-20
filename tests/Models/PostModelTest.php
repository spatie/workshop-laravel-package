<?php

namespace Spatie\WorkshopLaravelPackage\Tests\Models;

use Spatie\WorkshopLaravelPackage\Models\Post;
use Spatie\WorkshopLaravelPackage\Tests\TestCase;

class PostModelTest extends TestCase
{
    /** @test */
    public function it_can_return_the_uppercased_title()
    {
        /** @var \Spatie\WorkshopLaravelPackage\Models\Post $post */
        $post = Post::create([
            'title' => 'Laravel Workshop',
        ]);

        $this->assertEquals('LARAVEL WORKSHOP', $post->getUppercasedTitle());
    }
}
