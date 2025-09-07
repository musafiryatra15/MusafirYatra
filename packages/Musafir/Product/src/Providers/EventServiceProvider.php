<?php

namespace Musafir\Product\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event handler mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'catalog.product.create.after'  => [
            'Musafir\Product\Listeners\Product@afterCreate',
        ],
        'catalog.product.update.after'  => [
            'Musafir\Product\Listeners\Product@afterUpdate',
        ],
        'catalog.product.delete.before' => [
            'Musafir\Product\Listeners\Product@beforeDelete',
        ],
        'checkout.order.save.after'     => [
            'Musafir\Product\Listeners\Order@afterCancelOrCreate',
        ],
        'sales.order.cancel.after'      => [
            'Musafir\Product\Listeners\Order@afterCancelOrCreate',
        ],
        'sales.refund.save.after'       => [
            'Musafir\Product\Listeners\Refund@afterCreate',
        ],
    ];
}
