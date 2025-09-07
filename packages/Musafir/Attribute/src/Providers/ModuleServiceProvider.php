<?php

namespace Musafir\Attribute\Providers;

use Musafir\Core\Providers\CoreModuleServiceProvider;

class ModuleServiceProvider extends CoreModuleServiceProvider
{
    /**
     * Models.
     *
     * @var array
     */
    protected $models = [
        \Musafir\Attribute\Models\Attribute::class,
        \Musafir\Attribute\Models\AttributeFamily::class,
        \Musafir\Attribute\Models\AttributeGroup::class,
        \Musafir\Attribute\Models\AttributeOption::class,
        \Musafir\Attribute\Models\AttributeOptionTranslation::class,
        \Musafir\Attribute\Models\AttributeTranslation::class,
    ];
}
