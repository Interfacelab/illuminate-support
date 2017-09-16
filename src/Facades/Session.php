<?php

namespace ILAB_Illuminate\Support\Facades;

/**
 * @see \ILAB_Illuminate\Session\SessionManager
 * @see \ILAB_Illuminate\Session\Store
 */
class Session extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'session';
    }
}
