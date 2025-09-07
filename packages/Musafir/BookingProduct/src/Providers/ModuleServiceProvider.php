<?php

namespace Musafir\BookingProduct\Providers;

use Musafir\Core\Providers\CoreModuleServiceProvider;

class ModuleServiceProvider extends CoreModuleServiceProvider
{
    /**
     * Models.
     *
     * @var array
     */
    protected $models = [
        \Musafir\BookingProduct\Models\BookingProduct::class,
        \Musafir\BookingProduct\Models\BookingProductDefaultSlot::class,
        \Musafir\BookingProduct\Models\BookingProductAppointmentSlot::class,
        \Musafir\BookingProduct\Models\BookingProductEventTicket::class,
        \Musafir\BookingProduct\Models\BookingProductEventTicketTranslation::class,
        \Musafir\BookingProduct\Models\BookingProductRentalSlot::class,
        \Musafir\BookingProduct\Models\BookingProductTableSlot::class,
        \Musafir\BookingProduct\Models\Booking::class,
    ];
}
