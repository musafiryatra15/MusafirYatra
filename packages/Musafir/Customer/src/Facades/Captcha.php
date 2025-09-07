<?php

namespace Musafir\Customer\Facades;

use Illuminate\Support\Facades\Facade;
use Musafir\Customer\Captcha as BaseCaptcha;

class Captcha extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return BaseCaptcha::class;
    }
}
