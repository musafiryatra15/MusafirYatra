<?php

namespace Musafir\Core\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event handler mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'Prettus\Repository\Events\RepositoryEntityCreated' => [
            'Musafir\Core\Listeners\CleanCacheRepository',
        ],
        'Prettus\Repository\Events\RepositoryEntityUpdated' => [
            'Musafir\Core\Listeners\CleanCacheRepository',
        ],
        'Prettus\Repository\Events\RepositoryEntityDeleted' => [
            'Musafir\Core\Listeners\CleanCacheRepository',
        ],
        'Spatie\ResponseCache\Events\ResponseCacheHit' => [
            'Musafir\Core\Listeners\ResponseCacheHit',
        ],
    ];
}
