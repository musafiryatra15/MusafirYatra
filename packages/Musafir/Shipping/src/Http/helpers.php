<?php

use Musafir\Shipping\Facades\Shipping;

if (! function_exists('shipping')) {
    /**
     * Shipping helper.
     *
     * @return \Musafir\Shipping\Shipping
     */
    function shipping()
    {
        return Shipping::getFacadeRoot();
    }
}
