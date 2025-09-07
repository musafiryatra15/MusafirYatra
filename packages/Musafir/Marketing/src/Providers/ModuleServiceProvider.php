<?php

namespace Musafir\Marketing\Providers;

use Musafir\Core\Providers\CoreModuleServiceProvider;

class ModuleServiceProvider extends CoreModuleServiceProvider
{
    /**
     * Models.
     *
     * @var array
     */
    protected $models = [
        \Musafir\Marketing\Models\Campaign::class,
        \Musafir\Marketing\Models\Event::class,
        \Musafir\Marketing\Models\SearchSynonym::class,
        \Musafir\Marketing\Models\SearchTerm::class,
        \Musafir\Marketing\Models\Template::class,
        \Musafir\Marketing\Models\URLRewrite::class,
    ];
}
