<?php

return [
    /**
     * Application service providers.
     */
    App\Providers\AppServiceProvider::class,

    /**
     * Musafir's service providers.
     */
    Musafir\Admin\Providers\AdminServiceProvider::class,
    Musafir\Attribute\Providers\AttributeServiceProvider::class,
    Musafir\BookingProduct\Providers\BookingProductServiceProvider::class,
    Musafir\CMS\Providers\CMSServiceProvider::class,
    Musafir\CartRule\Providers\CartRuleServiceProvider::class,
    Musafir\CatalogRule\Providers\CatalogRuleServiceProvider::class,
    Musafir\Category\Providers\CategoryServiceProvider::class,
    Musafir\Checkout\Providers\CheckoutServiceProvider::class,
    Musafir\Core\Providers\CoreServiceProvider::class,
    Musafir\Core\Providers\EnvValidatorServiceProvider::class,
    Musafir\Customer\Providers\CustomerServiceProvider::class,
    Musafir\DataGrid\Providers\DataGridServiceProvider::class,
    Musafir\DataTransfer\Providers\DataTransferServiceProvider::class,
    Musafir\DebugBar\Providers\DebugBarServiceProvider::class,
    Musafir\FPC\Providers\FPCServiceProvider::class,
    Musafir\GDPR\Providers\GDPRServiceProvider::class,
    Musafir\Installer\Providers\InstallerServiceProvider::class,
    Musafir\Inventory\Providers\InventoryServiceProvider::class,
    Musafir\MagicAI\Providers\MagicAIServiceProvider::class,
    Musafir\Marketing\Providers\MarketingServiceProvider::class,
    Musafir\Notification\Providers\NotificationServiceProvider::class,
    Musafir\Payment\Providers\PaymentServiceProvider::class,
    Musafir\Paypal\Providers\PaypalServiceProvider::class,
    Musafir\Product\Providers\ProductServiceProvider::class,
    Musafir\Rule\Providers\RuleServiceProvider::class,
    Musafir\Sales\Providers\SalesServiceProvider::class,
    Musafir\Shipping\Providers\ShippingServiceProvider::class,
    Musafir\Shop\Providers\ShopServiceProvider::class,
    Musafir\Sitemap\Providers\SitemapServiceProvider::class,
    Musafir\SocialLogin\Providers\SocialLoginServiceProvider::class,
    Musafir\SocialShare\Providers\SocialShareServiceProvider::class,
    Musafir\Tax\Providers\TaxServiceProvider::class,
    Musafir\Theme\Providers\ThemeServiceProvider::class,
    Musafir\User\Providers\UserServiceProvider::class,
];
