<?php

namespace ILAB_Illuminate\Support\Facades;

/**
 * @see \ILAB_Illuminate\Database\DatabaseManager
 * @see \ILAB_Illuminate\Database\Connection
 */
class DB extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'db';
    }
}
