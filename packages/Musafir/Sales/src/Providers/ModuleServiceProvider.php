<?php

namespace Musafir\Sales\Providers;

use Musafir\Core\Providers\CoreModuleServiceProvider;

class ModuleServiceProvider extends CoreModuleServiceProvider
{
    /**
     * Models.
     *
     * @var array
     */
    protected $models = [
        \Musafir\Sales\Models\DownloadableLinkPurchased::class,
        \Musafir\Sales\Models\Invoice::class,
        \Musafir\Sales\Models\InvoiceItem::class,
        \Musafir\Sales\Models\Order::class,
        \Musafir\Sales\Models\OrderAddress::class,
        \Musafir\Sales\Models\OrderComment::class,
        \Musafir\Sales\Models\OrderItem::class,
        \Musafir\Sales\Models\OrderPayment::class,
        \Musafir\Sales\Models\OrderTransaction::class,
        \Musafir\Sales\Models\Refund::class,
        \Musafir\Sales\Models\RefundItem::class,
        \Musafir\Sales\Models\Shipment::class,
        \Musafir\Sales\Models\ShipmentItem::class,
    ];
}
