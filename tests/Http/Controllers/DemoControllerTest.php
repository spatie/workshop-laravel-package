<?php

namespace Spatie\WorkshopLaravelPackage\Tests\Http\Controllers;

use Spatie\WorkshopLaravelPackage\Tests\TestCase;

class DemoControllerTest extends TestCase
{
    /** @test */
    public function it_can_render_the_demo_page()
    {
        $this
            ->get('demo')
            ->assertSuccessful()
            ->assertSee(config('workshop-laravel-package.name'));
    }
}
