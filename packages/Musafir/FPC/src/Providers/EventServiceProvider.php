<?php

namespace Musafir\FPC\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event handler mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'catalog.product.update.after'  => [
            'Musafir\FPC\Listeners\Product@afterUpdate',
        ],

        'catalog.product.delete.before' => [
            'Musafir\FPC\Listeners\Product@beforeDelete',
        ],

        'catalog.category.update.after' => [
            'Musafir\FPC\Listeners\Category@afterUpdate',
        ],

        'catalog.category.delete.before' => [
            'Musafir\FPC\Listeners\Category@beforeDelete',
        ],

        'customer.review.update.after' => [
            'Musafir\FPC\Listeners\Review@afterUpdate',
        ],

        'customer.review.delete.before' => [
            'Musafir\FPC\Listeners\Review@beforeDelete',
        ],

        'checkout.order.save.after'     => [
            'Musafir\FPC\Listeners\Order@afterCancelOrCreate',
        ],

        'sales.order.cancel.after'      => [
            'Musafir\FPC\Listeners\Order@afterCancelOrCreate',
        ],

        'sales.refund.save.after'       => [
            'Musafir\FPC\Listeners\Refund@afterCreate',
        ],

        'cms.page.update.after' => [
            'Musafir\FPC\Listeners\Page@afterUpdate',
        ],

        'cms.page.delete.before' => [
            'Musafir\FPC\Listeners\Page@beforeDelete',
        ],

        'theme_customization.create.after' => [
            'Musafir\FPC\Listeners\ThemeCustomization@afterCreate',
        ],

        'theme_customization.update.after' => [
            'Musafir\FPC\Listeners\ThemeCustomization@afterUpdate',
        ],

        'theme_customization.delete.before' => [
            'Musafir\FPC\Listeners\ThemeCustomization@beforeDelete',
        ],

        'core.channel.update.after' => [
            'Musafir\FPC\Listeners\Channel@afterUpdate',
        ],

        'core.configuration.save.after' => [
            'Musafir\FPC\Listeners\CoreConfig@afterUpdate',
        ],

        'marketing.search_seo.url_rewrites.update.after' => [
            'Musafir\FPC\Listeners\URLRewrite@afterUpdate',
        ],

        'marketing.search_seo.url_rewrites.delete.before' => [
            'Musafir\FPC\Listeners\URLRewrite@beforeDelete',
        ],
    ];
}
