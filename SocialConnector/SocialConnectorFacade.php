<?php

namespace San3jaya\SocialConnector;

use Illuminate\Support\Facades\Facade;

class SocialConnectorFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'socialconnector';
    }
}
