<?php

namespace ILAB_Illuminate\Support\Facades;

use ILAB_Illuminate\Contracts\Broadcasting\Factory as BroadcastingFactoryContract;

/**
 * @see \ILAB_Illuminate\Contracts\Broadcasting\Factory
 */
class Broadcast extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return BroadcastingFactoryContract::class;
    }
}
