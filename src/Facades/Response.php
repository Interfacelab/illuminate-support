<?php

namespace ILAB_Illuminate\Support\Facades;

use ILAB_Illuminate\Contracts\Routing\ResponseFactory as ResponseFactoryContract;

/**
 * @see \ILAB_Illuminate\Contracts\Routing\ResponseFactory
 */
class Response extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return ResponseFactoryContract::class;
    }
}
