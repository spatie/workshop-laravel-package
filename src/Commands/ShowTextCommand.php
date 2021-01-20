<?php

namespace Spatie\WorkshopLaravelPackage\Commands;

use Illuminate\Console\Command;

class ShowTextCommand extends Command
{
    public $signature = 'show-text';

    public $description = 'Showing a piece of text';

    public function handle()
    {
        $this->comment('Hey ' . config('workshop-laravel-package.name'));
    }
}
