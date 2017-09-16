<?php

namespace ILAB_Illuminate\Support\Facades;

use ILAB_Illuminate\Contracts\Auth\Access\Gate as GateContract;

/**
 * @see \ILAB_Illuminate\Contracts\Auth\Access\Gate
 */
class Gate extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return GateContract::class;
    }
}
