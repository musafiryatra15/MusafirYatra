<?php

namespace Musafir\Theme\Facades;

use Illuminate\Support\Facades\Facade;
use Musafir\Theme\Themes as BaseThemes;

class Themes extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return BaseThemes::class;
    }
}
