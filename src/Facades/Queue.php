<?php

namespace ILAB_Illuminate\Support\Facades;

use ILAB_Illuminate\Support\Testing\Fakes\QueueFake;

/**
 * @see \ILAB_Illuminate\Queue\QueueManager
 * @see \ILAB_Illuminate\Queue\Queue
 */
class Queue extends Facade
{
    /**
     * Replace the bound instance with a fake.
     *
     * @return void
     */
    public static function fake()
    {
        static::swap(new QueueFake(static::getFacadeApplication()));
    }

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'queue';
    }
}
