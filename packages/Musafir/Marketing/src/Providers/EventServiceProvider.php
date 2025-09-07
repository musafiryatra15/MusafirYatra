<?php

namespace Musafir\Marketing\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event handler mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        /**
         * Product Events
         */
        'catalog.product.update.before'  => [
            'Musafir\Marketing\Listeners\Product@beforeUpdate',
        ],

        'catalog.product.delete.before' => [
            'Musafir\Marketing\Listeners\Product@beforeDelete',
        ],

        /**
         * Category Events
         */
        'catalog.category.create.after' => [
            'Musafir\Marketing\Listeners\Category@afterCreate',
        ],

        'catalog.category.update.before' => [
            'Musafir\Marketing\Listeners\Category@beforeUpdate',
        ],

        'catalog.category.delete.before' => [
            'Musafir\Marketing\Listeners\Category@beforeDelete',
        ],

        /**
         * CMS Page Events
         */
        'cms.page.create.after' => [
            'Musafir\Marketing\Listeners\Page@afterCreate',
        ],

        'cms.page.update.before' => [
            'Musafir\Marketing\Listeners\Page@beforeUpdate',
        ],

        'cms.page.delete.before' => [
            'Musafir\Marketing\Listeners\Page@beforeDelete',
        ],
    ];
}
