<?php

namespace Musafir\Paypal\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use Musafir\Theme\ViewRenderEventManager;

class EventServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Event::listen('musafiryatra.shop.layout.body.after', static function (ViewRenderEventManager $viewRenderEventManager) {
            $viewRenderEventManager->addTemplate('paypal::checkout.onepage.paypal-smart-button');
        });

        Event::listen('sales.invoice.save.after', 'Musafir\Paypal\Listeners\Transaction@saveTransaction');
    }
}
