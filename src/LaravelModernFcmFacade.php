<?php

namespace Thekavish\LaravelModernFcm;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Thekavish\LaravelModernFcm\Skeleton\SkeletonClass
 */
class LaravelModernFcmFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-modern-fcm';
    }
}
