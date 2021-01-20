<?php

namespace Spatie\WorkshopLaravelPackage\Tests;

use Spatie\WorkshopLaravelPackage\Commands\ShowTextCommand;

class ShowTextCommandTest extends TestCase
{
    /** @test */
    public function it_will_greet_john_doe_by_default()
    {
        $this
            ->artisan(ShowTextCommand::class)
            ->assertExitCode(0)
            ->expectsOutput('Hey John Doe');
    }

    /** @test */
    public function it_will_greet_other_persons()
    {
        $name = 'Dorian Bartsch';

        config()->set('workshop-laravel-package.name', $name);

        $this
            ->artisan(ShowTextCommand::class)
            ->assertExitCode(0)
            ->expectsOutput("Hey {$name}");
    }
}
