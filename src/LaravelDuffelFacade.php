<?php

namespace SoftminionTechnologyLimited\LaravelDuffel;

use Illuminate\Support\Facades\Facade;

/**
 * @see \SoftminionTechnologyLimited\LaravelDuffel\Skeleton\SkeletonClass
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
