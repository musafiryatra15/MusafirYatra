<?php

namespace Musafir\Core\Facades;

use Illuminate\Support\Facades\Facade;
use Musafir\Core\Core as BaseCore;

class Core extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return BaseCore::class;
    }
}
