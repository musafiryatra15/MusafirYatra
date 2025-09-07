<?php

namespace Musafir\BookingProduct\Helpers;

class AppointmentSlot extends Booking
{
    /**
     * @param  \Musafir\BookingProduct\Contracts\BookingProduct  $bookingProduct
     */
    public function haveSufficientQuantity(int $qty, $bookingProduct): bool
    {
        return true;
    }
}
