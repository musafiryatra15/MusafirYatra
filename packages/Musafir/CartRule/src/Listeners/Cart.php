<?php

namespace Musafir\CartRule\Listeners;

use Musafir\CartRule\Helpers\CartRule;

class Cart
{
    /**
     * Create a new listener instance.
     *
     * @param  \Musafir\CartRule\Repositories\CartRule  $cartRuleHelper
     * @return void
     */
    public function __construct(protected CartRule $cartRuleHelper) {}

    /**
     * Apply valid cart rules to cart
     *
     * @param  \Musafir\Checkout\Contracts\Cart  $cart
     * @return void
     */
    public function applyCartRules($cart)
    {
        $this->cartRuleHelper->collect($cart);
    }
}
