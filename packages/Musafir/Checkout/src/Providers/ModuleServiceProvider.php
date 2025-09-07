<?php

namespace Musafir\Checkout\Providers;

use Musafir\Core\Providers\CoreModuleServiceProvider;

class ModuleServiceProvider extends CoreModuleServiceProvider
{
    /**
     * Models.
     *
     * @var array
     */
    protected $models = [
        \Musafir\Checkout\Models\Cart::class,
        \Musafir\Checkout\Models\CartAddress::class,
        \Musafir\Checkout\Models\CartItem::class,
        \Musafir\Checkout\Models\CartPayment::class,
        \Musafir\Checkout\Models\CartShippingRate::class,
    ];
}
