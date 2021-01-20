<?php

namespace Spatie\WorkshopLaravelPackage\Http\Controllers;

class DemoController
{
    public function show()
    {
        return 'greetings from ' . config('workshop-laravel-package.name');
    }
}
