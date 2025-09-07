<?php

namespace Musafir\Tax\Providers;

use Musafir\Core\Providers\CoreModuleServiceProvider;

class ModuleServiceProvider extends CoreModuleServiceProvider
{
    /**
     * Models.
     *
     * @var array
     */
    protected $models = [
        \Musafir\Tax\Models\TaxCategory::class,
        \Musafir\Tax\Models\TaxMap::class,
        \Musafir\Tax\Models\TaxRate::class,
    ];
}
