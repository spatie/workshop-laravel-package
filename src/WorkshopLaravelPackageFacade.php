<?php

namespace Spatie\WorkshopLaravelPackage;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Spatie\WorkshopLaravelPackage\WorkshopLaravelPackage
 */
class WorkshopLaravelPackageFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'workshop-laravel-package';
    }
}
