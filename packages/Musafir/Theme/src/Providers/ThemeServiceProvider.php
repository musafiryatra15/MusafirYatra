<?php

namespace Musafir\Theme\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/../Http/helpers.php';

        $this->app->singleton('view.finder', function ($app) {
            return new \Musafir\Theme\ThemeViewFinder(
                $app['files'],
                $app['config']['view.paths'],
                null
            );
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../Database/Migrations');

        Blade::directive('musafiryatraVite', function ($expression) {
            return "<?php echo themes()->setMusafirYatraVite({$expression})->toHtml(); ?>";
        });
    }
}
