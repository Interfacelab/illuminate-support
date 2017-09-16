<?php

namespace ILAB_Illuminate\Support\Facades;

use ILAB_Illuminate\Notifications\ChannelManager;
use ILAB_Illuminate\Notifications\AnonymousNotifiable;
use ILAB_Illuminate\Support\Testing\Fakes\NotificationFake;

/**
 * @see \ILAB_Illuminate\Notifications\ChannelManager
 */
class Notification extends Facade
{
    /**
     * Replace the bound instance with a fake.
     *
     * @return void
     */
    public static function fake()
    {
        static::swap(new NotificationFake);
    }

    /**
     * Begin sending a notification to an anonymous notifiable.
     *
     * @param  string  $channel
     * @param  mixed  $route
     * @return \ILAB_Illuminate\Notifications\AnonymousNotifiable
     */
    public static function route($channel, $route)
    {
        return (new AnonymousNotifiable)->route($channel, $route);
    }

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return ChannelManager::class;
    }
}
