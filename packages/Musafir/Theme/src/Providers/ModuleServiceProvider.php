<?php

namespace Musafir\Theme\Providers;

use Musafir\Core\Providers\CoreModuleServiceProvider;

class ModuleServiceProvider extends CoreModuleServiceProvider
{
    /**
     * Define the models
     *
     * @var array
     */
    protected $models = [
        \Musafir\Theme\Models\ThemeCustomization::class,
        \Musafir\Theme\Models\ThemeCustomizationTranslation::class,
    ];
}
