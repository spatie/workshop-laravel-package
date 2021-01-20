<?php

namespace Spatie\WorkshopLaravelPackage\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    public function getUppercasedTitle(): string
    {
        return strtoupper($this->title);
    }
}
