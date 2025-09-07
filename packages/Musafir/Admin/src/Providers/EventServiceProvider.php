<?php

namespace Musafir\Admin\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Musafir\Admin\Listeners\Admin;
use Musafir\Admin\Listeners\Customer;
use Musafir\Admin\Listeners\GDPR;
use Musafir\Admin\Listeners\Invoice;
use Musafir\Admin\Listeners\Order;
use Musafir\Admin\Listeners\Refund;
use Musafir\Admin\Listeners\Shipment;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event handler mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'customer.create.after' => [
            [Customer::class, 'afterCreated'],
        ],

        'customer.gdpr-request.create.after' => [
            [GDPR::class, 'afterGdprRequestCreated'],
        ],

        'customer.gdpr-request.update.after' => [
            [GDPR::class, 'afterGdprRequestUpdated'],
        ],

        'admin.password.update.after' => [
            [Admin::class, 'afterPasswordUpdated'],
        ],

        'checkout.order.save.after' => [
            [Order::class, 'afterCreated'],
        ],

        'sales.order.cancel.after' => [
            [Order::class, 'afterCanceled'],
        ],

        'sales.invoice.save.after' => [
            [Invoice::class, 'afterCreated'],
        ],

        'sales.shipment.save.after' => [
            [Shipment::class, 'afterCreated'],
        ],

        'sales.refund.save.after' => [
            [Refund::class, 'afterCreated'],
        ],
    ];
}
