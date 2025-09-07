<?php

namespace Musafir\GDPR\Providers;

use Musafir\Core\Providers\CoreModuleServiceProvider;

class ModuleServiceProvider extends CoreModuleServiceProvider
{
    /**
     * Models.
     *
     * @var array
     */
    protected $models = [
        \Musafir\GDPR\Models\GDPRDataRequest::class,
    ];
}
