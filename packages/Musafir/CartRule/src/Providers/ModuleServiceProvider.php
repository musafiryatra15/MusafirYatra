<?php

namespace Musafir\CartRule\Providers;

use Musafir\Core\Providers\CoreModuleServiceProvider;

class ModuleServiceProvider extends CoreModuleServiceProvider
{
    /**
     * Models.
     *
     * @var array
     */
    protected $models = [
        \Musafir\CartRule\Models\CartRule::class,
        \Musafir\CartRule\Models\CartRuleCoupon::class,
        \Musafir\CartRule\Models\CartRuleCouponUsage::class,
        \Musafir\CartRule\Models\CartRuleCustomer::class,
        \Musafir\CartRule\Models\CartRuleTranslation::class,
    ];
}
