<?php

namespace ILAB_Illuminate\Support\Facades;

/**
 * @see \ILAB_Illuminate\Redis\RedisManager
 * @see \ILAB_Illuminate\Contracts\Redis\Factory
 */
class Redis extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'redis';
    }
}
