<?php

namespace ILAB_Illuminate\Support\Facades;

/**
 * @see \ILAB_Illuminate\Hashing\BcryptHasher
 */
class Hash extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'hash';
    }
}
