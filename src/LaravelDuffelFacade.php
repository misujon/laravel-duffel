<?php

namespace Misujon\LaravelDuffel;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Misujon\LaravelDuffel\Skeleton\SkeletonClass
 */
class LaravelDuffelFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-duffel';
    }
}
