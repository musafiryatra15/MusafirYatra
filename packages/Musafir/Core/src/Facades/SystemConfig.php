<?php

namespace Musafir\Core\Facades;

use Illuminate\Support\Facades\Facade;
use Musafir\Core\SystemConfig as BaseSystemConfig;

class SystemConfig extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return BaseSystemConfig::class;
    }
}
