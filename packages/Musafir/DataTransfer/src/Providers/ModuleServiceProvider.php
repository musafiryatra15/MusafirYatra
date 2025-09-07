<?php

namespace Musafir\DataTransfer\Providers;

use Musafir\Core\Providers\CoreModuleServiceProvider;

class ModuleServiceProvider extends CoreModuleServiceProvider
{
    /**
     * Models.
     *
     * @var array
     */
    protected $models = [
        \Musafir\DataTransfer\Models\Import::class,
        \Musafir\DataTransfer\Models\ImportBatch::class,
    ];
}
