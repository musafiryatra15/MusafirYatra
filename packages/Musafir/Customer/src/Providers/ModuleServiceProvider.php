<?php

namespace Musafir\Customer\Providers;

use Musafir\Core\Providers\CoreModuleServiceProvider;

class ModuleServiceProvider extends CoreModuleServiceProvider
{
    /**
     * Models.
     *
     * @var array
     */
    protected $models = [
        \Musafir\Customer\Models\CompareItem::class,
        \Musafir\Customer\Models\Customer::class,
        \Musafir\Customer\Models\CustomerAddress::class,
        \Musafir\Customer\Models\CustomerGroup::class,
        \Musafir\Customer\Models\CustomerNote::class,
        \Musafir\Customer\Models\Wishlist::class,
    ];
}
