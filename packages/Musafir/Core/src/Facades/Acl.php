<?php

namespace Musafir\Core\Facades;

use Illuminate\Support\Facades\Facade;
use Musafir\Core\Acl as BaseAcl;

class Acl extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return BaseAcl::class;
    }
}
