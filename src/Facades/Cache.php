<?php

namespace ILAB_Illuminate\Support\Facades;

/**
 * @see \ILAB_Illuminate\Cache\CacheManager
 * @see \ILAB_Illuminate\Cache\Repository
 */
class Cache extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'cache';
    }
}
