<?php

namespace Musafir\CartRule\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event handler mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'checkout.order.save.after'           => [
            'Musafir\CartRule\Listeners\Order@manageCartRule',
        ],

        'checkout.cart.collect.totals.before' => [
            'Musafir\CartRule\Listeners\Cart@applyCartRules',
        ],
    ];
}
