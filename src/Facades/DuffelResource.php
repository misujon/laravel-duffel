<?php

namespace Misujon\LaravelDuffel\Facades;

use Illuminate\Support\Facades\Facade;

class DuffelResource extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'duffel.resource';
    }
}
