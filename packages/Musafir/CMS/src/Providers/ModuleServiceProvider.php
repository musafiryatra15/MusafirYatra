<?php

namespace Musafir\CMS\Providers;

use Musafir\Core\Providers\CoreModuleServiceProvider;

class ModuleServiceProvider extends CoreModuleServiceProvider
{
    /**
     * Models.
     *
     * @var array
     */
    protected $models = [
        \Musafir\CMS\Models\Page::class,
        \Musafir\CMS\Models\PageTranslation::class,
    ];
}
