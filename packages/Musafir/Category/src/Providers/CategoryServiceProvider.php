<?php

namespace Musafir\Category\Providers;

use Illuminate\Support\ServiceProvider;
use Musafir\Category\Models\CategoryProxy;
use Musafir\Category\Observers\CategoryObserver;

class CategoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__.'/../Database/Migrations');

        CategoryProxy::observe(CategoryObserver::class);
    }
}
