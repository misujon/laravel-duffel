<?php

namespace Misujon\LaravelDuffel\Facades;

use Illuminate\Support\Facades\Facade;

class DuffelOrder extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'duffel.order';
    }
}
