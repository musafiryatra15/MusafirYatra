<?php

namespace Musafir\CatalogRule\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event handler mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'promotions.catalog_rule.create.after'  => [
            'Musafir\CatalogRule\Listeners\CatalogRule@afterUpdateCreate',
        ],

        'promotions.catalog_rule.update.after'  => [
            'Musafir\CatalogRule\Listeners\CatalogRule@afterUpdateCreate',
        ],

        'promotions.catalog_rule.update.before'  => [
            'Musafir\CatalogRule\Listeners\CatalogRule@beforeUpdate',
        ],

        'promotions.catalog_rule.delete.before'  => [
            'Musafir\CatalogRule\Listeners\CatalogRule@beforeDelete',
        ],

        'catalog.product.update.after'  => [
            'Musafir\CatalogRule\Listeners\Product@afterUpdate',
        ],
    ];
}
