<?php

namespace Misujon\LaravelDuffel\Facades;

use Illuminate\Support\Facades\Facade;

class Duffel extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'duffel';
    }
}
