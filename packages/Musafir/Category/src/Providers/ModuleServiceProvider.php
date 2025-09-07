<?php

namespace Musafir\Category\Providers;

use Musafir\Core\Providers\CoreModuleServiceProvider;

class ModuleServiceProvider extends CoreModuleServiceProvider
{
    /**
     * Models.
     *
     * @var array
     */
    protected $models = [
        \Musafir\Category\Models\Category::class,
        \Musafir\Category\Models\CategoryTranslation::class,
    ];
}
