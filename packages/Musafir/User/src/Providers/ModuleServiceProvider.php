<?php

namespace Musafir\User\Providers;

use Musafir\Core\Providers\CoreModuleServiceProvider;

class ModuleServiceProvider extends CoreModuleServiceProvider
{
    /**
     * Models.
     *
     * @var array
     */
    protected $models = [
        \Musafir\User\Models\Admin::class,
        \Musafir\User\Models\Role::class,
    ];
}
