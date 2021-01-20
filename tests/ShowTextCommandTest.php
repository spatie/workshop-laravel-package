<?php

namespace Spatie\WorkshopLaravelPackage\Tests;

use Spatie\WorkshopLaravelPackage\Commands\ShowTextCommand;

class ShowTextCommandTest extends TestCase
{
    /** @test */
    public function it_can_run_command()
    {
        $this
            ->artisan(ShowTextCommand::class)
            ->assertExitCode(0)
            ->expectsOutput('Hey everybody');
    }
}
