<?php

use Musafir\Checkout\Facades\Cart;

if (! function_exists('cart')) {
    /**
     * Cart helper.
     *
     * @return \Musafir\Checkout\Cart
     */
    function cart()
    {
        return Cart::getFacadeRoot();
    }
}
