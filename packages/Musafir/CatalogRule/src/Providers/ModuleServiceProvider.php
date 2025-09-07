<?php

namespace Musafir\CatalogRule\Providers;

use Musafir\Core\Providers\CoreModuleServiceProvider;

class ModuleServiceProvider extends CoreModuleServiceProvider
{
    /**
     * Models.
     *
     * @var array
     */
    protected $models = [
        \Musafir\CatalogRule\Models\CatalogRule::class,
        \Musafir\CatalogRule\Models\CatalogRuleProduct::class,
        \Musafir\CatalogRule\Models\CatalogRuleProductPrice::class,
    ];
}
