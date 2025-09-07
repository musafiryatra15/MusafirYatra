<?php

return [

    /**
     * The path of the convention file.
     */
    'convention' => Musafir\Core\CoreConvention::class,

    /**
     * Example:
     *
     * VendorA\ModuleX\Providers\ModuleServiceProvider::class,
     * VendorB\ModuleY\Providers\ModuleServiceProvider::class,
     */
    'modules' => [
        \Musafir\Admin\Providers\ModuleServiceProvider::class,
        \Musafir\Attribute\Providers\ModuleServiceProvider::class,
        \Musafir\BookingProduct\Providers\ModuleServiceProvider::class,
        \Musafir\CMS\Providers\ModuleServiceProvider::class,
        \Musafir\CartRule\Providers\ModuleServiceProvider::class,
        \Musafir\CatalogRule\Providers\ModuleServiceProvider::class,
        \Musafir\Category\Providers\ModuleServiceProvider::class,
        \Musafir\Checkout\Providers\ModuleServiceProvider::class,
        \Musafir\Core\Providers\ModuleServiceProvider::class,
        \Musafir\Customer\Providers\ModuleServiceProvider::class,
        \Musafir\DataGrid\Providers\ModuleServiceProvider::class,
        \Musafir\DataTransfer\Providers\ModuleServiceProvider::class,
        \Musafir\GDPR\Providers\ModuleServiceProvider::class,
        \Musafir\Inventory\Providers\ModuleServiceProvider::class,
        \Musafir\Marketing\Providers\ModuleServiceProvider::class,
        \Musafir\Notification\Providers\ModuleServiceProvider::class,
        \Musafir\Payment\Providers\ModuleServiceProvider::class,
        \Musafir\Paypal\Providers\ModuleServiceProvider::class,
        \Musafir\Product\Providers\ModuleServiceProvider::class,
        \Musafir\Rule\Providers\ModuleServiceProvider::class,
        \Musafir\Sales\Providers\ModuleServiceProvider::class,
        \Musafir\Shipping\Providers\ModuleServiceProvider::class,
        \Musafir\Shop\Providers\ModuleServiceProvider::class,
        \Musafir\Sitemap\Providers\ModuleServiceProvider::class,
        \Musafir\SocialLogin\Providers\ModuleServiceProvider::class,
        \Musafir\Tax\Providers\ModuleServiceProvider::class,
        \Musafir\Theme\Providers\ModuleServiceProvider::class,
        \Musafir\User\Providers\ModuleServiceProvider::class,
    ],

];
