<?php

namespace Spatie\WorkshopLaravelPackage\Http\Controllers;

class DemoController
{
    public function show()
    {
        return view('workshop-laravel-package::show', [
            'name' => config('workshop-laravel-package.name'),
        ]);
    }
}
